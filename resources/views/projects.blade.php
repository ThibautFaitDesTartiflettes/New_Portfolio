@extends('layouts.app')

@section('content')
    <section class="text-white bg-stone-900 body-font min-h-[90vh]">
        <div class="flex w-full justify-center">
            <ul class="nav nav-tabs flex flex-row content-center flex-wrap list-none border-b-0 mb-5 mt-8" id="tabs-tab" role="tablist">
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
                <li class="nav-item" role="presentation">
                    <a href="#others" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-orange-600 transition duration-300 ease-in-out focus:border-orange-600" 
                        id="tabs-others-tab" data-bs-toggle="pill" data-bs-target="#tabs-others" role="tab"
                        aria-controls="tabs-others" aria-selected="false">Others</a>
                </li>
            </ul>
        </div>
        <div class="tab-content pb-16 mx-16" id="tabs-tabContent">
            <div class="animate__animated animate__fadeIn tab-panel" id="tabs-web" role="tabpanel" aria-labelledby="tabs-web-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Jun</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2022</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">New portfolio</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Developed a newer version of my portfolio website.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/laravel.svg" alt="Laravel">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/composer.svg" alt="Composer">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/nodejs.svg" alt="NodeJS">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/tailwind.svg" alt="TailwindCSS">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Oct</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">GSBLot</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Manage drug distribution between productions, shop and visitors.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/html.svg" alt="HTML">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/css.svg" alt="CSS">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/php.svg" alt="Php">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/mysql.svg" alt="MySQL">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/ovh.svg" alt="OVH">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Jun</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Repas BTS</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Order, consult and cancel your food orders.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/html.svg" alt="HTML">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/css.svg" alt="CSS">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/php.svg" alt="Php">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/mysql.svg" alt="MySQL">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/ovh.svg" alt="OVH">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Apr</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Impress</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Consult the printing traces. Include a permissions management for the staff.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/html.svg" alt="HTML">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/css.svg" alt="CSS">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/php.svg" alt="Php">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/mysql.svg" alt="MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Jan</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Wordpress</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Creating a showcase site for the MLL (Maison des Ligues de Lorraine).
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mt-1">
                                        <img src="img/svg/programming_lang/wordpress.svg" alt="Wordpress">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeIn tab-panel hidden" id="tabs-software" role="tabpanel" aria-labelledby="tabs-software-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Nov</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2022</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Software">Software</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">EasySave</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Save your data locally and encrypt them during the transfer. Remote interface enable to follow the transfers. JSON/XML log system.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/c_sharp.svg" alt="C#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Dec</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Software">Software</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">gesAMM</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Allow management of the medicines from the development to the market.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/c_sharp.svg" alt="C#">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/sqlserver.svg" alt="SqlServer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Jun</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Software">Software</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">ProSanté</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Consult / Update all data and statistics of the GSB company.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/c_sharp.svg" alt="C#">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/mysql.svg" alt="MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Dec</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Software">Software</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Digicode</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Digicode with excel log.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/c_sharp.svg" alt="C#">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/excel.svg" alt="Excel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeIn tab-panel hidden" id="tabs-networking" role="tabpanel" aria-labelledby="tabs-networking-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Oct</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2022</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Networking">Networking</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Admin-sys</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Create the all infrastructure for a company (DMZ, LAN, Firewall, AD/DS, DNS, ...).
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/vmware.svg" alt="VmWare">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Dec</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2020</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Networking">Networking</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Normandie presse</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Install and use a dependency management tool in a company context.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-14 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/png/glpi.png" alt="GLPI">
                                    </div>
                                    <div class="w-14 h-8 bg-stone-700 rounded-lg p-1 pt-[6px] mr-1 mt-1">
                                        <img src="img/png/ocs_inventory.png" alt="OCS_Inventory">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Oct</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2019</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Development">Web</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Equipement</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Research and organize the distribution and management of PC's at the best cost.
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mt-1">
                                        <img src="img/png/packet_tracer.png" alt="PacketTracer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeIn tab-panel hidden" id="tabs-networking" role="tabpanel" aria-labelledby="tabs-others-tab">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
                    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                        <div class="flex p-5 rounded border-2 border-stone-400">
                            <div class="pt-1 mr-6 text-center">
                                <div class="px-2 pb-1 mb-1 border-b border-orange-600">
                                    <p class="text-sm text-blue-gray-700">Sep</p>
                                </div>
                                <div class="px-2">
                                    <p class="text-lg font-bold">2019</p>
                                </div>
                            </div>
                            <div>
                                <div class="mb-2">
                                    <p class="text-xs font-semibold text-orange-600 tracking-wide uppercase transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category" title="Networking">Networking</p>
                                </div>
                                <div class="mb-2">
                                    <p aria-label="Article" class="inline-block text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-deep-purple-accent-400">Gsb vistat</p>
                                </div>
                                <p class="mb-1 text-white">
                                    Making statistics from a database and export to a CSV. 
                                </p>
                                <div class="flex flex-wrap">
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/mysql.svg" alt="MySQL">
                                    </div>
                                    <div class="w-8 h-8 bg-stone-700 rounded-lg p-1 mr-1 mt-1">
                                        <img src="img/svg/programming_lang/excel.svg" alt="Excel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/tabs.js"></script>
@endsection