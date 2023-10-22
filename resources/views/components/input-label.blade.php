@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-clash-med text-md text-black tracking-wider']) }}>
    {{ $value ?? $slot }}
</label>
