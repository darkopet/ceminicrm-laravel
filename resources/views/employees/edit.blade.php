<x-layout>
    <x-setting :heading="'Edit Employee Data: ' . $employee->firstName">
        <form method="POST" action="/employees/{{ $employee->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="firstName" :value="old('firstName', $employee->firstName)" required />
            <x-form.input name="lastName" :value="old('lastName', $employee->lastName)" required />
            <x-form.input name="company_id" :value="old('company_id', $employee->company_id)" required />
            <x-form.input name="email" :value="old('email', $employee->email)" required />
            <x-form.input name="phone" :value="old('phone', $employee->phone)" required />

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