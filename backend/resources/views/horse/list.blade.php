@php
/**
* @var Illuminate\Support\Collection $horses
*/
@endphp

@extends('layouts.main')
@section('title', $title)
@section('content')
    <ul id="lista">
        @foreach($horses as $horse)
            @if($loop->first)
            <li class="first">{{$horse['fajta']}} ({{$horse['allam']}} - {{$horse['ev']}})</li>
            @elseif($loop->last)
            <li class="last">{{$horse['fajta']}} ({{$horse['allam']}} - {{$horse['ev']}})</li>
            @else
            <li>{{$horse['fajta']}} ({{$horse['allam']}} - {{$horse['ev']}})</li>
            @endif
        @endforeach
    </ul>
@endsection