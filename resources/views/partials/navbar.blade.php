<header class="text-white bg-stone-800 body-font">
    <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center">
        <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <span class="ml-3 text-xl">Thibaut Meslin</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center cursor-pointer">
            <a class="mr-5 hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('about') }}">About me</a>
            <a class="mr-5 hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('projects') }}">Projects</a>
            <a class="mr-5 hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('internships-jobs') }}">Internships & Jobs</a>
            <a class="mr-5 hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('contact') }}">Contact me</a>
        </nav>
    </div>
</header>