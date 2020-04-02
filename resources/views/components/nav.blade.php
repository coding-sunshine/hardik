<nav class="flex items-center justify-between md:px-8 px-16 py-5">
    <figure>
        <img src="/images/logo.png" style="background-image: url('/images/logo-bg.png')" class="bg-contain bg-no-repeat bg-right-bottom lg:w-16 md:w-1/2" />
    </figure>
    <ul class="flex font-serif lg:text-lg md:text-sm text-2xl">
        @foreach ($navLinks as $nav)
            <li class="font-bold cursor-pointer{{ ($loop->last) ? '' : ' mr-5 md:mr-3' }}" onclick="smoothScroll(document.getElementById('{{ $nav->abbr }}'))">
                {{ $nav->name }}
            </li>
        @endforeach
    </ul>
</nav>
