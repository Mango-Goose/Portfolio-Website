<!DOCTYPE html>
<html lang="en">
<head>
    <meta chaeset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-zinc-950">
    
    <!-- Nav bar -->
    <nav class=" z-50 flex justify-between px-8 py-6 space-x-20 items-center bg-zinc-950 sticky top-0">
        <a href="/" class="text-bold text-3xl text-rose-100 hover:opacity-75">N.P</a>
        <div class="flex text-2xl space-x-7 justify-end text-rose-100">
            <a href="about" class=" hover:opacity-75">About Me</a>
            <a href="portfolio" class=" hover:opacity-75">Projects</a>
            <a href="experience" class=" hover:opacity-75">Experience</a>
            <a href="contact" class=" hover:opacity-75">Contact</a>
        </div>
    </nav>
    <!-- page content here -->
    {{ $slot }}
    <div class="py-12"></div>
</body>

<!--footer content -->
<footer>
    <div class="flex flex-col  justify-evenly text-bold items-center text-rose-100 py-10 bg-zinc-900 inset-x-0 bottom-0">
    <a href="about" class=" py-3 hover:opacity-75">About Me</a>
    <a href="portfolio" class=" py-3 hover:opacity-75">Projects</a>
    <a href="experience" class=" py-3 hover:opacity-75">Experience</a>
    <a href="contact" class=" py-3 hover:opacity-75">Contact</a>
</div>
</footer>
</html>