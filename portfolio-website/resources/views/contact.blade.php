<x-layout>
    <h1 class="text-rose-100 text-bold text-6xl py-16 justify-center flex">Contact</h1>

    <!--Contact Form-->
    <div class="border-2 rounded-xl ml-80 mr-80 text-rose-100 flex flex-col items-center py-5">
        <h2 class="py-4 text-4xl">Contact Form</h2>
        <p class="pb-10 text-l opacity-75">You can use this form for any inquiries about me and my work!</p>
        <form class="flex-col flex ">
            <div class="flex justify-evenly">
                <input type="text" id="fName" name="fName" placeholder="First Name" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-500">
                <input type="text" id="lName" name="lName" placeholder="Last Name" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-500">
            </div>
            <input type="text" id="email" name="email" placeholder="Email" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-500">
            <input type="text" id="inquiryType" name="inquiryType" placeholder="Inquiry" class="m-4 bg-zinc-800 p-3 rounded-lg placeholder-zinc-500">
            <input type="textarea" id="fName" name="fName" placeholder="Add more details here!"class=" h-48 m-8 bg-zinc-800 p-3 rounded-lg placeholder-zinc-500 placeholder"></textarea>
            <input type="submit" Value="Submit" class="hover:opacity-75 text-2xl bg-zinc-900  rounded-xl px-7 py-3 mb-5">
        </form>
    </div>
</x-layout>