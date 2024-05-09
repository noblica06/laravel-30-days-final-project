<x-layout>
    <div class="flex flex-col gap-y-10">
        <div class="flex flex-row justify-between items-center">
            <x-employer-logo width="300"/>
            <div class="flex flex-col gap-y-5 text-center">
                <h1 class="text-white text-4xl">{{$job->title}}</h1>
                <p class="text-white/50 text-2xl">{{$job->employer->name}}</p>
            </div>
        </div>
        <div class="flex flex-row gap-x-6">
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>

        <div>
            <h1 class="text-4xl">Pays: {{$job->salary}}</h1>
        </div>

        <div>
            <h1 class="text-4xl">Schedule: {{$job->schedule}}</h1>
        </div>

        <div>
            <h1 class="text-4xl">Location: {{$job->location}}</h1>
        </div>

        <div>
            <h1 class="text-4xl">URL: <a class="text-blue-500 underline" href="{{$job->url}}"> {{$job->url}}</a></h1>
        </div>

        @can('edit', $job)
            <p class="mt-6">
                <x-button href="/jobs/{{$job->id}}/edit">
                    Edit Job
                </x-button>
            </p>
        @endcan
    </div>
</x-layout>
