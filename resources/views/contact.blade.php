@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font relative">
        <form action="{{ route('send') }}" method="post" id="contact-from">
            {{ csrf_field() }}
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4">Contact me</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Contact me for <strong>anything</strong> you want, I will answer back the fastest I can ! <br> I am available for <strong>work</strong>, <strong>internships</strong>, <strong>problems</strong>, <strong>order</strong>, <strong>etc</strong>...</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-stone-300">Name</label>
                                <input type="text" id="name" name="name" class="w-full bg-stone-300 rounded border-2 border-stone-100 focus:border-orange-600 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-stone-300">Email</label>
                                <input type="email" id="email" name="email" class="w-full bg-stone-300 rounded border-2 border-stone-100 focus:border-orange-600 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-stone-300">Message</label>
                                <textarea id="message" name="message" class="w-full bg-stone-300 rounded border-2 border-stone-100 focus:border-orange-600 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="Submit" form="contact-from" value="submit" class="flex mx-auto text-white bg-orange-600 border-0 py-2 px-8 focus:outline-none hover:bg-orange-700 rounded text-lg">Send
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="ml-2">
                                    <path fill="#ffffff" d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                        <a class="text-white">thibaut.meslin@hotmail.com</a>
                        <p class="leading-normal my-5 text-orange-600">10 rue du Gué
                            <br>27120, MENILLES, France
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="flex fixed w-full max-w-sm mx-auto overflow-hidden bg-stone-800 rounded-lg shadow-md absolute top-2 right-2">
                <div class="flex items-center justify-center w-12 bg-emerald-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                    </svg>
                </div>
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-emerald-500">Success</span>
                        <p class="text-sm text-white">Your Message as been send!</p>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection