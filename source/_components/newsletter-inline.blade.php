<div x-data="newsletter()" x-init="init()" class="mt-8 py-4 text-center text-white">
    <form action="/" method="post" class="max-w-3xl mx-auto px-3">
        <div class="text-xl">Subscribe to our Newsletter</div>
        <div class="mt-3">Get notified of upcoming discussions, recaps, and more by email.</div>
        <div x-cloak x-show="result" x-text="result" :class="{'text-red-500': !isSuccess}" class="mt-3"></div>
        <div class="flex items-end mt-3 mx-auto space-x-2 w-3/4">
            <input x-model="formData.email" name="email" type="email" placeholder="Your Email" class="w-4/6 py-1 px-2 text-gray-800">
            <button @click.prevent="submit()" :disabled="isLoading" class="w-2/6 py-1 bg-gray-500 rounded-md text-white">
                <span x-cloak x-show="isLoading">Loading...</span>
                <span x-show="!isLoading">Subscribe</span>
            </button>
        </div>
        <div class="mt-3 text-xs">We will never sell your information or send unsolicited messages. Unsubscribe at any time.</div>
    </form>
</div>
