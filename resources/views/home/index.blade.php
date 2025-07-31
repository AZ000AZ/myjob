@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <div id="app"></div>
    @vite('resources/js/app.js')
@endsection
@vite(['resources/css/app.css', 'resources/js/app.js'])
