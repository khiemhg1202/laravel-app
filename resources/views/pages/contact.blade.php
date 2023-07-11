@extends('layouts.app')
@section('content')
    
<h1>LÊ NGUYỄN KIM NGÂN</h1>

{{-- @switch($name)
    @case('Kim Ngan')
        <h2>I'm Kim Ngan</h2>
        @break
    @case('Hoang Khiem')
        <h2>I'm Hoang Khiem</h2>
        @break
    @default
        <h3>No one</h3>
@endswitch --}}

@foreach ($friends as $eachName)
    <h2> Friends of Kim Ngan: {{ $eachName}} </h2>
@endforeach

@forelse ($friends as $item)
    <h2> Friends of Kim Ngan: {{ $item}} </h2>
@empty
    <h3>Kim Ngan has no friends</h3>
@endforelse
@endsection 

