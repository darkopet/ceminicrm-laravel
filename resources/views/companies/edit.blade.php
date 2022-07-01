<x-layout>
    <x-setting :heading="'Edit Company Data: ' . $company->name">
        <form method="POST" action="/companies/{{ $company->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="old('name', $company->name)" required />
            <x-form.input name="email" :value="old('email', $company->email)" required />
            <x-form.input name="logo" :value="old('logo', $company->logo)" required />
            <x-form.input name="website" :value="old('website', $company->website)" required />

            <!-- <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img src="/images/illustration-1.png" alt="" class="rounded-xl">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100"> -->
            <!-- </div> -->

            <!-- <x-form.textarea name="excerpt" required>{{ old('excerpt', $post->excerpt) }}</x-form.textarea> -->
            <!-- <x-form.textarea name="body" required>{{ old('body', $post->body) }}</x-form.textarea> -->

            <!-- <x-form.field>
                <x-form.label name="category"/>

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                        >          
                                {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </x-form.field> -->

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>