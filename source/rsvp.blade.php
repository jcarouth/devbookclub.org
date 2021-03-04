---
title: RSVP to a Refactoring Discussion
description: RSVP for an upcoming DevBookClub meeting or discussion.
---
@extends('_layouts.master')

@section('body')
<div class="md-content max-w-6xl mx-auto px-3">
    <h1 class="mt-8 pb-3 text-4xl border-b-2 border-gray-300">RSVP - Refactoring Discussion Group</h1>

    <p class="max-w-3xl mt-10 text-xl">
        The discussion group for Refactoring: Improving the Design of Existing Code by Martin Fowler will begin soon. These discussions will take place via Zoom and be recorded to post on our YouTube channel. RSVP below to get invited to the Zoom call and participate!
    </p>

    <p class="max-w-3xl mt-10 text-xl">
        <a href="https://join.slack.com/t/thedevbookclub/shared_invite/zt-myoznyjb-q3LqO5XAO1IKtx28zbk9ew" rel="noopener" aria-label="thedevbookclub.slack.com">Join us on Slack</a> and <a class="" href="https://twitter.com/_devbookclub" rel="noopener" target="_blank" aria-label="Follow @_devbookclub on Twitter">follow us on Twitter (@_devbookclub)</a> to ensure you get notified about upcoming discussions.
    </p>

    <h2 class="mt-12 pb-2 text-2xl border-b-2 border-gray-100">Submit Your RSVP</h2>

    <div class="mt-10">
        <form x-data="rsvp()" name="rsvps-refactoring" data-netlify="true" method="post" action="/pages/thanks/">
            <label>Name: *</label>
            <input x-model="name" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="text" name="name" required>

            <label class="block mt-8">Email: *</label>
            <input x-model="email" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="email" name="email" required>

            <label class="block mt-8">Select at least 1 date/time:</label>
            <div class="space-y-6">
                <template x-for="event in events">
                    <div @click="toggleEvent(event.id)" class="flex items-center">
                        <div class="w-8 h-8 mr-3 flex-shrink-0 border-2">
                            <svg x-show="eventSelected(event.id)" class="w-6 h-6 mx-auto fill-current"><use xlink:href="/assets/build/icons/spritemap.svg#sprite-check"></use></svg>
                        </div>
                        <div class="">
                            <div class="font-semibold text-lg" x-text="event.title"></div>
                            <span class="block" x-text="event.time"></span>
                        </div>
                    </div>
                </template>
                <input x-model="selectedEvents" type="hidden" name="events">
            </div>

            <div class="mt-8">
                <div x-cloak x-show="resultText != ''" x-text="resultText" :class="{'text-red-500': error}" class="mt-8"></div>
                <button @click.prevent="submit()" class="block mr-auto mt-8 px-10 py-1 rounded-md bg-gray-500 text-lg text-white">
                    <span>Sign Me Up</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
