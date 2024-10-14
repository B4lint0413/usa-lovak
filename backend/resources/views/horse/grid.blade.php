@php
/**
* @var Illuminate\Support\Collection $horses
*/
@endphp

@extends('layouts.main')
@section('title', $title)
@section('content')
    <style>
        .card{
            border-top: 2px solid gray;
            border-bottom: 2px solid gray;
            background-color: #d6d6d6
        }
    </style>

    <div class="row">
        @foreach($horses as $horse)
            <div class="card col-12 col-md-5 col-lg-3 m-4">
                <h3 class="text-center">{{$horse['fajta']}}</h3>
                <h5 class="text-center">{{$horse['allam']}} ({{$horse['ev']}})</h5>
                <img class="img-fluid img-thumbnail" src="{{asset('img/' . $horse['kep'] . '')}}" alt="">
                <p class="text-center">{{$horse['leiras']}}</p>
            </div>
        @endforeach
    </div>
@endsection