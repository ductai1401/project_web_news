<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Medal\StoreRequest;
use App\Http\Requests\Medal\UpdateRequest;
use App\Models\Athlete;
use App\Models\Country;
use App\Models\Medal;
use App\Models\Olympic_sport;
use Illuminate\Http\Request;

class MedalController extends Controller
{   
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    { 
        $medal = Medal::with('athlete','country','olympic','sport')->where('status','!=',6)->get();
        // $medalss = Sport::with('medal')->get();

       
       
        return view('admin.modules.medal.index', [
            'medals' => $medal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::get();
        $athlete = Athlete::get();


        $olympic_sport = Olympic_sport::with('sport','olympic')->orderBy('id_olympic', 'desc')->get();
        
        
        return view('admin.modules.medal.create',[
            'countrys' => $country,
            'athletes' => $athlete,
            'olympic_sports' => $olympic_sport,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $medal = new Medal();
        // option 2 for id_olympic_sports
        // $id_olympic_sport =$request ->id_olympic_sport;

        // if(!empty($id_olympic_sport)){
        //     $medals = Medal::where('id_olympic_sport','=',$id_olympic_sport)->first();
        //     if($medals->id){
        //         $validated = $request->validate([
        //         'posison' => 'unique:medals,posision',
                
        //     ],[
        //         'posison.unique' => 'This rank is already in use, please re-enter another position',
        //     ]);
        //     }
           
        // };


        
        $id_sport = $request -> id_sport;
        $id_olympic = $request -> id_olympic;
    
        $olympic_sport = Olympic_sport::where('id_olympic', '=', $id_olympic)->where( 'id_sport', '=', $id_sport)->first();
        
        

        $medal->posision = $request -> posision;
        $medal->id_athlete = $request -> id_athlete;
        $medal->id_country = $request -> id_country;
        $medal -> id_olympic_sport = $olympic_sport ->id;
        $medal->status = $request -> status;
        $medal->video = $request -> video;
        

        $medal->save();

        return redirect()->route('admin.medal.create')->with('success', 'Create medal successfully');
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
        $country = Country::get();
        $athlete = Athlete::get();
        $olympic_sport = Olympic_sport::with('sport','olympic')->orderBy('id_olympic', 'desc')->get();

        $medal = medal::with('athlete','country','olympic','sport')->find($id);
       
        if($medal == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.medal.edit', [
            'id' => $id,
            'medal' => $medal,
            'countrys' => $country,
            'athletes' => $athlete,
            'olympic_sports' => $olympic_sport,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $medal = medal::find($id);


        if($medal == null) {
            return redirect()->route('admin.404');
        } 


        $medal->posision = $request -> posision;
        $medal->id_athlete = $request -> id_athlete;
        $medal->id_country = $request -> id_country;
        $medal->status = $request -> status;
        $medal->video = $request -> video;

        $medal->save();

        return redirect()->route('admin.medal.index')->with('success', 'Update medal successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $medal = medal::find($id);

        if($medal == null) {
            return redirect()->route('admin.404');
        } 

        $medal ->status = 6;
        $medal ->save();

        // $medal->delete();

        return redirect()->route('admin.medal.index')->with('success', 'Delete medal success');
    }

}
