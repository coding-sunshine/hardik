@extends('layouts.app')
@section('content')
    <x-nav @mouseenter="sticky = false" />
    <x-intro @mouseenter="sticky = false" />
    <x-work @mouseenter="sticky = true" />
    <x-about @mouseenter="sticky = true" />
    <x-skills @mouseenter="sticky = true" />
    <x-contact @mouseenter="sticky = true" />
    <img data-hoverimage="/images/blue-arrow.png" class="md:hidden arrow lg:hidden bg-contain bg-no-repeat bg-right-bottom block bottom-0 cursor-pointer down fixed lg:w-12 mb-4 md:mb-2 md:mr-1 mr-4 right-0" src="/images/black-arrow-down.png" />

    <a href="#home">
        <img data-hoverimage="/images/blue-arrow.png" class="md:hidden arrow bg-contain lg:hidden bg-no-repeat bg-right-bottom hidden bottom-0 cursor-pointer up fixed lg:w-12 mb-4 md:mb-2 md:mr-1 mr-4 right-0" src="/images/black-arrow-up.png" />
    </a>
    <x-sticky/>
@endsection
