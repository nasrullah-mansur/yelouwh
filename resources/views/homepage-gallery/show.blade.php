@extends('layouts.app')

@section('title') {{ $gallery->name }} @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $gallery->name }}</h1>
                </div>
                <div class="card-body">
                    @if($gallery->image)
                        <img src="{{ $gallery->image_url }}" alt="{{ $gallery->name }}" class="img-fluid mb-3">
                    @endif
                    
                    <p class="lead">{{ $gallery->description }}</p>
                    
                    @if($gallery->stats && count($gallery->stats) > 0)
                        <div class="stats mb-3">
                            <h5>Statistics:</h5>
                            @foreach($gallery->stats as $stat)
                                <span class="badge badge-info mr-2">
                                    @if(isset($stat['icon']))
                                        <i class="{{ $stat['icon'] }}"></i>
                                    @endif
                                    {{ $stat['text'] ?? '' }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                    
                    @if($gallery->badge_text)
                        <div class="badge-section mb-3">
                            <span class="badge badge-{{ $gallery->badge_type }}">{{ $gallery->badge_text }}</span>
                        </div>
                    @endif
                    
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 