@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">{{ $brand->name }}</h1>
            @if ($brand->image_url)
                <img src="{{ asset($brand->image_url) }}" class="img-fluid mb-4" alt="{{ $brand->name }}">
            @endif
            <h2 class="mt-4">Shoes</h2>
            <div class="row">
                @foreach($brand->shoes as $shoe)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            @if ($shoe->image_url)
                                <img src="{{ asset($shoe->image_url) }}" class="card-img-top" alt="{{ $shoe->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $shoe->name }}</h5>
                                <p class="card-text">{{ $shoe->history }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('brands.index') }}" class="btn btn-secondary mt-4">Back to Brands</a>
        </div>
    </div>
@endsection

