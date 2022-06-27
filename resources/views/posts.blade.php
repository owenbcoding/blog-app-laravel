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
        {{-- <img src="../images/undraw_working.png" alt="working-pic"> --}}
         {{-- <h1 class="mt-10 mb-20 font-bold text-xl"><a href="/post/1">First post - {{$slug}}</a></h1> --}}
         {{-- <a href="/posts">First Blog post</a> --}}
        <article class="mx-auto w-1/2 border-t-4 border-gray-400 mt-10 p-3">
            <h1 class="mt-10 mb-20 font-bold text-xl text-center"><a href="/post">First Blog post</a> </h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem pariatur repellat saepe sequi delectus magnam non similique dolores reprehenderit vitae!</p>
        </article>

        <article class="mx-auto w-1/2 border-t-4 border-gray-400 mt-10 p-3">
            <h1 class="mt-10 mb-20 font-bold text-xl text-center"><a href="/post">Second Blog post</a></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, perferendis iste? Architecto quaerat animi tenetur aperiam ex exercitationem ea sequi?</p>
        </article>

        <article class="mx-auto w-1/2 border-t-4 border-gray-400 mt-10 p-3 mb-10">
            <h1 class="mt-10 mb-20 font-bold text-xl text-center"><a href="/post">Third Blog post</a></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus corporis quisquam libero. Facere possimus totam sapiente, autem repudiandae non consectetur?</p>
        </article>

    </main>

</body>

</html>
