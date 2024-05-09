<button {{ $attributes->merge(['class' => 'text:sm rounded-xl bg-white px-3 py-2 font-semibold text-black', 'type' => 'submit'])}}>
    {{$slot}}
</button>
