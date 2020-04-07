@extends('layouts.app')
@section('content')
    <x-nav @mouseover="sticky = false" />
    <x-intro @mouseover="sticky = false; updateButtons('#work','#about');" />
    <x-work @mouseover="sticky = true; updateButtons('#about','#skills');" />
    <x-about @mouseover="sticky = true; updateButtons('#skills','#contact');"/>
    <x-skills @mouseover="sticky = true; updateButtons('#contact','#home');" />
    <x-contact @mouseover="sticky = true; updateButtons('#home','#work','add');" />

    <figure class="md:hidden lg:hidden cursor-pointer p-1 bg-auto bg-no-repeat bg-right-bottom arrow block bottom-0 right-0 fixed lg:w-12 mb-4 md:mb-2 md:mr-1 mr-4">
        <a href="#work" data-next="#about" id="down">
            <x-icons.down id="arrow" class="bg-auto lg:w-16 md:w-1/2"/>
        </a>
    </figure>

    <x-sticky/>

    <script type="text/javascript">
        function updateButtons(href,next,add){
            var down = document.getElementById('down');
            var arrow = document.getElementById('arrow');
            down.href=href;
            down.setAttribute('data-next',next);
            if(add==undefined)
                arrow.classList.remove('flip-verticle');
            else
                arrow.classList.add('flip-verticle');
        }
    </script>
@endsection
