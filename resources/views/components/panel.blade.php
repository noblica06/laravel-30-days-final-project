@props(['href'])
<div>
    <a href="{{$href}}" class="display-block">
        <div {{$attributes(['class' => 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group'])}}>
            {{$slot}}
        </div>
    </a>
</div>
