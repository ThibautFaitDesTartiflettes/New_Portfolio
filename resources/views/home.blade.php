@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <div class="container mx-auto flex md:pl-10 py-24 md:flex-row flex-col items-center h-screen">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="animate__animated animate__fadeInLeft animate__slow title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Greetings,
                    <br class="hidden lg:inline-block">I'm <span class="text-orange-600">Thibaut</span> !
                </h1>
                <p class="animate__animated animate__fadeInLeft animate__slow mb-8 leading-relaxed">Actually studying in a <strong>French engineering school</strong> specialized in IT. 
                    <br>I am learning new things every day and building a lot of projects for fun. 
                    <br>Don't hesitate to <strong>contact me</strong> at any time, I'm always up for something new!</p>
                <div class="animate__animated animate__fadeIn animate__delay-2s flex justify-center">
                    <button class="inline-flex text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-orange-700 rounded text-lg transition duration-300 ease-in-out" onclick=window.location.href="{{ route('about') }}">Who am I ?</button>
                    <button class="ml-4 inline-flex text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-orange-700 rounded text-lg transition duration-300 ease-in-out" onclick=window.location.href="{{ route('projects') }}">My projects</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-4/6">
                <img class="animate__animated animate__fadeIn object-cover animate__slow object-center md:-ml-8" alt="Profile picture" src="img/pp_modif.png">
            </div>
        </div>
    </section>
@endsection