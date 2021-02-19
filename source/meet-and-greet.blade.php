---
title: Meet & Greet
---
@extends('_layouts.master')

@section('body')
<div class="container mx-auto px-3">
    <h1 class="mt-8 text-4xl border-b-2 border-gray-300">Meet & Greet</h1>

    <p class="max-w-3xl mt-8 mx-auto text-xl">
        Before we kick off the discussions let's get to know each other. Pick one (or more) of the scheduled meet and greets to attend. These will be virtual (of course) via Zoom.
    </p>
</div>


<div x-data="meetandgreets()" class="bg-gray-600 max-w-3xl mt-8 mx-auto p-8 lg:rounded-2xl text-white">
    <div class="text-3xl border-b-2 border-gray-300">RSVP</div>
    <form x-ref="meetandgreetsForm" name="meetandgreets-rsvps" data-netlify="true" method="post" action="/thanks">
        <div class="max-w-3xl mx-auto space-y-3">
            <template x-for="event in events">
            <div @click="toggleEvent(event.id)" class="flex items-center">
                <div class="w-8 h-8 mr-3 border-2">
                    <svg x-show="eventSelected(event.id)" class="w-6 h-6 mx-auto fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-check"></use></svg>
                </div>
                <div class="">
                    <div class="font-bold text-2xl" x-text="event.title"></div>
                    <span class="block text-sm" x-text="event.time"></span>
                </div>
            </div>
            </template>
        </div>

        <div class="max-w-3xl mt-8 mx-auto">
            <label>Name:</label>
            <input x-model="name" class="block w-full lg:w-1/2 mt-1 px-2 py-1 text-gray-800" type="text" name="name">
            <label class="block mt-3">Email:</label>
            <input x-model="email" class="block w-full lg:w-1/2 mt-1 px-2 py-1 text-gray-800" type="email" name="email">
            <input x-model="selectedEvents" type="hidden" name="events">
            <input type="hidden" name="form-name" value="meetandgreets-rsvps" />
            <div x-cloak x-show="resultText != ''" x-text="resultText" :class="{'text-red-500': error}" class="mt-8"></div>
            <button @click.prevent="submit()" class="block border border-white mr-auto mt-8 px-10 py-1 rounded-2xl">
                <span>Sign Up</span>
            </button>
        </div>
    </form>
</div>

@endsection
