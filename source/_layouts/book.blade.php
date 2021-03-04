@extends('_layouts.master')

@section('body')
<div class="max-w-6xl mx-auto px-3">

    <div class="w-full mt-10">
        <img src="/assets/images/books/banners/{{ $page->banner_image }}" width="1600" height="900">
    </div>

    <h1 class="mt-10 pb-3 text-3xl md:text-4xl border-b-2 border-gray-300">{{ $page->title }}</h1>

    <div class="max-w-3xl mt-10">
        @yield('intro')

        <h3 class="mt-12 pb-2 border-b-2 border-gray-300 text-2xl">Schedule</h3>

        @yield('schedule')
    </div>
</div>
@endsection
