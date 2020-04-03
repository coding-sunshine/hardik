<ul class="hidden md:hidden lg:hidden fixed flex flex-col font-serif items-end mr-10 right-0 sidebar top-0 transform translate-y-56">
    @foreach ($navLinks as $nav)
        <li onclick="smoothScroll(document.getElementById('{{ $nav->abbr }}'))" class="relative side-li {{ $nav->abbr }} hover:font-bold bg-no-repeat bg-center py-1 cursor-pointer md:text-sm md:mb-1{{ ($loop->last) ? '' : ' mb-4' }}" data-hoverimage="/images/{{ $nav->color }}-oval.png">
            <x-icons.diamond class="absolute invisible -left-10 bottom-0 -z-10 side-li-hover" width="30px" :fill="$nav->hash"/>
            {{ $nav->name }}
        </li>
    @endforeach
</ul>
