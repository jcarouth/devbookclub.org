@extends('_layouts.master')

@section('body')
<h1 class="hidden">Dev Book Club</h1>

<div class="max-w-7xl mx-auto">
    <div class="mt-10 lg:flex lg:flex-row lg:shadow-m">
        <div class="lg:w-1/2 mt-10 lg:mt-0">
            <img class="w-full h-full object-cover" src="/assets/images/never-stop-learning-hero.png" alt="Motivational quote Never stop learning" width="1280" height="720" loading="lazy">
        </div>
        <div class="lg:w-1/2 mt-10 lg:mt-0 px-6 py-12 bg-gray-600 text-white">
            <h2 class="text-3xl lg:text-4xl uppercase tracking-wider">Meet and Greets</h2>

            <p class="mt-4 mx-auto text-left">
                Before we kick off the next discussion of Refactoring by Martin Fowler, there will be a series of Meet and Greets
                for the group to settle on schedules and work out the kinks of the technology.
            </p>

            <div class="inline-flex mt-8 mx-auto px-5 py-3 rounded-md bg-white text-gray-900 text-xl font-bold  ">
                <a href="/rsvp/">RSVP to an upcoming Meet & Greet</a>
            </div>
        </div>
    </div>
</div>
@endsection
