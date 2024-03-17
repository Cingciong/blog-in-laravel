@props(['images'=>NULL, 'userTag'=>' ','postContent' => '', 'userName' => '', 'userImage' => '', 'timeSincePostCreation' => ''])

<div>
    <div class="grid grid-cols-10 h-auto pb-2 border--solid border-gray-100 border-b-[3px]">
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
                @php
                    $images = json_decode($images, true);
                @endphp
                <div class="owl-carousel">
                    @foreach($images as $image)
                        <div class="item h-auto h-max-48 rounded-2xl overflow-hidden">
                            <img src="{{ $image }}" alt="Image" class=" w-full h-max-48 rounded-2xl object-contain my-3 border-solid border-2 border-gray-400">
                        </div>
                    @endforeach
                </div>
                <script>
                    $(document).ready(function(){
                        $('.owl-carousel').owlCarousel({
                            loop:false,
                            margin:3,
                            nav:true,
                            items: 1,
                            navText: ['<img class=" bg-gray-200 rounded-full duration-300 opacity-50 hover:opacity-100 w-9 rotate-90" src="' + "{{ asset('img/arrow-down.svg') }}" + '">', '<img class=" ml-2 bg-gray-200 rounded-full duration-300 opacity-50 hover:opacity-100 w-9 rotate-270" src="' + "{{ asset('img/arrow-down.svg') }}" + '">']
                        });
                    });
                </script>
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
