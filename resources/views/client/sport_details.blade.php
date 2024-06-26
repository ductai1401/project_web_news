@extends('master')

@section('title', 'Sport')

@section('content')
    <section class="utf_featured_post_area pt-4 no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pad-l">
                    <div class="utf_post_overaly_style contentTop">
                        <div class="utf_post_thumb"> <img class="img-fluid" style="height: 400px"
                                src="{{ asset('images/medal.jpeg') }}" alt="" /></div>
                        <div class="utf_post_content_n">
                            <h2 class="utf_post_title font_s"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="utf_featured_post_area pt-4 no-padding">
        <div class="container">
            <div class="row align-items-baseline">
                <div class="col-lg-3 h22">
                    <span>{{ $sport->name }}</span>
                </div>

                <div class="col-lg-9 h5">
                    <div>
                        {!! $sport->details !!}
                    </div>

                </div>
            </div>
        </div><br>


        <div class="container">
            <div>
                <div class="row">
                    <div class="container">
                        <div class="tab-content">
                            {{-- <table class="table table-bordered table-striped text-center" id="countrys">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Sport</th>
                                        <th class="text-center">Event</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Rank</th>
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($sport_childs as $sport_child)
                                        @php
                                            $olympic_sport = \App\Models\Olympic_sport::where('id_sport', $sport_child ->id)->first();
                                            
                                            $sport_parent = \App\Models\Sport::where('id', $sport_child ->parent_id)->first();

                                            $sport_medals = \App\Models\Medal::with('sport','country','athlete')->where('id_olympic_sport', $olympic_sport ->id)->orderBY('posision', 'asc')->get();
            
                                            
                                        @endphp
                                        @foreach ($sport_medals as $sport_medal)
                                            
                                            @php 
                                                $image_url = public_path("uploads/countrys") . '/' . $sport_medal ->country ->flag;
                                                if(!file_exists($image_url)) {
                                                    $image_url = asset('images/error.jpg');
                                                } else {
                                                    $image_url = asset("uploads/countrys") .'/' . $sport_medal ->country ->flag;
                                                }
                                                $sport_parent = \App\Models\Sport::where('id', $sport_medal ->sport ->parent_id)->first();
                                                
                                            @endphp 
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $sport_parent ->name }}</td>
                                                <td>{{ $sport_medal ->sport ->name}}</td>

                                                <td class="d-flex justify-content-center">
                                                    <div class="grid-cols-1 d-flex align-items-center">
                                                        <div class="" ><img src="{{ $image_url }}" alt="Sport_image" width="60px" height="40px"></div>
                                                        <div style="width: 60px" class="text-center">
                                                            {{$sport_medal ->country ->name}}
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </td>
                                                <td>{{ $sport_medal ->posision }}</td>
                                                <td>
                                                    <a href="{{ route('athlete',['id' =>  $sport_medal ->athlete ->id])}}">Detail</a>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                   
                                    @endforeach
                                </tbody>
                            </table> --}}@foreach ($sport_childs as $sport_child)
                            <div class="dropdown-event mb-5 mt-5">
                                        @php
                                            $olympic_sport = \App\Models\Olympic_sport::where('id_sport', $sport_child ->id)->first();
                                            
                                            $sport_parent = \App\Models\Sport::where('id', $sport_child ->parent_id)->first();

                                            $sport_medals = \App\Models\Medal::with('sport','country','athlete')
                                                                            ->where('id_olympic_sport', $olympic_sport ->id)
                                                                            ->orderBY('posision', 'asc')
                                                                            ->get();
                                            $i = 0;                                
                                        @endphp
                            
                                <div class="dropbtn-event ">
                                    <h4> {{  $sport_child ->name }}</h4><i class="fa-solid fa-chevron-down mt-2" class="dropdown-toggle"  data-toggle="collapse" data-target="#demo{{ $sport_child ->id}}" ></i>
                                </div>
                                <div id="demo{{$sport_child ->id}}" class="sub-menu" class="dropdown-content-event">
                                    <table class="table table-bordered table-striped text-center" id="countrys">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Country</th>
                                                <th class="text-center">Rank</th>
                                                <th class="text-center">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($sport_medals as $sport_medal)
                                                    @php
                                                        $image_url =
                                                            public_path('uploads/countrys') .
                                                            '/' .
                                                            $sport_medal->country->flag;
                                                        if (!file_exists($image_url)) {
                                                            $image_url = asset('images/error.jpg');
                                                        } else {
                                                            $image_url =
                                                                asset('uploads/countrys') .
                                                                '/' .
                                                                $sport_medal->country->flag;
                                                        }
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>

                                                        <td class="d-flex justify-content-center">
                                                            <div class="grid-cols-1 d-flex align-items-center">
                                                                <div class=""><img src="{{ $image_url }}"
                                                                        alt="Sport_image" width="60px" height="40px">
                                                                </div>
                                                                <div style="width: 60px" class="text-center">
                                                                    {{ $sport_medal->country->name }}

                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td>
                                                        @switch($sport_medal->posision)
                                                            @case(1)
                                                                <img src="{{ asset('images/medals/gold-medal.png') }}" alt="gold">
                                                                
                                                                @break
                                                            @case(2)
                                                                <img src="{{ asset('images/medals/silver-medal.png') }}" alt="silver">
                                                                
                                                                @break
                                                            @case(3)
                                                                <img src="{{ asset('images/medals/bronze-medal.png') }}" alt="bronze">
                                                                
                                                                @break
                                                            @default
                                                                {{ $sport_medal->posision }}
                                                        @endswitch
                                                        </td>
                                                        <td style="width: 500px; text-align:" >
                                                            <a style="color: currentColor; font-size: 24px;  "
                                                                href="{{ route('athlete', ['id' => $sport_medal->athlete->id]) }}">
                                                                <span>
                                                                    {{ $sport_medal->athlete ->name}}
                                                                </span>
                                                            </a>
                                                        </td>

                                                    </tr>

                                                @endforeach
                                           
                                        </tbody>
                                    </table>
                                    
                                </div>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
@endsection
