<x-layout :title="$pageTitle">
    <form method="POST" action="/blog/{{ $post->id }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $post->id }}" />
<div class="space-y-12">
    <div class="border-b border-black/10 pb-12">
    <h2 class="text-base/7 font-semibold text-black">Edit post : {{ $post->title }}</h2>
    <p class="mt-1 text-sm/6 text-gray-400">Use this form to update post data form the blog.</p>


    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
        <label for="title" class="block text-sm/6 font-medium text-black">Title</label>
        <div class="mt-2">
            <input type="text" value="{{ old('title', $post->title ) }}" name="title" id="title" autocomplete="given-name"
            class="{{ $errors->has('title') ? 'outline-red-500' : 'outline-black/10' }} block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
        </div>
        @error('title')
        <span class="text-red-500">{{ $message }}</span>
        @enderror
        </div>

        </div>



        <div class="sm:col-span-3">
        <label for="author" class="block text-sm/6 font-medium text-black">Author</label>
        <div class="mt-2">
            <input type="text" value="{{ old('author', $post->author )  }}" name="author" id="author" autocomplete="family-name"
            class="{{ $errors->has('author') ? 'outline-red-500' : 'outline-black/10' }} block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"/>
            </div>
            @error('author')
        <span class="text-red-500">{{ $message }}</span>
        @enderror
        </div>


        <div class="col-span-full">
        <label for="body" class="block text-sm/6 font-medium text-black">Content</label>
        <div class="mt-2">
            <textarea name="body"  id="body" rows="3"
            class=" {{ $errors->has('body') ? 'outline-red-500' : 'outline-black/10' }} block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
{{ old('body', $post->body )  }}
        </textarea>
        </div>
        <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences body the article.</p>
    @error('body')
        <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

        <div class="flex gap-3">
            <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                <input id="published" type="checkbox" value="1" {{ old('published') || (!old() && $post->published) ? 'checked' : ''}} name="published"  aria-describedby="published-description" class="col-start-1 row-start-1 appearance-none rounded-sm border border-black/10 bg-black/5 checked:border-indigo-500 checked:bg-indigo-500 indeterminate:border-indigo-500 indeterminate:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-black/5 disabled:bg-black/10 disabled:checked:bg-black/10 forced-colors:appearance-auto" />
                <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-black group-has-disabled:stroke-black/25">
                    <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                    <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
                </svg>
                </div>
            </div>
        </div>



        <div class="col-span-full">
        <div class="flex gap-3">
            <div class="text-sm/6">
                <label for="published" class="font-medium text-black">is published ?</label>
                <p id="published-description" class="text-gray-400">do you want it published or saved as draft.</p>
            </div>
        </div>
        </div>





<div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/blog" class="text-sm/6 font-semibold text-black,">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-black focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </div>

</form>
</x-layout>
