@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <div class="container mx-auto flex pl-10 py-24 md:flex-row flex-col items-center h-screen">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Greetings,
                    <br class="hidden lg:inline-block">I'm <span class="text-orange-600">Thibaut</span> !
                </h1>
                <p class="mb-8 leading-relaxed">Actually studying in a <strong>French engineering school</strong> specialized in IT. 
                    <br>I am learning new things every day and building a lot of projects for fun. 
                    <br>Don't hesitate to <strong>contact me</strong> at any time, I'm always up for something new!</p>
                <div class="flex justify-center">
                    <button class="inline-flex text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-orange-700 rounded text-lg transition duration-300 ease-in-out" onclick=window.location.href="{{ route('about') }}">Who am I ?</button>
                    <button class="ml-4 inline-flex text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-orange-700 rounded text-lg transition duration-300 ease-in-out" onclick=window.location.href="{{ route('projects') }}">My projects</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#ea580c" d="M42.2,-53.3C53.6,-40.6,61.3,-26.4,67.5,-9.3C73.6,7.9,78.3,27.9,71,41.4C63.7,54.9,44.4,61.9,25.9,66.7C7.5,71.4,-10.2,73.9,-28.6,70.7C-47,67.4,-66.3,58.4,-72,43.8C-77.7,29.3,-69.8,9.2,-64.6,-9.8C-59.4,-28.8,-56.7,-46.6,-46.4,-59.5C-36.1,-72.4,-18,-80.4,-1.3,-78.8C15.3,-77.2,30.7,-66,42.2,-53.3Z" transform="translate(100 100)" />
                </svg>
                <img class="absolute lg:-mt-[450px] lg:-ml-[90px]" alt="Profile picture" src="img/pp.png">
            </div>
        </div>
    </section>
@endsection