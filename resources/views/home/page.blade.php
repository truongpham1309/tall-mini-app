@extends('layouts.app')

@section('content')
    @include('home.components.hero')
    @include('home.components.feature')
    @include('home.components.how-it-work')
    @include('home.components.technologies')
    @include('home.components.register-now')
    @include('home.components.testimonials')
    @include('home.components.contact')
@endsection
