@extends('layouts.app')

@section('content')
    <div id="app"></div>
    @vite('resources/js/app.js')
@endsection
@vite(['resources/css/app.css', 'resources/js/app.js'])
