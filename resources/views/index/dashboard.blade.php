
@extends('master')
@section('title','home')
@section('content')
    <div class="row index_row first">
        <div class="col-md-12 index_section_wrap">
            <div id="blog" class="section col-md-6">
                <h1>Most recent Blog</h1>
                <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.</p>
            </div>
            <div id="article" class="section col-md-5 floater">
                <h2>Most recent articles</h2>
                <div class="list-group">
                    @for($i = 0; $i < 3; $i++)
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">article {{ $i+1 }}</h4>
                            <p class="list-group-item-text">...</p>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </div>


    <div class="row index_row second">
        <div class="col-md-12 index_section_wrap">
            <div id="tutorial" class="section col-md-5">
                @for($i = 0; $i < 4; $i++)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object index_thumb" src="{{asset('img/graduation.png')}}" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Tutorial {{ $i +1 }}</h4>
                            ...
                        </div>
                    </div>
                @endfor
            </div>

            <div id="courses" class="section col-md-5 floater">
                @for($i = 0; $i < 3; $i++)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object index_thumb" src="{{asset('img/graduation.png')}}" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Course {{ $i + 1 }}</h4>
                            ...
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>


    <div class="row index_row third">
        <div class="col-md-12 index_section_wrap">
            <div id="skill" class="section">
                <div class="col-md-5">
                    @for($i = 0; $i < 2; $i++)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object index_thumb" src="{{asset('img/graduation.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Skill {{ $i +1  }}</h4>
                                ...
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="col-md-5 floater" >
                    @for($i = 0; $i < 2; $i++)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object index_thumb" src="{{asset('img/graduation.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Skill {{ $i+3 }}</h4>
                                ...
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@stop


