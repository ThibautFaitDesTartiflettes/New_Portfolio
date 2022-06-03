@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <h1 class="title-font sm:text-4xl text-3xl mb-16 font-medium text-white">My <span class="text-orange-600">Internships</h1>
            <div class="flex flex-col items-center justify-between lg:flex-row">
                <div class="relative lg:w-1/2">
                    <img class="object-cover w-full h-32 rounded shadow-lg sm:h-96 saturate-[0] m-[20px]" src="img/bdf.jpg" alt="BanqueDeFrance"/>
                </div>
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="max-w-xl mb-6">
                        <img class="float-left mr-2" src="img/svg/bank.svg" style="width: 36px; height:36px" alt="Bank">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"> - Banque de France</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Full stack developer</span> | January 2022 - April 2022</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        Part of the Java development line, hired to develop a new functionality to export data from the AUDITOR app into a CSV file. 
                        I had to implement some methods on the back-end side using the Apache Common CSV library. 
                        Implement more methods on the front-end side to communicate with the back-end in order to retrieve the file and offer it for download. 
                        I was working in a CICD context and AGILE methods. 
                        </p>
                        <div class="container flex flex-wrap w-full">
                            <div class="w-14 h-14 bg-stone-800 rounded-lg my-2 p-2">
                                <img src="img/svg/programming_lang/angular.svg" alt="Angular">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/java.svg" alt="Java">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/soapui.svg" alt="SoapUi">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/kubernetes.svg" alt="Kubernetes">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/jenkins.svg" alt="Jenkins">
                            </div>
                        </div>
                        <button class="flex mt-2 text-white bg-orange-600 border-0 py-2 px-10 focus:outline-none hover:bg-orange-700 rounded text-lg" onclick=window.location.href="documents/bdf_report_fr.pdf">Report
                            <svg class="mt-0.5" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffffff" d="m9.001 13.022h-3.251c-.412 0-.75.335-.75.752 0 .188.071.375.206.518 1.685 1.775 4.692 4.945 6.069 6.396.189.2.452.312.725.312.274 0 .536-.112.725-.312 1.377-1.451 4.385-4.621 6.068-6.396.136-.143.207-.33.207-.518 0-.417-.337-.752-.75-.752h-3.251v-9.02c0-.531-.47-1.002-1-1.002h-3.998c-.53 0-1 .471-1 1.002zm4.498-8.522v10.022h3.008l-4.507 4.751-4.507-4.751h3.008v-10.022z" fill-rule="nonzero"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between lg:flex-row mt-24">
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="max-w-xl mb-6">
                        <img class="float-left mr-2" src="img/svg/buildings.svg" style="width: 36px; height:36px" alt="Buildings">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"> - Schneider Electric</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Software developer</span> | January 2021 - February 2021</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        Part of a team of 2 developers and a project manager, hired to participate in the development of a sun tracking solution. 
                        This project takes place in the "smart city" context with the aim of making eco-friendly buildings. 
                        I developed a functionality that track down every recommendation made by the app.
                        </p>
                        <div class="container flex flex-wrap w-full">
                            <div class="w-14 h-14 bg-stone-800 rounded-lg my-2 p-2">
                                <img src="img/svg/programming_lang/c_sharp.svg" alt="C#">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/json.svg" alt="JSON">
                            </div>
                        </div>
                        <button class="flex mt-2 text-white bg-orange-600 border-0 py-2 px-10 focus:outline-none hover:bg-orange-700 rounded text-lg" onclick=window.location.href="documents/se_report_fr.pdf">Report
                            <svg class="mt-0.5" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffffff" d="m9.001 13.022h-3.251c-.412 0-.75.335-.75.752 0 .188.071.375.206.518 1.685 1.775 4.692 4.945 6.069 6.396.189.2.452.312.725.312.274 0 .536-.112.725-.312 1.377-1.451 4.385-4.621 6.068-6.396.136-.143.207-.33.207-.518 0-.417-.337-.752-.75-.752h-3.251v-9.02c0-.531-.47-1.002-1-1.002h-3.998c-.53 0-1 .471-1 1.002zm4.498-8.522v10.022h3.008l-4.507 4.751-4.507-4.751h3.008v-10.022z" fill-rule="nonzero"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="relative lg:w-1/2">
                    <img class="object-cover w-full h-32 rounded shadow-lg sm:h-96 m-[20px]" src="img/se.jpg" alt="SchneiderElectric"/>
                </div>
            </div>
            <div class="bar2"></div>
            <h1 class="title-font sm:text-4xl text-3xl mb-16 font-medium text-white">My <span class="text-orange-600">Jobs</h1>
            <div class="flex flex-col items-center justify-between lg:flex-row">
                <div class="relative lg:w-1/2">
                    <img class="object-cover w-full h-48 rounded shadow-lg sm:h-96 saturate-[0] m-[20px]" src="img/tcp.jpg" alt="TennisClubPacy"/>
                </div>
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="max-w-xl mb-6">
                        <img class="float-left mr-2" src="img/svg/tennis_player.svg" style="width: 36px; height:36px" alt="TennisPlayer">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"> - Tennis club de Pacy</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Tennis coach</span> | September 2020 - Now</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        Working as a tennis coach in my club alongside my studies. I am responsible for the training of the players from 4 years old. 
                        I teach them the fundamentals of the game, the rules of the game, tactical & technical points and give them some tips. 
                        My main goal is to improve the players' skills and to make them more competitive. I also want them to have fun while playing. 
                        I'm teaching on the weekend with an average of 7 hours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection