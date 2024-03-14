@props(['imgSrc' => 'img/default.svg'])

<button {{ $attributes->merge(['class' => 'w-full  rounded-full px-6 duration-300 hover:bg-gray-100 hover:shadow-2xl']) }}>
    <div class="grid grid-cols-5 ">
        <img class="w-3/4" src="{{ asset($imgSrc) }}"></img0>
        <strong class="pl-4 col-span-4 flex items-center">
            {{ $slot }}
        </strong>
    </div>
</button>
