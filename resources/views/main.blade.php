<x-header></x-header>

</body>
<div class="bg-gray-50-100 grid grid-cols-10 ">
    <x-aside-nav></x-aside-nav>
{{--    main--}}
    <main class=" h-auto col-span-5 border-x-[3px] border--solid border-gray-100">
        <div class="h-16 border-b-[2px] px-4  border-gray-100 flex justify-between items-center">
            <strong class="text-2xl">Home</strong>
            <a href="/">
                <img  class="w-9 hover:bg-gray-100 rounded-full duration-300" src={{ asset("img/star.svg") }}></img0>
            </a>
        </div>

        <section class="grid grid-cols-10 h-[160px] border--solid border-gray-100 border-b-[20px]">
            <a href="\" class="p-[12px] pr-0 ">
                <img class="rounded-full " src="https://picsum.photos/50/50">
            </a>
           <div class="pl-0 p-[12px] grid-rows-2 col-span-9">
               <textarea  class="h-[50px] w-3/4 border-gray-100 text-[24px]  pt-[6px] text-gray-500 rounded-2xl">What's happening?</textarea>
                <div class=" flex justify-between pr-[12px] mt-2.5 ">
                    <div class="flex items-center gap-3">
                        <a href="/">
                            <img class="w-7" src={{ asset("img/image.svg") }}></img0>
                        </a>
                        <a href="/">
                            <img class="w-7" src={{ asset("img/gif.svg") }}></img0>
                        </a>
                        <a href="/">
                            <img class="w-7" src={{ asset("img/poll.svg") }}></img0>
                        </a>
                        <a href="/">
                            <img class="w-7" src={{ asset("img/smile.svg") }}></img0>
                        </a>
                    </div>
                    <div>
                        <x-tweet_button class="h-[45px]">Tweet</x-tweet_button>
                    </div>
                </div>
            </div>
        </section>

        <?php

        ?>
        <section>
            @foreach($posts as $post)
                <x-post images="{!! $post->images !!}" userTag="{{ $post->user->tag }}" postContent="{{$post->postContent}}" userName="{{$post->user->name}}" userImage="{{$post->user->userImage}}" timeSincePostCreation="{{$post->created_at->diffForHumans()}}" >
                </x-post>
            @endforeach
        </section>

        </section>


    </main>
    <aside class="col-span-3">

    </aside>
</div>
</body>

<x-footer></x-footer>
