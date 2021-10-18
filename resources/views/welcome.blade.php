@extends('layouts.main')

@section('title', 'Accueil')

@section('content')

    {{-- <section class="relative w-full h-auto bg-no-repeat bg-center bg-cover" style="background-image: url(img/ban01.png);">

    <div class="absolute inset-0 z-0 h-full bg-black opacity-25"></div>

    <div class="container flex items-center justify-center h-auto py-32 mx-auto">

        <div class="z-10 flex flex-col items-center px-8 xl:px-0">
            <h1 class="mx-6 mt-1 text-xl text-5xl font-black text-center text-white lg:text-6xl sm:text-center sm:mx-0">Start Creating <br class="block lg:hidden">Your Next Idea!</h1>
            <p class="w-2/3 my-6 text-xl font-normal text-center text-gray-200">The ultimate toolset to help you expand your creative portfolio, craft your skills, and build the next million dollar applicaiton.</p>
            <div class="flex justify-center md:mt-10">
                <a href="#" class="px-8 py-2 m-2 text-center text-white bg-red-700 border-2 border-red-700 hover:bg-transparent rounded">Get Started</a>
                <a href="#" class="px-8 py-2 m-2 text-center text-white border-2 border-red-700 hover:bg-red-700 rounded">Learn More</a>
            </div>
        </div>

    </div>
</section> --}}
<section class="z-50 inset-0 relative">
    <img src="/img/ban01.png">
</section>
    <section class="relative w-full h-auto bg-no-repeat bg-center bg-cover -mt-20 pb-20" style="background-image: url(img/ban02.png);">


        <div class="container flex items-center justify-center h-auto py-16  mx-auto">

            <div class="z-10 flex flex-col items-center px-8 xl:px-0">
                <h1 class="mx-6 mt-1 text-xl font-black text-center text-white text-6xl sm:text-center sm:mx-0 drop-shadow-2xl">
                    Nos produits</h1>

            </div>

        </div>
        <div class=" text-gray-900 font-sans p-6">
            <div class="container mx-auto">
              <div class="flex flex-wrap -mx-4">
                  @foreach ($products as $product)
                <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/3 p-4">
                  <a href="{{ route('product.show', $product->slug) }}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
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

            </div>
          </div>
    </section>



@stop
