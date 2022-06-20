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

    <main>
        <h2 class="mt-20 text-2xl text-center"><a href="/">Recent Blog Posts</a></h2>

        {{-- <div class="flex grid-rows-3 justify-center mt-20">
            <article class="mx-auto w-1/2 border-t-4 mt-10 p-3">
                <img src="../images/undraw_working.png" alt="working-pic">
                <h1 class="mt-10 mb-20 font-bold text-xl"><a href="/post">First post</a></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nihil doloremque debitis enim iste quis doloribus voluptatem nam odio eos, quaerat cumque praesentium nostrum reprehenderit magni architecto quisquam rem labore. Provident, distinctio! Est rerum aut non quo, sapiente cum similique quaerat beatae ab possimus nihil, natus necessitatibus qui, dolor voluptates error itaque minima ut dicta hic architecto facere totam corrupti. Nesciunt consequatur quo ea delectus praesentium et voluptas, harum earum eius quia quibusdam consectetur officia, itaque voluptate illum accusantium dicta dignissimos porro quas suscipit. Eligendi sit voluptatem molestiae ut fugiat necessitatibus atque? Incidunt labore animi assumenda illo eveniet suscipit minus.</p>
            </article>
            <article class="mx-auto w-1/2 border-t-4 mt-10 p-3">
                <img src="../images/undraw_working.png" alt="working-pic">
                <h1 class="mt-10 mb-20 font-bold text-xl"><a href="/post">Second post</a></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nihil doloremque debitis enim iste quis doloribus voluptatem nam odio eos, quaerat cumque praesentium nostrum reprehenderit magni architecto quisquam rem labore. Provident, distinctio! Est rerum aut non quo, sapiente cum similique quaerat beatae ab possimus nihil, natus necessitatibus qui, dolor voluptates error itaque minima ut dicta hic architecto facere totam corrupti. Nesciunt consequatur quo ea delectus praesentium et voluptas, harum earum eius quia quibusdam consectetur officia, itaque voluptate illum accusantium dicta dignissimos porro quas suscipit. Eligendi sit voluptatem molestiae ut fugiat necessitatibus atque? Incidunt labore animi assumenda illo eveniet suscipit minus.</p>
            </article>
            <article class="mx-auto w-1/2 border-t-4 mt-10 p-3">
                <img src="../images/undraw_working.png" alt="working-pic">
                <h1 class="mt-10 mb-20 font-bold text-xl"><a href="/post">Third post</a></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nihil doloremque debitis enim iste quis doloribus voluptatem nam odio eos, quaerat cumque praesentium nostrum reprehenderit magni architecto quisquam rem labore. Provident, distinctio! Est rerum aut non quo, sapiente cum similique quaerat beatae ab possimus nihil, natus necessitatibus qui, dolor voluptates error itaque minima ut dicta hic architecto facere totam corrupti. Nesciunt consequatur quo ea delectus praesentium et voluptas, harum earum eius quia quibusdam consectetur officia, itaque voluptate illum accusantium dicta dignissimos porro quas suscipit. Eligendi sit voluptatem molestiae ut fugiat necessitatibus atque? Incidunt labore animi assumenda illo eveniet suscipit minus.</p>
            </article>
        </div> --}}
        {{-- <img src="../images/undraw_working.png" alt="working-pic"> --}}

        <article class="mx-auto w-1/2 border-t-4 border-gray-400 mt-10 p-3">
            <h1 class="mt-10 mb-20 font-bold text-xl text-center"><a href="/post">First Blog post</a></h1>
            {{-- <h1 class="mt-10 mb-20 font-bold text-xl"><a href="/post/1">First post - {{$slug}}</a></h1> --}}
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nihil doloremque debitis enim iste quis
                doloribus voluptatem nam odio eos, quaerat cumque praesentium nostrum reprehenderit magni architecto
                quisquam rem labore. Provident, distinctio! Est rerum aut non quo, sapiente cum similique quaerat beatae
                ab possimus nihil, natus necessitatibus qui, dolor voluptates error itaque minima ut dicta hic
                architecto facere totam corrupti. Nesciunt consequatur quo ea delectus praesentium et voluptas, harum
                earum eius quia quibusdam consectetur officia, itaque voluptate illum accusantium dicta dignissimos
                porro quas suscipit. Eligendi sit voluptatem molestiae ut fugiat necessitatibus atque? Incidunt labore
                animi assumenda illo eveniet suscipit minus.</p>
        </article>

        <article class="mx-auto w-1/2 border-t-4 border-gray-400 mt-10 p-3">
            <h1 class="mt-10 mb-20 font-bold text-xl text-center"><a href="/post">Second Blog post</a></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nihil doloremque debitis enim iste quis
                doloribus voluptatem nam odio eos, quaerat cumque praesentium nostrum reprehenderit magni architecto
                quisquam rem labore. Provident, distinctio! Est rerum aut non quo, sapiente cum similique quaerat beatae
                ab possimus nihil, natus necessitatibus qui, dolor voluptates error itaque minima ut dicta hic
                architecto facere totam corrupti. Nesciunt consequatur quo ea delectus praesentium et voluptas, harum
                earum eius quia quibusdam consectetur officia, itaque voluptate illum accusantium dicta dignissimos
                porro quas suscipit. Eligendi sit voluptatem molestiae ut fugiat necessitatibus atque? Incidunt labore
                animi assumenda illo eveniet suscipit minus.</p>
        </article>

        <article class="mx-auto w-1/2 border-t-4 border-gray-400 mt-10 p-3 mb-10">
            <h1 class="mt-10 mb-20 font-bold text-xl text-center"><a href="/post">Third Blog post</a></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nihil doloremque debitis enim iste quis
                doloribus voluptatem nam odio eos, quaerat cumque praesentium nostrum reprehenderit magni architecto
                quisquam rem labore. Provident, distinctio! Est rerum aut non quo, sapiente cum similique quaerat beatae
                ab possimus nihil, natus necessitatibus qui, dolor voluptates error itaque minima ut dicta hic
                architecto facere totam corrupti. Nesciunt consequatur quo ea delectus praesentium et voluptas, harum
                earum eius quia quibusdam consectetur officia, itaque voluptate illum accusantium dicta dignissimos
                porro quas suscipit. Eligendi sit voluptatem molestiae ut fugiat necessitatibus atque? Incidunt labore
                animi assumenda illo eveniet suscipit minus.</p>
        </article>

        {{-- <div class="grid justify-center">
        
        </div> --}}

    </main>

</body>

</html>
