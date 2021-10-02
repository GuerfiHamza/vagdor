@extends('layouts.main')

@section('title', $product->name )

@section('content')

<section class="text-gray-700 body-font overflow-hidden ">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full h-auto object-cover object-center rounded-3xl  border border-gray-200" src="{{ URL::asset('storage/'.$product->picture) }}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">Vag D'or</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
       
          <p class="leading-relaxed">
              {!! $product->description !!}
          </p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            <div class="flex">
              <span class="mr-3"> <span class="font-bold">Saveur :</span>  {{ $product->saveur }}</span>
              
            </div>
            <div class="flex ml-6 items-center">
              <span class="mr-3"><span class="font-bold">Ref :</span> {{ $product->sku }} </span>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
@stop