@extends('_layouts.master')

@section('body')
    <div class="px-3 py-8 max-w-md mx-auto">

        <p>
            This is an interest check form. If you are interested, fill it out and submit it.
        </p>
        <form class="block mt-8 grid grid-cols-1 gap-6" name="interest-checks/refactoring-2021" method="post" data-netlify="true">
            <label class="block" for="name">Name:
            <input class="block mt-1 w-full" type="text" name="name">
            </label>

            <label class="block" for="email">Email Address:
            <input class="block mt-1 w-full" type="email" name="email">
            </label>

            <label class="block" for="dayofweek">Preferred day of week:
            <select class="block mt-1 w-full" name="dayofweek">
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
            </label>

            <label class="block" for="timezone">Timezone:
            <input class="block mt-1 w-full" type="text" name="timezone">
            </label>

            <button class="bg-devbookclub-blue-dark block mx-auto py-1 text-devbookclub-blue w-1/2" type="submit">Save</button>
        </form>
    </div>
@endsection
