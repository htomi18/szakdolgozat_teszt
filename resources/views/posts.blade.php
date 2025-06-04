<x-layout>
    <x-slot:heading>
        Posts for you
    </x-slot:heading>



    <form method="POST"  enctype="multipart/form-data" class="p-4 mb-10 bg-gray-200 rounded">
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



    <div class="space-y-4">
        @foreach ($posts as $post )

            <a href="/posts/{{ $post['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">  <!-- a href dinamikusan kezeli a job id-kat -->
              <div class="text-sm font-bold text-blue-500">
                {{ $post->user->name }}
              </div>
              <div>
                <strong>{{ $post['title'] }}:</strong><br> {{ $post['content'] }}
              </div>
            </a>

        @endforeach
        </div>
</x-layout>
