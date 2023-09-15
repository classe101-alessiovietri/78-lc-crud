@extends('layouts.main')

@section('page-title', $pasta->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $pasta->title }}
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <img src="{{ $pasta->src }}" class="card-img-top" style="max-height: 100px;" alt="{{ $pasta->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $pasta->title }}</h5>
                    <p class="card-text">
                        <div>
                            {{ $pasta->cooking_time }} min.
                        </div>
                        <div>
                            {{ $pasta->weight }}g
                        </div>
                        <div>
                            {{-- {{ $pasta->description }} --}}
                            {!! $pasta->description !!}
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
