@extends('layouts.app')

@section('content')
@include('partials.jumbotron')

<section class="current_series">
    <div class="container my_container_lg">
        <span class="section_title bg-primary text-white">
            <h4 class="d-inline">CURRENT SERIES</h4>
        </span>
        <div class="section_content pt-5">
            <div class="row row-col-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 mt-6">
                @foreach($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <div class="card_text">
                            <span class="text-uppercase text-white">{{$comic['title']}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection