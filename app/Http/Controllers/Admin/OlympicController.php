<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Olympic;
use App\Http\Requests\Olympic\StoreRequest;
use App\Http\Requests\Olympic\UpdateRequest;
use App\Models\Medal;
use App\Models\Olympic_sport;
use Illuminate\Http\Request;

class OlympicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        


        $olympic = Olympic::where('status', '!=', 6)->orderBy('created_at', 'desc')->get();
        
        return view('admin.modules.olympic.index', ['olympics' => $olympic]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.olympic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $olympic = new Olympic();
        $file_logo = $request -> logo;
        $fileName_logo = time(). '-'.  $file_logo->getClientOriginalName();
        $file_mascot = $request -> mascot;
        $fileName_mascot = time(). '-'.  $file_mascot->getClientOriginalName();
        
        $olympic->name = $request -> name;
        $olympic->country = $request -> country;
        $olympic->logo = $fileName_logo;
        $olympic->year = $request -> year;
        $olympic->details = $request -> details;
        $olympic->mascot = $fileName_mascot;     
        
   
        $olympic->save();

        $file_logo -> move(public_path('uploads/olympics/logos'), $fileName_logo);
        $file_mascot -> move(public_path('uploads/olympics/mascots'), $fileName_mascot);

        return redirect()->route('admin.olympic.create')->with('success', 'Create olympic successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $olympic = Olympic::find($id);
        if($olympic == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.olympic.edit', [
            'id' => $id,
            'olympic' => $olympic,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
 
        $olympic = Olympic::find($id);


        if($olympic == null) {
            return redirect()->route('admin.404');
        } 

        $file_logo = $request ->logo;
        if(!empty($file_logo)){
            
            $validated = $request->validate([
                'logo' => 'mimes:jbg,jpeg,bmp,png',
                
            ],[
                'logo.mimes' => 'logo must jbg,jpeg,bmp,png', 
            ]);

            $old_logo_path = public_path('uploads/olympics/logos/'. $olympic->logo);
            
            if(file_exists($old_logo_path)){
                unlink($old_logo_path);
                
            }
            
            $fileName_logo = time(). '-'.  $file_logo->getClientOriginalName(); 
            

            $olympic->logo = $fileName_logo;
             
            $file_logo -> move(public_path('uploads/olympics/logos'), $fileName_logo );
        }

        $file_mascot = $request ->mascot;
        if(!empty($file_mascot)){
            
            $validated = $request->validate([
                'mascot' => 'mimes:jbg,jpeg,bmp,png',
                
            ],[
                'mascot.mimes' => 'logo must jbg,jpeg,bmp,png', 
            ]);

            $old_mascot_path = public_path('uploads/olympics/mascots/'. $olympic->mascot);
            if(file_exists($old_mascot_path)){
                unlink($old_mascot_path);
                
            }

            $fileName_mascot = time(). '-'.  $file_mascot->getClientOriginalName(); 

            $olympic->mascot = $fileName_mascot;
            
            $file_mascot -> move(public_path('uploads/olympics/mascots'), $fileName_mascot );
        }

        $olympic -> name = $request ->name;
        $olympic->year = $request -> year;
        $olympic->details = $request -> details;
        $olympic->country = $request -> country;

        $olympic->save();


        return redirect()->route('admin.olympic.index')->with('success', 'Update olympic successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $olympic = Olympic::find($id);

        if($olympic == null) {
            return redirect()->route('admin.404');
        } 

        $olympic_sports = Olympic_sport::where('id_olympic', $id)->get();
        foreach($olympic_sports as $olympic_sport){
            $medals = Medal::where('id_olympic_sport', $olympic_sport ->id)->get();
            foreach($medals as $medal){
                $medal ->status = 6;
                $medal ->save();
            }
            $olympic_sport ->status = 6;
            $olympic_sport ->save();
        }

        $olympic ->status = 6;
        $olympic ->save();
        // $olympic->delete();

        return redirect()->route('admin.olympic.index')->with('success', 'Delete olympic success');
    }


}
