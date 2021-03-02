@extends('_layouts.master')

@section('body')
<div class="md-content max-w-6xl mx-auto px-3">

    <div class="w-full mt-10">
        <img src="/assets/images/books/banners/{{ $page->banner_image }}" width="1600" height="900">
    </div>

    <h1 class="mt-10 pb-3 text-3xl md:text-4xl border-b-2 border-gray-300">{{ $page->title }}</h1>

    <div class="max-w-3xl mt-10">
        @yield('blah')


        @yield('schedule')
    </div>
</div>
@endsection
