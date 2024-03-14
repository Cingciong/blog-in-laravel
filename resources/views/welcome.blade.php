<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-gray-50-100 grid grid-cols-10 h-screen">
    <aside class="col-span-2 flex justify-center pt-12">

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
    <div class="col-span-5 border-x-[4px] border--solid border-gray-200">a</div>
    <div class="col-span-3">

    </div>
</div>
</body>
</html>
