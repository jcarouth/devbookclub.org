@extends('_layouts.master')

@section('body')
<h1 class="hidden">Dev Book Club</h1>

<div>
    <div class="relative">
        <div class="">
            <div class="relative shadow-xl sm:overflow-hidden">
                <div class="absolute inset-0">
                    <img class="h-full w-full object-cover" src="/assets/images/bookshelf-lg.jpg" alt="Technical books on a bookshelf">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-800 to-gray-400" style="mix-blend-mode: multiply;"></div>
                </div>
                <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                    <div class="max-w-3xl sm:w-3/4 lg:w-7/12 mx-auto text-white">
                        <div class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            Refactoring by Martin Fowler
                        </div>
                        <p class="mt-6 max-w-lg mx-auto text-xl sm:max-w-3xl">
                            The Dev Book Club is currently reading Refactoring: Improving the Design of Existing Code by Martin Fowler (Second Edition.) Join the conversation by submitting your RSVP now.
                        </p>
                        <div class="mt-10">
                            <a href="/rsvp/" class="inline-block px-3 py-3 sm:px-8 text-xl font-medium text-center rounded-md shadow-sm bg-white text-gray-900">
                                Reserve Your Spot
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-3">
    <div class="max-w-3xl mx-auto">
        <h2 class="mt-12 pb-2 text-2xl font-semibold border-b-2 border-gray-300">Books We Discuss</h2>
        <div class="mt-8 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
            <div class="flex flex-row">
                <img class="w-24 self-start" src="/assets/images/books/covers/refactoring-second-cover-sm.jpg">
                <div class="w-full px-3">
                    <div class="text-xl font-semibold">Refactoring (2nd Edition)</div>
                    <span class="font-serif">by Martin Fowler</span>
                    <div class="w-2/3 md:w-1/4 lg:w-2/3 mt-8 py-2 rounded-md shadow-md text-center bg-gradient-to-b from-blue-800 to-blue-600 text-white">
                        <a href="/rsvp/">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row">
                <img class="w-24 self-start" src="/assets/images/books/covers/clean-code-cover-sm.jpg">
                <div class="w-full px-3">
                    <div class="text-xl font-semibold">Clean Code</div>
                    <span class="font-serif">by Robert Martin</span>
                    <div class="w-2/3 md:w-1/4 lg:w-2/3 mt-8 py-2 rounded-md shadow-md text-center bg-gradient-to-b from-blue-800 to-blue-600 text-white">
                        <a href="https://www.youtube.com/playlist?list=PLH1fn6y2samt0xfBGC26-1M3pzPImN3p2">Watch on YouTube</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row">
                <img class="w-24 self-start" src="/assets/images/books/covers/iddd-cover-sm.jpg">
                <div class="w-full px-3">
                    <div class="text-xl font-semibold">Implementing Domain Driven Design</div>
                    <span class="font-serif">by Vaughn Vernon</span>
                    <div class="w-2/3 md:w-1/4 lg:w-2/3 mt-8 py-2 rounded-md shadow-md text-center bg-gradient-to-b from-blue-800 to-blue-600 text-white">
                        <a href="https://www.youtube.com/playlist?list=PLH1fn6y2samuYrgRf01Ne78_lXCW43hgX">
                            Watch on YouTube
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
