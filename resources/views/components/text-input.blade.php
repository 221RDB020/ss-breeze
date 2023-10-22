@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'font-clash-reg px-2 py-1 border-[3px] border-background focus:border-accent focus:ring-accent rounded-lg']) !!}>
