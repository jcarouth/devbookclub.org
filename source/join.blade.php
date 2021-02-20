---
title: Join the discussion
---
@extends('_layouts.master')

@section('body')
<div class="container mx-auto px-3">
    <h1 class="mt-8 pb-3 text-4xl border-b-2 border-gray-300">Join the Discussion</h1>

    <p class="max-w-3xl mt-8 text-xl">
        The Dev Book Club is currently planning to discuss the book, Refactoring: Improving the Design of Existing Code by Martin Fowler. To join the conversation, fill out the form below and an organizer will contact you about the next scheduled discussion time.
    </p>

    <div class="mt-10">
        <form data-netlify="true" name="join-refactoring" action="/pages/thanks/" method="post">
            <label class="block"><strong>Name *</strong>
                <input class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="text" name="name" required>
            </label>

            <label class="block mt-8"><strong>Email *</strong>
                <input class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="email" name="email" required>
            </label>

            <label class="block mt-8"><strong>Twitter Handle</strong>
                <input class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="text" name="twitter">
            </label>

            <button class="block mr-auto mt-8 px-10 py-1 rounded-2xl bg-gray-500 text-lg text-white uppercase" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
