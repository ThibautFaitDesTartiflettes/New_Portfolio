@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font">
        <ul class="nav nav-tabs flex flex-col content-center md:flex-row flex-wrap list-none border-b-0 pl-0 -mb-8 pt-8" id="tabs-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#web" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600 border-orange-600" 
                    id="tabs-web-tab" data-bs-toggle="pill" data-bs-target="#tabs-web" role="tab" 
                    aria-controls="tabs-web" aria-selected="true">Web</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#software" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600" 
                    id="tabs-software-tab" data-bs-toggle="pill" data-bs-target="#tabs-software" role="tab"
                    aria-controls="tabs-software" aria-selected="false">Software</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#networking" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600" 
                    id="tabs-networking-tab" data-bs-toggle="pill" data-bs-target="#tabs-networking" role="tab"
                    aria-controls="tabs-networking" aria-selected="false">Networking</a>
            </li>
        </ul>
        <div class="tab-content py-16" id="tabs-tabContent">
            <div class="tab-panel animate-fade" id="tabs-web" role="tabpanel" aria-labelledby="tabs-web-tab">
                Tab 1 content
            </div>
            <div class="tab-panel animate-fade hidden" id="tabs-software" role="tabpanel" aria-labelledby="tabs-software-tab">
                Tab 2 content
            </div>
            <div class="tab-panel animate-fade hidden" id="tabs-networking" role="tabpanel" aria-labelledby="tabs-networking-tab">
                Tab 3 content
            </div>
        </div>
    </section>

    <script src="js/tabs.js"></script>
@endsection