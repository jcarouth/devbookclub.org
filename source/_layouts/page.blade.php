@extends('_layouts.master')

@section('body')
    <div class="md-content container mx-auto px-3">
        <h1 class="mt-8 pb-3 text-4xl border-b-2 border-gray-300">{{ $page->title }}</h1>

        <div class="max-w-3xl mt-10">
            @yield('page-content')
        </div>
    </div>
@endsection
