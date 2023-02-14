@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <h1 class="title-font sm:text-4xl text-3xl mb-8 font-medium text-white">{{__('message.intern_h1')}}<span class="text-orange-600">{{__('message.intern_span1')}}</h1>
            <div class="flex flex-col items-center justify-between lg:flex-row">
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="animate__animated animate__fadeInLeft max-w-xl mb-6">
                        <img class="animate__animated animate__fadeIn animate__slow float-left mr-2" src="img/png/access-control.png" style="width: 36px; height:36px" alt="Buildings">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"> - Schneider Electric</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Software engineer</span>{{__('message.intern_p7')}}</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        {{__('message.intern_p8')}}
                        </p>
                        <div class="animate__animated animate__fadeIn animate__delay-1s container flex flex-wrap w-full mt-5">
                            <div class="w-14 h-14 bg-stone-800 rounded-lg my-2">
                                <img src="img/svg/programming_lang/c-plus-plus.svg" class="scale-125" alt="C++">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative lg:w-1/2">
                    <img class="object-cover w-full h-32 rounded shadow-lg sm:h-96 saturate-[0] m-[20px] hidden md:block" src="img/se1.jpg" alt="SchneiderElectric"/>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between lg:flex-row mt-8">
                <div class="animate__animated animate__fadeIn animate__slow relative lg:w-1/2">
                    <img class="object-cover w-full h-32 rounded shadow-lg sm:h-96 saturate-[0] m-[20px] hidden md:block" src="img/bdf.jpg" alt="BanqueDeFrance"/>
                </div>
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="animate__animated animate__fadeInRight max-w-xl mb-6">
                        <img class="float-left mr-2" src="img/svg/bank.svg" style="width: 36px; height:36px" alt="Bank">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"> - Banque de France</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Full stack developer</span>{{__('message.intern_p1')}}</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        {{__('message.intern_p2')}}
                        </p>
                        <div class="animate__animated animate__fadeIn animate__delay-1s container flex flex-wrap w-full mt-5">
                            <div class="w-14 h-14 bg-stone-800 rounded-lg my-2 p-2">
                                <img src="img/svg/programming_lang/angular.svg" alt="Angular">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/java.svg" alt="Java">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg my-2 mx-0 p-2">
                                <img src="img/svg/programming_lang/soapui.svg" alt="SoapUi">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/kubernetes.svg" alt="Kubernetes">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg my-2 mx-0 p-2">
                                <img src="img/svg/programming_lang/jenkins.svg" alt="Jenkins">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between lg:flex-row mt-8">
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="animate__animated animate__fadeInLeft max-w-xl mb-6">
                        <img class="animate__animated animate__fadeIn animate__slow float-left mr-2" src="img/svg/buildings.svg" style="width: 36px; height:36px" alt="Buildings">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"> - Schneider Electric</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Software developer</span>{{__('message.intern_p3')}}</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        {{__('message.intern_p4')}}
                        </p>
                        <div class="animate__animated animate__fadeIn animate__delay-1s container flex flex-wrap w-full mt-5">
                            <div class="w-14 h-14 bg-stone-800 rounded-lg my-2 p-2">
                                <img src="img/svg/programming_lang/c_sharp.svg" alt="C#">
                            </div>
                            <div class="w-14 h-14 bg-stone-800 rounded-lg m-2 p-2">
                                <img src="img/svg/programming_lang/json.svg" alt="JSON">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative lg:w-1/2">
                    <img class="object-cover w-full h-32 rounded shadow-lg sm:h-96 saturate-[0] m-[20px] hidden md:block" src="img/se.jpg" alt="SchneiderElectric"/>
                </div>
            </div>
            <div class="bar2"></div>
            <h1 class="title-font sm:text-4xl text-3xl mb-8 font-medium text-white">{{__('message.intern_h2')}}<span class="text-orange-600">{{__('message.intern_span2')}}</h1>
            <div class="flex flex-col items-center justify-between lg:flex-row">
                <div class="animate__animated animate__fadeIn animate__slow relative lg:w-1/2">
                    <img class="object-cover w-full h-48 rounded shadow-lg sm:h-96 saturate-[0] m-[20px] hidden md:block" src="img/tcp.jpg" alt="TennisClubPacy"/>
                </div>
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="animate__animated animate__fadeInRight max-w-xl mb-6">
                        <img class="float-left mr-2" src="img/svg/tennis_player.svg" style="width: 36px; height:36px" alt="TennisPlayer">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"> - Tennis club de Pacy</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Tennis coach</span>{{__('message.intern_p5')}}</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        {{__('message.intern_p6')}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between lg:flex-row mt-8">
                <div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <div class="animate__animated animate__fadeInLeft max-w-xl mb-6">
                        <img class="animate__animated animate__fadeIn animate__slow float-left mr-2" src="img/png/tennis.png" style="width: 36px; height:36px" alt="Buildings">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:leading-none"> - Allmänna Tennisklubben Lund</h2>
                        <p class="text-base leading-relaxed -mt-4 ml-5"><span class="underline decoration-orange-600">Tennis coach</span>{{__('message.intern_p9')}}</p>
                        <br>
                        <p class="text-base leading-relaxed">
                        {{__('message.intern_p10')}}
                        </p>
                    </div>
                </div>
                <div class="relative lg:w-1/2">
                    <img class="object-cover w-full h-32 rounded shadow-lg sm:h-96 saturate-[0] m-[20px] hidden md:block" src="img/atl.jpg" alt="SchneiderElectric"/>
                </div>
            </div>
        </div>
    </section>
@endsection