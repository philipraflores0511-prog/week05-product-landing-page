@props([
    'name',
    'price',
    'description',
    'popular' => false,
])

<div
    class="relative flex h-full flex-col rounded-2xl border
    {{ $popular ? 'border-indigo-500 shadow-2xl shadow-indigo-500/10' : 'border-slate-200' }}
    bg-white p-7"
>

    @if($popular)
        <div class="absolute -top-3 left-1/2 -translate-x-1/2">
            <span class="rounded-full bg-indigo-600 px-4 py-1.5 text-xs font-bold text-white shadow-lg">
                MOST POPULAR
            </span>
        </div>
    @endif

    <div>
        <h3 class="text-xl font-bold text-slate-900">
            {{ $name }}
        </h3>

        <p class="mt-2 text-sm leading-6 text-slate-500">
            {{ $description }}
        </p>
    </div>

    <div class="mt-6">
        <span class="text-4xl font-black text-slate-900">
            {{ $price }}
        </span>

        <span class="text-slate-500">
            /month
        </span>
    </div>

    <div class="my-7 h-px bg-slate-100"></div>

    <div class="space-y-4">
        {{ $slot }}
    </div>

    <div class="mt-auto pt-8">

        <x-button
            href="#contact"
            variant="{{ $popular ? 'primary' : 'secondary' }}"
            class="w-full"
        >
            Choose {{ $name }}
        </x-button>

    </div>

</div>