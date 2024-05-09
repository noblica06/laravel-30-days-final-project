@props(['job'])
<x-panel class="flex flex-row gap-6">
    <x-employer-logo/>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

            <h3 class="font-bold mt-3 text-xl group-hover:text-blue-800">{{$job->title}}</h3>
            <p class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - From {{$job->salary}}</p>

    </div>
    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag"/>
        @endforeach
    </div>
</x-panel>
