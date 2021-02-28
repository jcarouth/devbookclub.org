<div class="my-20">
    <div class="pb-2 text-2xl border-b-2 border-gray-100">Apply for the scholarship</div>

    <form name="scholarship" method="post" data-netlify="true" class="block mt-10 space-y-6">
        <div>
            <label for="scholarship-app-name" class="block">Name *</label>
            <input id="scholarship-app-name" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="text" name="name" required="required">
        </div>

        <div>
            <label for="scholarship-app-email" class="block">Email *</label>
            <input id="scholarship-app-email" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="email" name="email" required="required">
        </div>

        <div>
            <label for="scholarship-app-twitter" class="block">Twitter</label>
            <input id="scholarship-app-twitter" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="text" name="twitter">
        </div>

        <div>
            <label for="scholarship-app-acquisition" class="block">How did you hear about the Dev Book Club?</label>
            <textarea id="scholarship-app-acquisition" class="block w-full mt-1 px-2 py-1 border border-gray-900" name="acquisition"></textarea>
        </div>

        <div>
            <label for="scholarship-app-justification" class="block">Why are you interested in reading this book?</label>
            <textarea id="scholarship-app-justification" class="block w-full mt-1 px-2 py-1 border border-gray-900" name="justification"></textarea>
        </div>

        <div>
            <button class="block mr-auto mt-8 px-10 py-1 rounded-md bg-gray-500 text-lg text-white uppercase" type="submit">Apply</button>
        </div>
    </form>
</div>
