@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4">Brands</h1>
            <div class="row">
                @foreach($brands as $brand)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            @if ($brand->image_url)
                                <img src="{{ asset($brand->image_url) }}" class="card-img-top" alt="{{ $brand->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $brand->name }}</h5>
                                <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-primary">View Shoes</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

