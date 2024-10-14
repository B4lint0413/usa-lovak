@php
/**
* @var Illuminate\Support\Collection $horses
*/
@endphp

@extends('layouts.main')
@section('title', $title)
@section('content')
    <table id="table" class="table table-striped">
        <thead>
            <th>Állam</th>
            <th>Fajta</th>
            <th>Leírás</th>
            <th>Év</th>
        </thead>
        <tbody>
            @foreach($horses as $horse)
                <tr>
                    <td>{{$horse['fajta']}}</td>
                    <td>{{$horse['allam']}}</td>
                    <td>{{$horse['leiras']}}</td>
                    <td>{{$horse['ev']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection