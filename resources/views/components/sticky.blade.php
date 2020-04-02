<ul class="hidden md:hidden lg:hidden fixed flex flex-col font-serif items-end mr-10 right-0 sidebar top-0 transform translate-y-56">
    @foreach ($navLinks as $nav)
        <li onclick="smoothScroll(document.getElementById('{{ $nav->abbr }}'))" class="side-li {{ $nav->abbr }} hover:font-bold bg-no-repeat bg-center py-1 cursor-pointer md:text-sm md:mb-1{{ ($loop->last) ? '' : ' mb-4' }}" data-hoverimage="/images/{{ $nav->color }}-oval.png">
            {{ $nav->name }}
        </li>
    @endforeach
</ul>
