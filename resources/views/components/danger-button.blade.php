<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red border-[3px] border-transparent rounded-xl font-clash-sbol text-xs text-white uppercase tracking-wider hover:opacity-80 active:opacity-80 focus:outline-none focus:ring-2 focus:ring-red focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
