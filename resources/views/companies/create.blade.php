<x-layout>
    <x-setting heading="Add New Employee">
        <p>
            <a href="/companies" class="btn btn-success">Back To Companies</a>
        </p>
        <form method="POST" action="/companies/create" enctype="multipart/form-data">
            @csrf  
                <x-form.input name="name" required/>
                <x-form.input name="email" required/>
                <x-form.input name="logo" required/>
                <x-form.input name="website" required/>
                <x-form.field>
                    <x-form.error name="company"/>
                </x-form.field>
                <x-form.button>Save</x-form.button>
        </form>
    </x-setting>
</x-layout>