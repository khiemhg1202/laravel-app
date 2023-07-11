@extends('layouts.app')
@section('content')

<h1>ABOUT LE NGUYEN KIM NGAN</h1>
    
    @foreach ($infor as $item)
        <h3> {{$item}} </h3>
    @endforeach

    @for ($i = 1; $i < 20; $i++)
        <h3>  i = {{$i}}  </h3>
    @endfor  
@endsection 