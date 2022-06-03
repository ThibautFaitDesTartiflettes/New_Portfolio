@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="grid gap-10 lg:grid-cols-2">
                <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
                    <div class="max-w-xl mb-6">
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">It's a me <font color="#ea580c">Thibaut</font> !</h1>
                        <p class="mb-8 leading-relaxed">
                        My name is <strong>Thibaut Meslin</strong> and I'm <strong>20</strong> years old. 
                        Currently studying at <strong>CESI engineering school</strong> in an <strong>IT specialized</strong> section. 
                        As far as I am concerned, <strong>software</strong> and <strong>web development</strong> are my main interests. 
                        I have a really <strong>deep</strong> interst in both and I like to build a lot a projects around those domains. 
                        You can see those on my GitHub or just check "my projects" page.
                        <br><br>
                        My greatest asset is my <strong>creativity</strong>! There are always a lot of ideas that are traveling through my head 
                        (not all of them are good) and I keep most of them in a <strong>note</strong> or a <strong>notebook</strong>. 
                        I would say that I'm very <strong>autonomous</strong>, in the way I study as well as the way I develop. 
                        This doesn't mean that I can't work in a <strong>team</strong>! I can and do work in a team quite well. 
                        My <strong>commitment</strong> and my <strong>taste</strong> for a job well done were very much appreciated by the people I worked with.
                        <br><br>
                        To talk a bit about the future, I would like to become a <strong>DevOps</strong> and work in an environment where I feel <strong>comfortable</strong>. 
                        I would like to start my career as a DevOps and in a certain amount of year, create <strong>my own company</strong>. 
                        For now, I don't really know what exactly could be the main purpose of it, apart from the sector. 
                        I hope that my studies at CESI will help me clear my mind and answer all those questions.
                        </p>
                        <div class="bar"></div>
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">My <font color="#ea580c">skills</font></h1>
                        <div class="container flex flex-wrap w-full">
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/html.svg" alt="HTML">
                                <div class="py-1 text-center">
                                    <span class="text-sm">HTML</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/css.svg" alt="CSS">
                                <div class="py-1 text-center">
                                    <span class="text-sm">CSS</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/javascript.svg" alt="JS">
                                <div class="py-1 text-center">
                                    <span class="text-sm">Javascript</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/php.svg" alt="PHP">
                                <div class="py-1 text-center">
                                    <span class="text-sm">Php</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/angular.svg" alt="ANGULAR">
                                <div class="py-1 text-center">
                                    <span class="text-sm">Angular</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/c_sharp.svg" alt="C_SHARP">
                                <div class="py-1 text-center">
                                    <span class="text-sm">C#</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/java.svg" alt="JAVA">
                                <div class="py-1 text-center">
                                    <span class="text-sm">Java</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/python.svg" alt="PYTHON">
                                <div class="py-1 text-center">
                                    <span class="text-sm">Python</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/mysql.svg" alt="MYSQL">
                                <div class="py-1 text-center">
                                    <span class="text-sm">MySQL</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/postgresql.svg" alt="POSTGRESQL">
                                <div class="py-1 text-center">
                                    <span class="text-sm">PostgreSQL</span>
                                </div>
                            </div>
                            <div class="w-1/4 bg-stone-800 rounded-lg m-4">
                                <img class="mx-auto w-2/4" src="img/svg/programming_lang/sqlserver.svg" alt="SQL_SERVER">
                                <div class="py-1 text-center">
                                    <span class="text-sm">SQL Server</span>
                                </div>
                            </div>
                        </div>
                        <div class="bar"></div>
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">Spoken <font color="#ea580c">languages</font></h1>
                        <ul class="mb-8 leading-relaxed list-disc">
                            <li class="ml-10">French : Mother tongue</li>
                            <li class="ml-10">English : Fluent (TOEIC : 875)</li>
                            <li class="ml-10">Spanish : B2</li>
                        </ul>
                        <div class="bar"></div>
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">My <font color="#ea580c">curriculum vitae</font></h1>
                        <div class="p-2 w-full">
                            <button class="flex mt-2 mx-auto text-white bg-orange-600 border-0 py-4 px-20 focus:outline-none hover:bg-orange-700 rounded text-lg" onclick=window.location.href="documents/Resume.pdf">Download it!
                                <svg class="mt-0.5" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff" d="m9.001 13.022h-3.251c-.412 0-.75.335-.75.752 0 .188.071.375.206.518 1.685 1.775 4.692 4.945 6.069 6.396.189.2.452.312.725.312.274 0 .536-.112.725-.312 1.377-1.451 4.385-4.621 6.068-6.396.136-.143.207-.33.207-.518 0-.417-.337-.752-.75-.752h-3.251v-9.02c0-.531-.47-1.002-1-1.002h-3.998c-.53 0-1 .471-1 1.002zm4.498-8.522v10.022h3.008l-4.507 4.751-4.507-4.751h3.008v-10.022z" fill-rule="nonzero"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:fixed lg:right-16 -mx-4 lg:pl-8">
                    <div class="flex flex-col items-end px-3">
                        <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56" src="img/svg/networking.svg" alt="Networking"/>
                        <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40" src="img/svg/tennis.svg" alt="Tennis"/>
                    </div>
                    <div class="px-3">
                        <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80" src="img/svg/programming.svg" alt="Programming"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection