@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 py-16 body-font px-12 md:px-32 min-h-[90vh]">
        <div class="flex flex-col w-full justify-center text-center">
            <h1 class="text-5xl text-orange-600">{{__('message.legal_h1')}}</h1>
            <br>
            <i class="mb-5">
                {{__('message.legal_i1')}}
            </i>
        </div>
        <div>
            <h2 class="my-8 text-2xl text-orange-600">{{__('message.legal_h2')}}</h2>
            <p class="mb-5 ml-9">
                {{__('message.legal_p2')}}<br>
                <i class="ml-12">{{__('message.legal_i2')}}</i> 
            </p>
            <h2 class="my-8 text-2xl text-orange-600">{{__('message.legal_h3')}}</h2>
            <p class="mb-5 ml-9">
                {{__('message.legal_p3')}}<i>{{__('message.legal_i3')}}</i>.
            </p>
            <h2 class="my-8 text-2xl text-orange-600">{{__('message.legal_h4')}}</h2>
            <p class="mb-5 ml-9">
                {{__('message.legal_p4')}}<i>Thibaut Meslin</i>.
            </p>
            <h2 class="my-8 text-2xl text-orange-600">{{__('message.legal_h5')}}</h2>
            <p class="mb-16 ml-9">
                {{__('message.legal_p5')}} : +33652100118<br>
                {{__('message.legal_p6')}} : thibaut.meslin@hotmail.com<br>
                {{__('message.legal_p7')}} : 10 rue du gué 27120 MENILLES<br>
            </p>
            <i class="mb-5">{{__('message.legal_i4')}}</i>
        </div>
    </section>
@endsection