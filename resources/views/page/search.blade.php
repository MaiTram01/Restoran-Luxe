@extends('master')
@section('content')

<div class="search-results">
    <div class="header-search">
        <img src="source/assets/images/banner.jpg" alt="Header-Background">
        <div class="title">Search results for <span style="color:#e5612f">{{ $key }}</span></div>
    </div>
</div>

<div class="beta-items-list container">
    @if($items->count() > 0)
    <div class="row gy-5" style="margin-bottom: 100px;">
            @foreach($items as $item)
            <div class="col-3">
                <div class="card">
                    <img height="200px" width="100%" style="object-fit: cover;" src="{{ asset('source/assets/images/items/' . ($item->category->category_name) . '/' . $item->avatar) }}"
                        class="product-image" 
                        alt="{{ $item->item_name }}"
                        />
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->item_name }}</h5>
                        <p class="text-danger">${{ number_format($item->price, 0, ',', '.') }}</p>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
    <div class="no-search-result text-center" style="margin-top: 100px;">
            <h5 class="card-title" style="font-size: 30px;">No search results</h5>
            <div class="content">Sorry, we couldn't find any results matching your search.</div>
        </div>
    @endif
</div>
@endsection