<x-layout>
    <h1 class="text-rose-100 text-bold text-6xl py-16 justify-center flex">Contact</h1>

    <!--Contact Form-->
    <div class="border-2 rounded-xl ml-80 mr-80 text-rose-100 flex flex-col items-center py-5">
        <h2 class="py-4 text-4xl">Contact Form</h2>
        <p class="pb-10 text-l opacity-75">You can use this form for any inquiries about me and my work!</p>
        
        <!--Form input-->
        <form method="POST" class="flex-col flex grid-flow-col">
            <div class="flex justify-evenly">
                <input type="text" id="fName" name="fName" placeholder="First Name" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-400" required>
                <input type="text" id="lName" name="lName" placeholder="Last Name" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-400" required>
            </div>
            <input type="text" id="email" name="email" placeholder="Email" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-400" required>
            <input type="text" id="inquiryType" name="inquiryType" placeholder="Inquiry" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-400" required>
            <textarea id="description" name="description" rows="5" placeholder="Add more details here!"class=" resize:none m-4 mb-8 bg-zinc-800 p-3 rounded-lg placeholder-zinc-400 placeholder" required></textarea>
            <input type="submit" Value="Submit" class="hover:opacity-75 text-2xl bg-zinc-800  rounded-xl py-3 mb-5">
        </form>

    </div>
</x-layout>