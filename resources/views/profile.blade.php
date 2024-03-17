<x-header></x-header>


</body>

<div class="bg-gray-50-100 grid grid-cols-10 ">
    <x-aside-nav></x-aside-nav>


    <main class=" h-auto col-span-5 border-x-[3px] border--solid border-gray-100">
        <section class="h-16 border-b-[2px] pr-3  border-gray-100 flex justify-between items-center">
            <div class="flex">
               <button href="/">
                   <img class="w-9 h-9 rounded-full rotate-90 hover:bg-gray-100 duration-300 mr-2" src="{{asset("img/arrow-down.svg")}}"></img>
               </button>
                <div class="flex flex-col">
                    <strong class="text-xl">{{$user->name}}</strong>
                    <p class="text-gray-500">26K Tweets</p>
                </div>
            </div>
        </section>

        <section>
            <img class="w-full h-[280px] mb-2" src="https://picsum.photos/1000/280"></img>
            <div class="flex justify-end h-max-[100px] pr-6">

                <img class=" relative right-1/4 bottom-20 border-white border-solid border-[6px] w-[200px] h-[200px] rounded-full -mt-10" src="{{$user->userImage}}"></img>

                  <div class="px-1">
                      <button class="rounded-full border-2 border-gray-300 p-1 hover:bg-gray-100 duration-300">
                          <img class="w-6" src="{{asset('img/dots.svg')}}"></img>
                      </button>
                  </div>
                  <div class="px-1">
                      <button class="rounded-full border-2 border-gray-300 p-1 hover:bg-gray-100 duration-300">
                          <img class="w-6" src="{{asset('img/letter.svg')}}"></img>
                      </button>
                  </div>
                <div class="px-1">
                    <button class="rounded-full border-2 border-gray-300 p-1 hover:bg-gray-100 duration-300">
                        <img class="w-6" src="{{asset('img/bell.svg')}}"></img>
                    </button>
                </div>
                <div>
                    <button class="rounded-full border-2 border-gray-300 px-4 text-[16px] py-1 hover:bg-gray-100 duration-300">
                        Following
                    </button>
                </div>
            </div>
            <div class="flex flex-col px-6 mt-[-60px]">

                    <strong class="text-xl">{{$user->name}}</strong>
                    <p class="text-gray-500">{{$user->tag}} <strong class="bg-gray-100 text-[11px] px-0.5">Follows you</strong></p>
                    <p class="text-gray-700 w-3/4">{{$user->bio}}
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
                    </p>
                    <div class="flex row text-sm mt-2">
                        <p class="text-gray-500"> <strong class="text-black">17</strong> Following </p>&nbsp;&nbsp;
                        <p class="text-gray-500"> <strong class="text-black">9000</strong> Followers</p>
                    </div>
            </div>
        </section>
        <?php

       //echo($user);
        ?>
    </main>
    <aside class="col-span-3">

    </aside>
</div>
</body>

<x-footer></x-footer>
