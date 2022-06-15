@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="grid gap-10 lg:grid-cols-2">
                <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
                    <div class="animate__animated animate__fadeInLeft animate__slow ml-5 max-w-xl mb-6">
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">It's a me <font color="#ea580c">Thibaut</font> !</h1>
                        <p class="mb-8 leading-relaxed">
                        {{__('message.about_p1')}}<strong>Thibaut Meslin</strong>{{__('message.about_p2')}}<strong>20</strong>{{__('message.about_p3')}}
                        {{__('message.about_p4')}}<strong>{{__('message.about_strong1')}}</strong>{{__('message.about_p5')}}<strong>{{__('message.about_strong2')}}</strong>{{__('message.about_p6')}}
                        {{__('message.about_p7')}}<strong>{{__('message.about_strong3')}}</strong>{{__('message.about_p8')}}<strong>{{__('message.about_strong4')}}</strong>{{__('message.about_p9')}}
                        {{__('message.about_p10')}}<strong>{{__('message.about_strong5')}}</strong>{{__('message.about_p11')}}
                        {{__('message.about_p12')}}
                        <br><br>
                        {{__('message.about_p13')}}<strong>{{__('message.about_strong6')}}</strong>
                        {{__('message.about_p14')}}<strong>{{__('message.about_strong7')}}</strong>{{__('message.about_p15')}}<strong>{{__('message.about_strong8')}}</strong>. 
                        {{__('message.about_p16')}}<strong>{{__('message.about_strong9')}}</strong>
                        {{__('message.about_p17')}}<strong>{{__('message.about_strong10')}}</strong>
                        {{__('message.about_p18')}}<strong>{{__('message.about_strong11')}}</strong>{{__('message.about_p19')}}<strong>{{__('message.about_strong12')}}</strong>{{__('message.about_p20')}}
                        <br><br>
                        {{__('message.about_p21')}}<strong>DevOps</strong>{{__('message.about_p22')}}<strong>{{__('message.about_strong13')}}</strong>. 
                        {{__('message.about_p23')}}<strong>{{__('message.about_strong14')}}</strong>. 
                        {{__('message.about_p24')}}
                        </p>
                        <div class="bar"></div>
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">{{__('message.about_h1')}}<font color="#ea580c">{{__('message.about_font1')}}</font></h1>
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
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">{{__('message.about_h2')}}<font color="#ea580c">{{__('message.about_font2')}}</font></h1>
                        <ul class="mb-8 leading-relaxed list-disc">
                            <li class="ml-10">{{__('message.about_li1')}}</li>
                            <li class="ml-10">{{__('message.about_li2')}}</li>
                            <li class="ml-10">{{__('message.about_li3')}}</li>
                        </ul>
                        <div class="bar"></div>
                        <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">{{__('message.about_h3')}}<font color="#ea580c">curriculum vitae</font></h1>
                        <div class="p-2 w-full">
                            <button class="flex mt-2 mx-auto text-white bg-orange-600 border-0 py-4 px-20 focus:outline-none hover:bg-orange-700 rounded text-lg" onclick=window.location.href="documents/Resume.pdf">{{__('message.about_button1')}}
                                <svg class="mt-0.5" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff" d="m9.001 13.022h-3.251c-.412 0-.75.335-.75.752 0 .188.071.375.206.518 1.685 1.775 4.692 4.945 6.069 6.396.189.2.452.312.725.312.274 0 .536-.112.725-.312 1.377-1.451 4.385-4.621 6.068-6.396.136-.143.207-.33.207-.518 0-.417-.337-.752-.75-.752h-3.251v-9.02c0-.531-.47-1.002-1-1.002h-3.998c-.53 0-1 .471-1 1.002zm4.498-8.522v10.022h3.008l-4.507 4.751-4.507-4.751h3.008v-10.022z" fill-rule="nonzero"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:fixed lg:right-16 -mx-4 lg:pl-8">
                    <div class="flex flex-col items-end px-3">
                        <img class="animate__animated animate__fadeIn animate__delay-2s object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56" src="img/svg/networking.svg" alt="Networking"/>
                        <img class="animate__animated animate__fadeIn animate__delay-4s object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40" src="img/svg/tennis.svg" alt="Tennis"/>
                    </div>
                    <div class="px-3">
                        <img class="animate__animated animate__fadeIn animate__delay-3s object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80" src="img/svg/programming.svg" alt="Programming"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection