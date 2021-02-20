---
title: RSVP for DevBookClub Meet & Greet
---
@extends('_layouts.master')

@section('body')
<div class="container mx-auto px-3">
    <h1 class="mt-8 pb-3 text-4xl border-b-2 border-gray-300">RSVP - Meet & Greet for Refactoring Discussion Group</h1>

    <p class="max-w-3xl mt-10 text-xl">
        The discussion groups for Refactoring, Improving the Design of Existing Code by Martin Fowler is going to begin soon. Because of the nature of how these discussions work -- virtual and streaming/archived -- it is imperative we are able to meet with limited technical issues. To participate you will need to ensure you are able to connect via Zoom to the group and have your audio under control. To facilitate figuring this all out, we will have a few "Meet & Greet" Zoom meetings available. If yo want to participate and would like an opportunity to meet other participants, RSVP to one or more of the meetings below.
    </p>

    <p class="max-w-3xl mt-10 text-xl">
        Don't forget to sign up for the mailing list (and <a class="underline" href="https://twitter.com/_devbookclub" aria-label="">follow @_devbookclub on Twitter</a>) to get notifications for upcoming discussion groups.
    </p>

    <div x-data="meetandgreets()" class="mt-10">
        <form x-ref="meetandgreetsForm" name="meetandgreets-rsvps" data-netlify="true" method="post" action="/thanks">
            <label>Name: *</label>
            <input x-model="name" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="text" name="name" required>

            <label class="block mt-8">Email: *</label>
            <input x-model="email" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="email" name="email" required>

            <label class="block mt-8">Select at least 1 date/time:</label>
            <div class="space-y-4">
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
                <input x-model="selectedEvents" type="hidden" name="events">
            </div>

            <div class="mt-8">
                <div x-cloak x-show="resultText != ''" x-text="resultText" :class="{'text-red-500': error}" class="mt-8"></div>
                <button @click.prevent="submit()" class="block mr-auto mt-8 px-10 py-1 rounded-2xl bg-gray-500 text-lg text-white">
                    <span>Sign Me Up</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
