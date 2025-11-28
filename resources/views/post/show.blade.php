<x-layout :title="$pageTitle">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
        <ul>
        @foreach ($post->comments as $comment)
                        <li class="p-4 bg-gray-100 rounded-md shadow-sm">
                        <p class="text-gray-800">{{ $comment->content }}</p>
                        <span class="mt-1 text-sm text-gray-600">{{  $comment->author }}</span>
                    </li>
                @endforeach
                </ul>

                <div class="border border-gray-300 px-3 py-2 mt-2">
<form action="/comments" method="POST" class="mt-8">
@csrf

<input type="hidden" name="post_id" value="{{$post->id}}" />

<div class="space-y-6">
        <label for="author" class="block text-sm/6 font-medium text-black">your Name</label>
        <div class="mt-2">
            <input type="text" value="{{ old('author') }}" name="author" id="author" autocomplete="family-name"
            class="{{ $errors->has('author') ? 'outline-red-500' : 'outline-black/10' }} block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"/>
            </div>
            @error('author')
        <span class="text-red-500">{{ $message }}</span>
        @enderror
        </div>


        <div>
        <label for="content" class="block text-sm/6 font-medium text-black">your comment</label>
        <div class="mt-2">
            <textarea name="content"  id="content" rows="4"
            class=" {{ $errors->has('content') ? 'outline-red-500' : 'outline-black/10' }} block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ old('content') }}</textarea>
        </div>
        @error('content')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>


<div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/blog" class="text-sm/6 font-semibold text-black,">Cancel</a>
    <button type="submit"
    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-black focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
add Comment
                </button>
            </div>
        </form>
    </div>
</x-layout>
