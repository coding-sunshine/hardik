<div id="skills" class="skills md:px-5 px-16 py-20 md:py-12" {{ $attributes }}>
    <div>
        <h1 class="relative md:text-2xl bg-no-repeat font-bold font-serif lg:bg-contain lg:pl-5 lg:text-4xl pl-8 py-3 text-6xl">
            <x-icons.diamond class="absolute left-0 bottom-0 -z-10" fill="#FF9780"/>
            Skills
        </h1>
        <div class="md:px-4">
            @foreach ($categories as $category => $skills)
                <div class="lg:pt-10 pt-16">
                    <h2 class="font-bold font-serif lg:text-lg text-2xl">{{ $category }}</h2>
                    <div class="pt-5 flex flex-wrap lg:text-sm">
                        @foreach ($skills as $skill)
                            <div class="flex items-center mr-6">
                                <span class="mr-2">{{ $skill->skill }}</span>
                                @if($skill->strenght)
                                    <x-icons.star class="h-4 lg:h-3 lg:w-3 w-4" />
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <p class="lg:pt-10 pt-16 text-gray-500">
                The ones with
                <x-icons.star class="w-3 inline" /> I am strong with
            </p>
        </div>
    </div>
</div>
