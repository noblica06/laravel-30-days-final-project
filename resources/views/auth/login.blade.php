<x-layout>
    <form method="POST" action="/login" class="max-w-xl mx-auto">
        @csrf
        <div class="space-y-15">
            <div class=" pb-12">
                <x-form-field>
                    <x-form-label for="salary">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="email" name="email" :value="old('email')" id="email" required/>
                        <x-form-error name="email"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password" id="password" required/>
                        <x-form-error name="password"/>
                    </div>
                </x-form-field>


            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <a href="/register" class="text-sm font-semibold leading-6 text-white/50">Register?</a>
            </div>
            <div >
                <a href="/" class="text-sm font-semibold leading-6 text-white">Cancel</a>
                <x-form-button>Log In</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
