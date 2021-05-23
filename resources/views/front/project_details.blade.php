@extends('front.layouts.app')
@section('style')
    <style>
        .mainmenu-area {

            padding: 10px 0;

            background-color: #00DBDE;
            background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
        }

        .mainmenu-area.affix.menu2 {
            background-color: #833ce0;
        }

    </style>
@endsection
@section('content')

<div class="redMore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="imagess">
                    <img src="{{Voyager::image($project->image)}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="discription">
                        <h2>{{$project->title_en}}</h2>
                        <p>{{$project->description_en}}</p>
                        <h5>Here are some of the goals we can achieve when designing a website dedicated to your business</h5>
                    </div>
                </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="discriptiondetails">
                        <ul>
                            @foreach($project->goals as $goal)
                            <li>
                                <span></span>
                                <p>{{$goal->goal_en}}</p>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
