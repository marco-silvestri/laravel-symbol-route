@extends('shared.layout')

@section('content')
    <h1>My awesome services</h1>
    @foreach($services as $service)
    <p>{{ $service }}</p>
    @endforeach
@endsection
    