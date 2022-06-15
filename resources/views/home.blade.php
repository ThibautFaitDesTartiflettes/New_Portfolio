@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <div class="container mx-auto flex md:pl-10 py-24 md:flex-row flex-col items-center h-screen">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="animate__animated animate__fadeInLeft animate__slow title-font sm:text-4xl text-3xl mb-4 font-medium text-white">{{__('message.home_h1')}}
                    <br class="hidden lg:inline-block">{{__('message.home_br')}}<span class="text-orange-600">Thibaut</span> !
                </h1>
                <p class="animate__animated animate__fadeInLeft animate__slow mb-8 leading-relaxed">{{__('message.home_p1')}}<strong>{{__('message.home_strong1')}}</strong>{{__('message.home_p2')}}
                    <br>{{__('message.home_p3')}}
                    <br>{{__('message.home_p4')}}<strong>{{__('message.home_strong2')}}</strong>{{__('message.home_p5')}}</p>
                <div class="animate__animated animate__fadeIn animate__delay-2s flex justify-center">
                    <button class="inline-flex text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-orange-700 rounded text-lg transition duration-300 ease-in-out" onclick=window.location.href="{{ route('about') }}">{{__('message.home_button1')}}</button>
                    <button class="ml-4 inline-flex text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-orange-700 rounded text-lg transition duration-300 ease-in-out" onclick=window.location.href="{{ route('projects') }}">{{__('message.home_button2')}}</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-4/6">
                <img class="animate__animated animate__fadeIn object-cover animate__slow object-center md:-ml-8" alt="Profile picture" src="img/pp_modif.png">
            </div>
        </div>
    </section>
@endsection