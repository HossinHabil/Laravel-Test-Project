@extends('layout.master')


@section('title', 'about')


@section('content')
    <div class="container">
        <h2>About Page</h2>
        {{-- @if($name == 'Hossin')
            <p>Hello {{ $name }}</p>
        @else
            <p>No</p>
        @endif --}}
    </div>
    <p>{{ $Sname }} -- {{ $age }}</p>
@endsection

