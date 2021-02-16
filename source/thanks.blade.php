---
title: Thank you!
---
@extends('_layouts.master')

@section('body')
<div class="container mx-auto px-3">
    <h1 class="mt-8 text-4xl border-b-2 border-gray-300">Thanks!</h1>

    <div class="flex flex-col lg:flex-row lg:space-x-4">
        <div class="w-full lg:w-1/2">
            <img class="mt-8 mx-auto w-80 lg:w-full" src="/assets/images/never-stop-learning-hero.png" alt="Motivational quote Never stop learning" width="1280" height="720" loading="lazy">
        </div>
        <div class="mt-8 w-full lg:w-1/2">
            <p class="font-bold">
                Thank you for expressing interest in joining the discussion! We hope to talk with you soon!
            </p>
        </div>
    </div>
</div>
@endsection
