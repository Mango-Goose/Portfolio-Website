<x-layout>
    <div class="text-rose-100">
        <!--Title area-->
        <div class = "items-center flex-col flex mb-12">
            <img src="images/CavernClimbIcon.png" class="w-1/6 rounded-3xl">
            <p class="text-6xl pt-8">Minerals and Mayhem</p>
        </div>
        <div class="mx-28 mb-8">
            <p class="text-center text-lg leading-10">A roguelike game focused around the theme of mining!</p>
        </div>

        <!--About M&M Section-->
        <div class="flex justify-center mb-8">
            <div class="flex flex-col items-center border-2 rounded-xl py-5 w-5/6">
                <h2 class="text-4xl pb-3">About Minerals and Mayhem</h2>
                <p class="px-12 text-center leading-7">Minerals and Mayhem is a roguelike game where you play as a robot trying to mine ores in a cave. The aim of the game is to mine as much ore as possible without being killed by the waves of spawning enemies. This game was created as a project in a game jam, where I worked with 3 of my classmates to create this finished project.</p>
            </div>
        </div>

         <!--My Role section-->
        <div class="flex justify-center pb-8">
            <div class="flex flex-col items-center border-2 rounded-xl py-5 w-5/6">
                <h2 class="text-4xl mb-3">My Role</h2>
                <div class="text-center ">
                    <p class="px-12 pb-2">I contributed to this project in a more programming-based role, and my contributions to this project included the following:</p>
                    <ul class=" pl-16 text-left list-disc leading-7">
                        <li>Creating the code for ore respawn</li>
                        <li>Creating animations for ore spawning</li>
                        <li>The algorithm for spawning in waves of enemies</li>
                        <li>Score keeping algorithm</li>
                        <li>Integrating other assets and scripts into the main project smoothly. <em>[we weren't using a GitHub repository to merge our code]</em></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Software section-->
        <div class="flex justify-center mb-8">
            <div class="flex flex-col items-center border-2 rounded-xl py-5 w-5/6">
                <h2 class="text-4xl pb-3">Software</h2>
                <div class="text-center ">
                    <p class="px-12 pb-2">I created all assets for this project, and here is the full list of everything that I used:</p>
                    <ul class=" pl-16 text-left self-start list-disc leading-7">
                        <li>Unity game engine</li>
                        <li>C#</li>
                        <li>Piskel <em>[2D art]</em></li>
                    </ul>
</div>
            </div>
        </div>

        <!--For finding source code-->
        <div class="flex justify-center">
            <div class="flex flex-col items-center border-2 rounded-xl py-5 w-5/6">
                <h2 class="text-4xl mb-5">Where can you find this project?</h2>
                <p class="mb-5">The source code is available to view on Github!</p>
                <a href="https://github.com/mohasali/Farm-To-Fork" class="flex justify-center">
                    <img src="images/github-mark-white.png" class="hover:scale-105 transition duration-700 w-1/3">
                </a>
            </div>
        </div>

        <!--navigation arrows-->
        <div class="flex justify-between">
            <a href="portfolio">
                <div class="px-5 hover:scale-110 transition duration-500">
                    <h2 class="text-6xl">←</h2>
                    <p class="hover:underline opacity-75">Back to projects</p>
                </div>
            </a>

            <a href="mineralsandmayhem">
                <div class="px-5 hover:scale-110 transition duration-500">
                    <h2 class="text-6xl">→</h2>
                    <p class="hover:underline opacity-75">Minerals and Mayhem</p>
                </div>
            </a>
        </div>

    </div>
</x-layout>