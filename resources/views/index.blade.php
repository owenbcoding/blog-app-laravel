<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="../images/hs-logo.svg">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Blog Site</title>
</head>

<body>
    <!-- <header class="flex justify-center max-w-full mt-20">
        <a href="#"><img class="h-20 mr-10" src="../images/hs-logo.svg" alt="logo"></a>
        <h1 class="text-white mt-8 text-2xl hover:text-teal-300"><a href="/">HostSapling</a></h1>
    </header> -->
    <main>
        <h2 class="mt-20 text-2xl text-center">Recent Posts</h2>

        <!-- <div class="flex grid-rows-3 justify-center mt-20">
            <a href="#" class="flex flex-col items-center w-96 p-4 m-5 bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Blog Post</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sed.</p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center w-96 p-4 m-5 bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Blog Post</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, saepe.</p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center w-96 p-4 m-5 bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Blog Post</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, cumque?</p>
                </div>
            </a>
        </div> -->

        <div class="grid justify-center">
            {{-- <!-- @for ( $i = 0; $i < 10; $i++ ) --> --}}
            <div class="max-w-full lg:max-w-full lg:flex mt-10 m-10">
                <div class="bg-white p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                    <h1 class="text-gray-900 mb-2 text-2xl font-bold text-center"><a href="/post/1">Blog Post 1</a></h1>
                        {{-- <!-- <h1 class="text-gray-900 mb-2 text-2xl font-bold text-center"><a href="/post/{{$i}}">Blog Post {{$i}}</a></h1> --> --}}
                        <p class="text-sm font-normal flex items-center">
                            Public Post
                        </p>
                        <p class="mb-3 font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>
                    <div class="flex items-center">
                        <div class="text-sm">
                            <p class="font-normal leading-none">HS Staff</p>
                            <p class="font-normal">Aug 18</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <!-- @endfor --> --}}

            <!-- <div class="max-w-full lg:max-w-full lg:flex mt-10 m-10">
                <div class="bg-white p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <h1 class="text-gray-900 mb-2 text-2xl font-bold text-center"><a href="/post/2">Blog Post 2</a></h1>
                        <p class="text-sm font-normal flex items-center">
                            Public Post
                        </p>
                        <p class="mb-3 font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>
                    <div class="flex items-center">
                        <div class="text-sm">
                            <p class="font-normal leading-none">HS Staff</p>
                            <p class="font-normal">Aug 18</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-full lg:max-w-full lg:flex mt-10 m-10">
                <div class="bg-white p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <h1 class="text-gray-900 mb-2 text-2xl font-bold text-center"><a href="/post/3">Blog Post 3</a></h1>
                        <p class="text-sm font-normal flex items-center">
                            Public Post
                        </p>
                        <p class="mb-3 font-normal text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>
                    <div class="flex items-center">
                        <div class="text-sm">
                            <p class="font-normal leading-none">HS Staff</p>
                            <p class="font-normal">Aug 18</p>
                        </div>
                    </div>
                </div> -->
            </div>

    </main>

</body>

</html>