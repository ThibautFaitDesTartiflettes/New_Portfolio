@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font min-h-[90vh]">
        <div class="flex w-full justify-center">
            <ul class="nav nav-tabs flex flex-row content-center flex-wrap list-none border-b-0 mb-5 mt-8" id="tabs-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#web" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600 border-orange-600" 
                        id="tabs-web-tab" data-bs-toggle="pill" data-bs-target="#tabs-web" role="tab" 
                        aria-controls="tabs-web" aria-selected="true">{{__('message.project_a1')}}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#software" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600" 
                        id="tabs-software-tab" data-bs-toggle="pill" data-bs-target="#tabs-software" role="tab"
                        aria-controls="tabs-software" aria-selected="false">{{__('message.project_a2')}}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#networking" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600" 
                        id="tabs-networking-tab" data-bs-toggle="pill" data-bs-target="#tabs-networking" role="tab"
                        aria-controls="tabs-networking" aria-selected="false">{{__('message.project_a3')}}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#others" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600" 
                        id="tabs-others-tab" data-bs-toggle="pill" data-bs-target="#tabs-others" role="tab"
                        aria-controls="tabs-others" aria-selected="false">{{__('message.project_a4')}}</a>
                </li>
            </ul>
        </div>
        <div class="tab-content pb-16 md:mx-16" id="tabs-tabContent">
            <div class="animate__animated animate__fadeIn tab-panel" id="tabs-web" role="tabpanel" aria-labelledby="tabs-web-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        @foreach ($data['web'] as $project)
                            @if (Session::has('locale') && Session::get('locale') == 'fr')
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ (strpos($project['fr']['date'], 'Août') === 0) ? 'Aoû' : substr($project['fr']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['fr']['date'], strlen($project['fr']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['fr']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['fr']['description'] }}</p>
                                        @if (isset($project['fr']['link']))
                                        <a target="_blank" href="{{ $project['fr']['link'] }}" class="text-orange-600 underline">{{ $project['fr']['link'] }}</a>
                                        @endif
                                        <div class="flex flex-wrap mt-2">
                                            @foreach ($project['fr']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                                    <img src="img/svg/programming_lang/{{ strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ substr($project['en']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['en']['date'], strlen($project['en']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['en']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['en']['description'] }}</p>
                                        @if (isset($project['en']['link']))
                                        <a target="_blank" href="{{ $project['en']['link'] }}" class="text-orange-600 underline">{{ $project['en']['link'] }}</a>
                                        @endif
                                        <div class="flex flex-wrap mt-2">
                                            @foreach ($project['en']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                                    <img src="img/svg/programming_lang/{{ strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeIn tab-panel hidden" id="tabs-software" role="tabpanel" aria-labelledby="tabs-software-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        @foreach ($data['software'] as $project)
                            @if (Session::has('locale') && Session::get('locale') == 'fr')
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ (strpos($project['fr']['date'], 'Août') === 0) ? 'Aoû' : substr($project['fr']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['fr']['date'], strlen($project['fr']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Logiciel</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['fr']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['fr']['description'] }}</p>
                                        <div class="flex flex-wrap">
                                            @foreach ($project['fr']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                                    <img src="img/svg/programming_lang/{{ ($lang == 'C#') ? 'c_sharp' : strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ substr($project['en']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['en']['date'], strlen($project['en']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Software</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['en']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['en']['description'] }}</p>
                                        <div class="flex flex-wrap">
                                            @foreach ($project['en']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                                    <img src="img/svg/programming_lang/{{ ($lang == 'C#') ? 'c_sharp' : strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeIn tab-panel hidden" id="tabs-networking" role="tabpanel" aria-labelledby="tabs-networking-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        @foreach ($data['networking'] as $project)
                            @if (Session::has('locale') && Session::get('locale') == 'fr')
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ (strpos($project['fr']['date'], 'Août') === 0) ? 'Aoû' : substr($project['fr']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['fr']['date'], strlen($project['fr']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Réseau</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['fr']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['fr']['description'] }}</p>
                                        <div class="flex flex-wrap">
                                            @foreach ($project['fr']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1 flex justify-center items-center">
                                                    <img class="{{ ($lang == 'Apache') ? 'w-1/2' : '' }}" src="img/svg/programming_lang/{{ strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ substr($project['en']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['en']['date'], strlen($project['en']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Networking</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['en']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['en']['description'] }}</p>
                                        <div class="flex flex-wrap">
                                            @foreach ($project['en']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1 flex justify-center items-center">
                                                    <img class="{{ ($lang == 'Apache') ? 'w-1/2' : '' }}" src="img/svg/programming_lang/{{ strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeIn tab-panel hidden" id="tabs-networking" role="tabpanel" aria-labelledby="tabs-others-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        @foreach ($data['others'] as $project)
                            @if (Session::has('locale') && Session::get('locale') == 'fr')
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ (strpos($project['fr']['date'], 'Août') === 0) ? 'Aoû' : substr($project['fr']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['fr']['date'], strlen($project['fr']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Autres</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['fr']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['fr']['description'] }}</p>
                                        <div class="flex flex-wrap">
                                            @foreach ($project['fr']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                                    <img src="img/svg/programming_lang/{{ strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex p-5 rounded border-2 border-stone-400">
                                    <div class="pt-1 mr-6 text-center">
                                        <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                            <p class="text-sm text-blue-gray-700">{{ substr($project['en']['date'], 0 , 3) }}</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="text-lg font-bold">{{ substr($project['en']['date'], strlen($project['en']['date']) - 4, 4) }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Others</p>
                                        </div>
                                        <div class="mb-2">
                                            <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $project['en']['name'] }}</p>
                                        </div>
                                        <p class="mb-1 text-white">{{ $project['en']['description'] }}</p>
                                        <div class="flex flex-wrap">
                                            @foreach ($project['en']['languages'] as $lang)
                                                <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                                    <img src="img/svg/programming_lang/{{ strtolower($lang) }}.svg" alt="{{ $lang }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/tabs.js"></script>
@endsection