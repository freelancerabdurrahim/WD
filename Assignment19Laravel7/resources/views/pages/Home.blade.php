@extends('layout.app')

@section('content')
    @include('component.Hero')
    @include('component.HowWeDo')
    @include('component.Priceing')
    @include('component.Team')
    @include('component.Newsletter')

@endsection()