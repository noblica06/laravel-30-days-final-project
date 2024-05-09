@props(['job'])
<x-panel class="flex flex-row gap-6 justify-between" href="/jobs/{{$job->id}}">
    <div>
        <x-employer-logo/>
    </div>
    <div class="flex flex-col">
        <p class="text-sm text-gray-400 mt-auto">{{ $job->employer->name }}</p>
        <h3 class="font-bold mt-3 text-xl group-hover:text-blue-800">{{$job->title}}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - From {{$job->salary}}</p>

    </div>
    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag"/>
        @endforeach
    </div>
</x-panel>
