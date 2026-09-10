@props([
    'href' => '#',
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-xl font-semibold transition-all duration-200 focus:outline-none focus:ring-4';

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-5 py-3 text-sm sm:text-base',
        'lg' => 'px-6 py-3.5 text-base',
    ];

    $variants = [
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700 hover:-translate-y-0.5 shadow-lg shadow-indigo-600/20 focus:ring-indigo-200',
        'secondary' => 'bg-white text-slate-700 border border-slate-200 hover:border-indigo-300 hover:text-indigo-600 hover:-translate-y-0.5 focus:ring-slate-200',
        'dark' => 'bg-slate-900 text-white hover:bg-slate-800 hover:-translate-y-0.5 focus:ring-slate-300',
        'light' => 'bg-indigo-50 text-indigo-700 hover:bg-indigo-100 focus:ring-indigo-100',
    ];
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => $base . ' ' . $sizes[$size] . ' ' . $variants[$variant]
    ]) }}
>
    {{ $slot }}
</a>