@props(['images'=>NULL, 'userTag'=>' ','postContent' => '', 'userName' => '', 'userImage' => '', 'timeSincePostCreation' => ''])




<div>
    <div class="grid grid-cols-10  pb-2 border--solid border-gray-100 border-b-[3px]">
        <a href="\" class="p-[12px]  ">
            <img class="rounded-full " src={{$userImage}}>
        </a>
        <div class="pl-0 p-[12px]  col-span-9">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <strong class="text-lg">{{ $userName }}</strong>
                    <h4 class="text-gray-400 ml-2">{{$userTag}} • {{ $timeSincePostCreation }}</h4>
                </div>
                <a href="/">
                    <img class="w-9 ml-2" src={{ asset("img/arrow-down.svg") }}></img0>
                </a>
            </div>

            @if($images !== '')
                <div>
                    @php
                        $images = json_decode($images, true);
                    @endphp
                    @foreach ($images as $image)
                        <img src="{{ $image }}" alt="Image">
                    @endforeach
                </div>
            @endif

            <div class="text-gray-900 pr-14 pb-3">
                <p>{{ $postContent }}</p>
            </div>
            <div class="flex gap-20">
                <a href="/">
                    <img class="w-7 text-gray-500" src="{{ asset('img/comment.svg') }}" alt="Comment">
                </a>
                <a href="/">
                    <img class="w-7 text-gray-500" src="{{ asset('img/share.svg') }}" alt="Share">
                </a>
                <a href="/">
                    <img class="w-7 text-gray-500" src="{{ asset('img/heart.svg') }}" alt="Heart">
                </a>
                <a href="/">
                    <img class="w-7 text-gray-500" src="{{ asset('img/upload.svg') }}" alt="Upload">
                </a>
            </div>
        </div>
    </div>
</div>
