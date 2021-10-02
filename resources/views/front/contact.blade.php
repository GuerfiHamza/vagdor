@extends('layouts.main')

@section('title', 'Contact')

@section('content')


<div class="py-4 lg:py-8 relative">
    <div class="xl:mx-auto xl:container-fluid relative">
        <div class="flex flex-wrap xl:mx-auto xl:container-fluid">
            <div class="w-full relative lg:w-1/2 xl:mt-10 mb-10 2xl:pr-24 2xl:pl-0 xl:pl-12 pl-0 border-r-2 border-yellow-500">

                <div class="w-full flex flex-col items-start xl:justify-start relative z-20 xl:px-0 px-4 xl:py-0 py-4">
                    <div class="w-full 2xl:pl-48 xl:pt-1">
                        <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold tracking-wider text-gray-800">We’re Here</h1>
                        <div class="w-full md:w-10/12 mt-3">
                            <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider">We believe digital innovation is at the heart of every business success</h2>
                            <div class="mt-4 md:mt-8">
                                <h2 class="text-sm md:text-base text-yellow-700 font-semibold">Address</h2>
                                <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">Office #13, NSTP, NUST University H-12 Sector, Islamabad</h2>
                            </div>
                            <div class="mt-4 md:mt-8">
                                <h2 class="text-sm md:text-base text-yellow-700 font-semibold">Contact</h2>
                                <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">+92 051 4567890 (Phone)</h2>
                                <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">+92 123 4567890 (Cell)</h2>
                            </div>
                            <div class="mt-4 md:mt-8">
                                <h2 class="text-sm md:text-base text-yellow-700 font-semibold">Email</h2>
                                <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">alphasquad@example.com</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:pt-10 lg:pl-24">
                <div class="flex flex-col items-start xl:justify-start 2xl:justify-end xl:px-0 px-4">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold tracking-wider text-yellow-700">Let’s Talk</h1>
                    <div class="w-full 2xl:w-8/12 mt-3" role="form">
                        <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider">For enquiries, please email us using the form below</h2>
                        <form action="{{ route('mailContactForm') }}" method="post">
                            {{ csrf_field() }}

                            <div class="mt-4 md:mt-8">
                                <p class="text-gray-800 text-base font-medium">Name</p>
                                <input name="name" class="mt-3 text-base border-2 w-full  hover:border-yellow-600 focus:border-yellow-600 focus:outline-none border-black py-5 pl-4 text-gray-800" type="text" placeholder="Justin Timberlake" aria-label="enter your name input" />
                            </div>
                            <div class="flex flex-wrap overflow-hidden">

                                <div class="w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2">
                                    <div class="mt-4 md:mt-8">
                                        <p class="text-gray-800 text-base font-medium">Email Address</p>
                                        <input name="email" class="mt-3 text-base border-2 w-11/12 hover:border-yellow-600 focus:border-yellow-600 focus:outline-none border-black py-5 pl-4 text-gray-800" type="email" placeholder="example@mail.com" aria-label="enter your email input" />
                                    </div>
                        </div>

                        <div class="w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2">
                            <div class="mt-4 md:mt-8">
                                <p class="text-gray-800 text-base font-medium">Sujet</p>
                                <input name="subject" class="mt-3 text-base border-2 w-full hover:border-yellow-600 focus:border-yellow-600 focus:outline-none border-black py-5 pl-4 text-gray-800" type="text" placeholder="Justin Timberlake" aria-label="enter your subject input" />
                            </div>
                            
                        </div>

                    </div>
                            <div class="mt-4 md:mt-8">
                                <p class="text-gray-800 text-base font-medium">Message</p>
                                <textarea name="message" class="mt-3 text-base border-2 w-full  resize-none hover:border-yellow-600 focus:border-yellow-600 focus:outline-none border-black xl:h-40 py-5 pl-4 text-gray-800" type="text" placeholder="Write us something..." aria-label="enter your message input"></textarea>
                            </div>
                            <div class="py-5">
                                <button class="py-3 md:py-5 px-5 md:px-10 bg-gray-900 text-white hover:opacity-90 ease-in duration-150 text-sm md:text-lg tracking-wider font-semibold focus:border-4 focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" type="submit">Send</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
