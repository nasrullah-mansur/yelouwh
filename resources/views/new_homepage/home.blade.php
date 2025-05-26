@extends('new_homepage.layouts.main')

@section('title', 'Yelouwh - Support Creators Content')

@section('content')
    @include('new_homepage.sections.hero')
    @include('new_homepage.sections.posts')
    @include('new_homepage.sections.categories')
    @include('new_homepage.sections.creators')
@endsection 