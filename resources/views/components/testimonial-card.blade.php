@props([
    'image',
    'name',
    'position',
    'review',
])

<div class="card-hover rounded-2xl border border-slate-200 bg-white p-6">

    <div class="flex gap-1 text-yellow-400">
        ★ ★ ★ ★ ★
    </div>

    <p class="mt-5 leading-7 text-slate-600">
        "{{ $review }}"
    </p>

    <div class="mt-6 flex items-center gap-4">

        <img
            src="{{ asset('images/' . $image) }}"
            alt="{{ $name }}"
            class="h-12 w-12 rounded-full border-2 border-indigo-100"
        >

        <div>
            <p class="font-bold text-slate-900">
                {{ $name }}
            </p>

            <p class="text-sm text-slate-500">
                {{ $position }}
            </p>
        </div>

    </div>

</div>