@props([])
<div x-data="{ show: false }" @click.away="show =false" class="relative">
    {{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    {{-- links --}}

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50 overflow-auto max-h-20"
        style="display: none">
            {{ $items }}
    </div>
</div>
