<x-layout>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>

    <form method="POST"  enctype="multipart/form-data" class="p-4 bg-gray-200 rounded">
    @csrf
    <div class="flex items-center space-x-3">
        <div class="w-10 h-10 bg-red-300 rounded-full"></div>
        <input name="content" placeholder="What's on your mind?" class="w-full bg-transparent focus:outline-none">
    </div>

    <div class="flex justify-between items-center mt-2">
        <div class="flex items-center space-x-2">
            <label class="cursor-pointer">
                📎 <input type="file" name="attachment" class="hidden">
            </label>
            <button type="button" id="emoji-btn">😊</button>
        </div>
        <button type="submit" class="bg-slate-800 text-white px-4 py-1 rounded">Post</button>
    </div>
</form>




</x-layout>
