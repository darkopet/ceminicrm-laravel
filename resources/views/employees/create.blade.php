<x-layout>
    <x-setting heading="Add New Employee">
        <p>
            <a href="/employees" class="btn btn-success">Back To Employees</a>
        </p>
        <form method="POST" action="/employees/create" enctype="multipart/form-data">
            @csrf  
                <x-form.input name="firstName" required/>
                <x-form.input name="lastName" required/>
                <x-form.input name="company_id" required/>
                <x-form.input name="email" required/>
                <x-form.input name="phone" required/>
                <x-form.field>
                    <x-form.error name="employee"/>
                </x-form.field>
                <x-form.button>Save</x-form.button>
        </form>
    </x-setting>
</x-layout>