<div id="work" class="Work px-16 md:px-5 py-20 md:py-12">
    <h1 class="relative md:text-2xl bg-no-repeat font-bold font-serif lg:bg-contain lg:pl-5 lg:text-4xl pl-8 py-3 text-6xl">
        <x-icons.diamond class="absolute left-0 bottom-0 -z-10"/>
        Work
    </h1>
    <div class="pt-16 md:pt-10 md:px-4">
        @foreach($works->chunk(2) as $chunk)
            <div class="flex pb-5 xl:flex-col xl:pb-0">
                @foreach($chunk as $item)
                    <div class="md:mr-0 border border-black cursor-pointer group h-84 lg:h-40 lg:w-3/6 mr-5 relative rounded thumb w-72 xl:mb-5 md:w-auto">
                        <div class="absolute bg-cover bg-no-repeat md:bg-cover h-84 left-1/2 lg:bg-contain lg:h-40 lg:w-full p-6 top-1/2 w-72 z-10" data-hoverimage="/images/rectangle.png">
                            <h2 class="font-bold font-serif lg:text-lg text-2xl">
                                {{ $item->company }}
                            </h2>
                            <p class="text-sm">{{ $item->position }} • {{ $item->year }}</p>
                            <div class="child flex items-center justify-between lg:pt-10 pt-16">
                                <span class="font-bold font-thin">Read more</span>
                                <img class="md:w-5" src="/images/right-arrow.png" />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
