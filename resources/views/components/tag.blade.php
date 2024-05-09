@props(['tag', 'size' => 'base'])
@php
    $classes = 'bg-white/10 hover:bg-white/20 font-bold rounded-xl';
    if($size == 'base'){
        $classes.= ' px-8 py-1 text-sm';
    }

    if($size == 'small'){
        $classes.= ' px-3 py-1 text-xs';
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
