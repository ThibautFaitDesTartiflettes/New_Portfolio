<header class="text-white bg-stone-800 body-font">
    <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center">
        <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <span class="ml-3 text-xl">Thibaut Meslin</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center cursor-pointer space-x-4">
            <a class="hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('about') }}">{{ __('message.nav_a1') }}</a>
            <a class="hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('projects') }}">{{ __('message.nav_a2') }}</a>
            <a class="hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('internships-jobs') }}">{{ __('message.nav_a3') }}</a>
            <a class="hover:text-orange-600 hover:underline transition duration-300 ease-in-out" href="{{ route('contact') }}">{{ __('message.nav_a4') }}</a>
            <div class="barH"></div>
            <select id="languages" class="cursor-pointer bg-stone-800 border-b border-orange-600 p-1 Langchange">
                <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>FR</option>
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>EN</option>
            </select>
        </nav>
    </div>
</header>

<script type="text/javascript">  
    var url = "{{ route('LangChange') }}";
    $('.Langchange').change(function(){
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>