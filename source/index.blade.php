@extends('_layouts.master')

@section('body')
<div class="container mx-auto py-8 px-3 text-center">
    <h1 class="hidden">Dev Book Club</h1>

    <div class="max-w-7xl mx-auto">
        <img class="mx-auto w-80 lg:w-full" src="/assets/images/never-stop-learning-hero.png" alt="Motivational quote Never stop learning" width="1280" height="720" loading="lazy">
    </div>

    <h2 class="mt-10 font-mono text-3xl uppercase font-bold">Rebooting...</h2>

    <p class="mt-8 mx-auto max-w-3xl">
        We are a group of developers around the world gaining knowledge and sharing experiences by reading a book.
    </p>

    <div class="w-3/4 lg:w-1/3 mt-8 mx-auto border-2 border-gray-900 font-bold px-3 py-1 rounded-2xl text-xl">
        <a href="/join">Join the Conversation</a>
    </div>
</div>
@endsection
