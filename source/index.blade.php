@extends('_layouts.master')

@section('body')
<h1 class="hidden">Dev Book Club</h1>

<div class="max-w-7xl mx-auto">
    <img class="mx-auto w-80 lg:w-full" src="/assets/images/never-stop-learning-hero.png" alt="Motivational quote Never stop learning" width="1280" height="720" loading="lazy">
</div>

<div class="max-w-7xl mx-auto mt-10 lg:mt-24 lg:flex lg:flex-row lg:space-x-4">
    <div class="lg:w-1/2 px-3 py-6 text-center">
        <h2 class="text-3xl uppercase font-bold">Rebooting...</h2>

        <p class="mt-8 mx-auto max-w-3xl">
            We are a group of developers around the world gaining knowledge and sharing experiences by reading a book.
        </p>

        <div class="w-5/6 mt-8 mx-auto border-2 border-gray-900 font-bold px-3 py-1 rounded-2xl text-xl">
            <a href="/join/">Join the Conversation</a>
        </div>
    </div>
    <div class="lg:w-1/2 mt-10 lg:mt-0 px-3 py-6 rounded-2xl bg-gray-600 text-white text-center">
        <h2 class="text-3xl uppercase">Meet and Greets</h2>

        <p class="mt-8 mx-auto text-left">
            Before we kick off the next discussion of Refactoring by Martin Fowler, there will be a series of Meet and Greets
            for the group to settle on schedules and work out the kinks of the technology.
        </p>

        <div class="w-5/6 mt-8 mx-auto border-2 border-white font-bold px-3 py-1 rounded-2xl text-xl">
            <a href="/rsvp/">RSVP to an upcoming Meet & Greet</a>
        </div>
    </div>
</div>
@endsection
