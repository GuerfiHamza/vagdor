@extends('layouts.main')

@section('title', 'A propos')

@section('content')

@if($products->isNotEmpty())

<div class="antialiased bg-gray-200 text-gray-900 font-sans p-6">
    <div class="container mx-auto">
      <div class="flex flex-wrap -mx-4">
          @foreach ($products as $product)

        <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
          <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
          <div class="relative pb-48 overflow-hidden">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ URL::asset('storage/'.$product->picture) }}" alt="">
          </div>
          <div class="p-4">
            <h2 class="mt-2 mb-2  font-bold">{{ $product->name }}</h2>
            <p class="text-sm">{!! \Illuminate\Support\Str::limit($product->description, 90) !!}</p>

          </div>
          <div class="p-4 border-t border-b text-xs text-gray-700">
            <span class="flex items-center mb-1">
              Réference: {{ $product->sku }} <br>
              Saveur: {{ $product->saveur }}
            </span>

          </div>
        </a>
        </div>
        @endforeach

      </div>
    {{ $products->links() }}

    </div>
  </div>
@else
    <div>
        <h2>No products found</h2>
    </div>
@endif

@stop
