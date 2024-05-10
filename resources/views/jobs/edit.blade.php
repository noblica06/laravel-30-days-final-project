<x-layout>
    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-4xl font-semibold leading-7 text-white">Edit Job</h1>
                <p class="mt-1 text-sm leading-6 text-white/50">Update the listing of your job.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block  leading-6 text-white/50">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-xl sm:max-w-md">
                                <input value="{{ $job->title}}" type="text" name="title" id="title"  class="block flex-1 border-white rounded-xl bg-white/5 py-1.5 px-3 text-white placeholder:text-white/25 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
                            </div>
                            @error('title')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{$message}} </p>
                            @enderror
                        </div>
                    </div>


                    <div class="sm:col-span-4">
                        <label for="salary" class="block  leading-6 text-white/50">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-xl sm:max-w-md">
                                <input value="{{ $job->salary}}" type="text" name="salary" id="salary"  class="block flex-1 border-white rounded-xl bg-white/5 py-1.5 px-3 text-white placeholder:text-white/25 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
                            </div>
                            @error('salary')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{$message}} </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="location" class="block  leading-6 text-white/50">Location</label>
                        <div class="mt-2">
                            <div class="flex rounded-xl sm:max-w-md">
                                <input value="{{ $job->location}}" type="text" name="location" id="location"  class="block flex-1 border-white rounded-xl bg-white/5 py-1.5 px-3 text-white placeholder:text-white/25 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
                            </div>
                            @error('location')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{$message}} </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="schedule" class="block  leading-6 text-white/50">Schedule</label>
                        <div class="mt-2">
                            <div class="flex rounded-xl sm:max-w-md">
                                <input value="{{ $job->schedule}}" type="text" name="schedule" id="schedule"  class="block flex-1 border-white rounded-xl bg-white/5 py-1.5 px-3 text-white placeholder:text-white/25 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
                            </div>
                            @error('schedule')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{$message}} </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="url" class="block  leading-6 text-white/50">URL</label>
                        <div class="mt-2">
                            <div class="flex rounded-xl sm:max-w-md">
                                <input value="{{ $job->url}}" type="text" name="url" id="url"  class="block flex-1 border-white rounded-xl bg-white/5 py-1.5 px-3 text-white placeholder:text-white/25 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
                            </div>
                            @error('url')
                            <p class="text-xs text-red-500 font-semibold mt-1"> {{$message}} </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label>Tags</label><br>
                        @foreach($tags as $tag)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" id="tag{{ $tag->id }}" value="{{ $tag->id }}" {{ $job->tags->contains($tag->id) ? 'checked' : '' }}>
                                <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-between gap-x-6">
                    <div class="flex items-center">
                        <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
                    </div>
                    <div class="flex items-center gap-x-6">
                        <a href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-white/50">Cancel</a>
                        <div>
                            <button type="submit" class="rounded-xl px-3 py-2 text-sm font-semibold text-black bg-white">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id}}" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
