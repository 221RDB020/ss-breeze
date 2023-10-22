@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-clash-med text-sm text-accent']) }}>
        {{ $status }}
    </div>
@endif
