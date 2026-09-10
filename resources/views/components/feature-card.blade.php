@props([
    'icon' => '⚡',
    'title' => 'Feature',
    'description' => '',
])

<div class="card-hover rounded-2xl border border-slate-200 bg-white p-6">

    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50 text-2xl">
        {{ $icon }}
    </div>

    <h3 class="mt-5 text-lg font-bold text-slate-900">
        {{ $title }}
    </h3>

    <p class="mt-3 leading-7 text-slate-600">
        {{ $description }}
    </p>

</div>