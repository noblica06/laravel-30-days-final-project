<x-layout>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-4xl font-semibold leading-7 text-white">Create a new job</h2>
                <p class="mt-1 text-sm leading-6 text-white/50">We just need a handful details.</p>


                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="title" id="title" placeholder="Shift Leader" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>


                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="salary" id="salary" placeholder="$50,000" required/>
                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="title">Location</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="location" id="location" placeholder="Remote/On-Site" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="title">Schedule</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="schedule" id="schedule" placeholder="Full Time/Part Time" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="title">URL:</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="url" id="url" placeholder="http://www.example.com" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label>Tags</label><br>
                        @foreach($tags as $tag)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" id="tag{{ $tag->id }}" value="{{ $tag->id }}">
                                <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </x-form-field>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" type="button" class="text-sm font-semibold leading-6 text-white/75">Cancel</a>
                <x-form-button>Save</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
