<div class="my-20">
    <form name="contact" method="post" data-netlify="true" class="block mt-10 space-y-6">
        <div>
            <label for="contact-name" class="block">Name *</label>
            <input id="contact-name" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="text" name="name" required="required">
        </div>

        <div>
            <label for="contact-email" class="block">Email *</label>
            <input id="contact-email" class="block w-full lg:w-1/2 mt-1 px-2 py-1 border border-gray-900" type="email" name="email" required="required">
        </div>

        <div>
            <label for="contact-message" class="block">Message</label>
            <textarea id="contact-message" class="block w-full mt-1 px-2 py-1 border border-gray-900" name="message"></textarea>
        </div>

        <div>
            <button class="block mr-auto mt-8 px-10 py-1 rounded-md bg-gray-500 text-lg text-white uppercase" type="submit">Send Message</button>
        </div>
    </form>
</div>
