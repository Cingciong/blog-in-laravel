<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body  class="h-auto">
<div class="bg-gray-50-100 grid grid-cols-10 ">
    <aside class="col-span-2  self-start flex justify-center sticky top-0   pt-12">
        <nav class=" w-3/4 gap-5 grid grid-rows-10">
            <div class="ml-7  w-1/4">
                <img class="w-3/4" src="img/twitter.png">
                </img0>
            </div>
            <x-nav_button imgSrc="img/home.svg">Home</x-nav_button>
            <x-nav_button imgSrc="img/notification.svg">Notification</x-nav_button>
            <x-nav_button imgSrc="img/messages.svg">Messages</x-nav_button>
            <x-nav_button imgSrc="img/bookmark.svg">Bookmarks</x-nav_button>
            <x-nav_button imgSrc="img/list.svg">Lists</x-nav_button>
            <x-nav_button imgSrc="img/profile.svg">Profile</x-nav_button>
            <x-nav_button imgSrc="img/more.svg">More</x-nav_button>
            <div class=" bg-blue-500 hover:bg-blue-800 rounded-full px-6 duration-300 hover:shadow-2xl">
                <button class="flex justify-center h-full items-center  w-full ">
                    <strong class="text-white tracking-wider">
                        Tweet
                    </strong>
                </button>
            </div>



        </nav>
    </aside>
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
            $postContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor";
//            $images = [
//                'https://picsum.photos/200/300?grayscale',
//                'https://picsum.photos/300/300?grayscale',
//                'https://picsum.photos/500/300?grayscale',
//                'https://picsum.photos/400/400?grayscale',
//            ];
//            $images = json_encode($images);
        $images = NULL;
        ?>
        <section>
            <x-post images="{!! $images !!}" userTag="{{ '@'.'LA' }}" postContent="{{$postContent}}" userName="LA newsletter" userImage="https://picsum.photos/50/50" timeSincePostCreation="3m" >

            </x-post>
        </section>
        <section>
            <x-post images="{!! $images !!}" userTag="{{ '@'.'LA' }}" postContent="{{$postContent}}" userName="LA newsletter" userImage="https://picsum.photos/50/50" timeSincePostCreation="3m" >

            </x-post>
        </section>
        <section>
            <x-post images="{!! $images !!}" userTag="{{ '@'.'LA' }}" postContent="{{$postContent}}" userName="LA newsletter" userImage="https://picsum.photos/50/50" timeSincePostCreation="3m" >

            </x-post>
        </section>
        <section>
            <x-post images="{!! $images !!}" userTag="{{ '@'.'LA' }}" postContent="{{$postContent}}" userName="LA newsletter" userImage="https://picsum.photos/50/50" timeSincePostCreation="3m" >

            </x-post>
        </section>
        <section>
            <x-post images="{!! $images !!}" userTag="{{ '@'.'LA' }}" postContent="{{$postContent}}" userName="LA newsletter" userImage="https://picsum.photos/50/50" timeSincePostCreation="3m" >

            </x-post>
        </section>

    </main>
    <div class="col-span-3">

    </div>
</div>
</body>
</html>
