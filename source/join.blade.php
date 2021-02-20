---
title: Join the discussion
---
@extends('_layouts.master')

@section('body')
<div class="container mx-auto px-3">
    <h1 class="mt-8 text-4xl border-b-2 border-gray-300">Join the Discussion</h1>

    <div class="max-w-3xl mx-auto">
        <div class="mt-8">
            <p class="">
                The Dev Book Club is currently planning to discuss the book, Refactoring: Improving the Design of Existing Code by Martin Fowler. To join the conversation, fill out the form below and an organizer will contact you about the next scheduled discussion time.
            </p>

            <div class="bg-gray-600 mt-8 mx-auto p-8 lg:rounded-2xl text-white">
                <form data-netlify="true" name="join-refactoring" action="/thanks" method="post">
                    <label class="block"><strong>Name *</strong>
                        <input class="block w-full border-b-2 border-white bg-gray-600 mt-2 p-2" type="text" name="name" required>
                    </label>

                    <label class="block mt-4"><strong>Email *</strong>
                        <input class="block w-full border-b-2 border-white bg-gray-600 mt-2 p-2" type="email" name="email" required>
                    </label>

                    <label class="block mt-4"><strong>Twitter Handle</strong>
                        <input class="block w-full border-b-2 border-white bg-gray-600 mt-2 p-2" type="text" name="twitter">
                    </label>

                    <button class="block w-1/2 mx-auto mt-8 border-2 border-white rounded-md py-3 px-4 font-bold uppercase" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
