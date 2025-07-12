<!DOCTYPE html>
<html lang="en">
<head>
    <meta chaeset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-zinc-950">
    <nav class=" z-50 flex justify-between px-8 py-6 space-x-20 items-center bg-zinc-950 ">
        <a href="/" class="text-bold text-3xl text-rose-100 hover:opacity-75">N.P</a>
        <div class="flex text-2xl space-x-7 justify-end text-rose-100">
            <a href="about" class=" hover:opacity-75">About Me</a>
            <a href="portfolio" class=" hover:opacity-75">Portfolio</a>
            <a href="experience" class=" hover:opacity-75">Experience</a>
            <a href="contact" class=" hover:opacity-75">Contact</a>
        </div>
    </nav>
    {{ $slot }}
    <p class="space-y-28 py-96 text-rose-100 flex justify-center"> Content here  </p>
</body>
<footer>
    <div class="flex justify-center text-bold items-center space-y-28 py-10 bg-zinc-900 inset-x-0 bottom-0">
    <p>   </p>
    <p>foot.</p>
</div>
</footer>
</html>