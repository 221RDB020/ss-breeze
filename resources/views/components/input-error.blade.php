@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'font-clash-reg text-md text-error space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
