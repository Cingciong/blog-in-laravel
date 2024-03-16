@props(['buttonText' => 'Tweet'])

<button {{ $attributes->merge(['class' => ' h-full bg-blue-500 hover:bg-blue-800 rounded-full px-6 duration-300 hover:shadow-2xl text-white font-bold tracking-wider']) }}>
    {{ $buttonText }}
</button>
