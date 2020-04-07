<nav class="flex items-center justify-between md:px-8 px-16 py-5" {{ $attributes }}>
    <figure class="p-2 logo-container">
        <x-logo class="bg-auto bg-no-repeat bg-right-bottom lg:w-16 md:w-1/2" fill="#FF9780"/>
    </figure>
    <ul class="flex font-serif lg:text-lg md:text-sm text-2xl">
        @foreach ($navLinks as $nav)
            <li class="font-bold cursor-pointer{{ ($loop->last) ? '' : ' mr-5 md:mr-3' }}" >
                <a href="#{{ $nav->abbr }}">
                    {{ $nav->name }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
