@props(['value'])

<label class="block font-medium text-sm text-white">
    {{ $value ?? $slot }}
</label>