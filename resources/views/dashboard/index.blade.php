@extends('layouts.app')

@section('title', 'Meopweb | Dashboard')

@section('page_title', 'Meow')

@section('content')
    <section class="section">
        <x-card>

            <x-card.body>
                <x-slot name="title">Welcome to Malaysia</x-slot>
                <x-slot name="subtitle">a beautiful country</x-slot>
            </x-card.body>
            <img src="https://picsum.photos/536/354" />
            <x-card.body>
                <x-card.text>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima temporibus amet, officia corporis
                    impedit odio, ullam voluptates veniam commodi modi voluptatibus nulla? Eligendi quas et similique dicta
                    magni officiis aliquid!
                    Sequi deserunt sunt sed quidem ea modi reiciendis? Sint omnis explicabo consectetur cum autem alias
                    distinctio aperiam sapiente odit maiores dolores, facere neque excepturi, repudiandae, animi
                    perspiciatis ullam nemo eum!
                    Doloremque eligendi eos deserunt similique quisquam atque ab recusandae, doloribus aliquid quae.
                    Reprehenderit eligendi voluptatibus obcaecati, est voluptatem error laboriosam fugiat dolorem itaque
                    expedita at rerum quam tempore ea doloremque.
                </x-card.text>
                <x-card.link>Read More</x-card.link>
            </x-card.body>
            <x-slot name="footer">
                <h4>Footer</h4>
            </x-slot>
        </x-card>
        <div class="card">
            <div class="card-header">
                <h4>Welcome</h4>
            </div>

            <div class="card-body">
                <x-alert>Hello</x-alert>
                <x-button>Click Here!</x-button>
                Course Registration System dashboard.
            </div>
        </div>
        <x-card>
            <x-slot name="header">Questionaire</x-slot>
            <x-card.body>
                <div class="row">
                    <x-form.input name="name" label="Name" class="col-4" required enable-old-support />
                    <x-form.input type="email" name="email" label="Email" class="col-4" />
                    <x-form.input type="password" name="password" label="Password" class="col-4" />

                </div>
                <x-form.input type="file" name="file" label="File" />
                <x-form.select title="Select" description="Select an option" class="text-capitalize" name="select"
                    label="Select">
                    <x-form.options :options="[
            'option 1' => 'Option 1',
            'option 2' => 'Option 2 (disabled)',
            'option 3' => 'Option 3 (selected)',
        ]" :disabled="['option 2']" :selected="['option 3']"
                        emptyOption="Select an option"></x-form.options>
                </x-form.select>
                <x-form.radio name="radio" label="Radio" :options="[
            'option 1' => 'Option 1',
            'option 2' => 'Option 2 (disabled)',
            'option 3' => 'Option 3 (checked)',
        ]" :disabled="['option 2']" required></x-form.radio>
                <x-form.checklist name="checklist" label="checklist" :options="[
            'option 1' => 'Option 1',
            'option 2' => 'Option 2 (disabled)',
            'option 3' => 'Option 3 (checked)',
        ]" :disabled="['option 2']" :checked="['option 3']" required></x-form.checklist>
                <x-form.textarea name="textarea" label="Textarea" rows="3" required></x-form.textarea>
                <x-button type="submit">Submit</x-button>
            </x-card.body>
            <x-card.body>
                <x-card.text>
                    <x-card.link>Read More</x-card.link>
                </x-card.text>
            </x-card.body>
        </x-card>

        <x-card>
            <x-slot name="header">Datatables</x-slot>
            <x-card.body>
                <x-datatable :heads="['name', 'email', 'age']" :config="[
            'data' => [
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
                ['name' => 'John Doe', 'email' => 'l7VpI@example.com', 'age' => 30],
                ['name' => 'Jane Doe', 'email' => 'H5oMw@example.com', 'age' => 25],
                ['name' => 'Bob Smith', 'email' => 'B4oWl@example.com', 'age' => 35],
            ],
            'buttons' => buttonDatatables(['pageLength', 'csv', 'excel', 'pdf', 'print'], 'Test Export'),
            'order' => [[0, 0, 0]],
            'columns' => [
                ['data' => '', 'title' => '', 'orderable' => false, 'searchable' => false],
                ['data' => 'name', 'title' => 'Name'],
                ['data' => 'email', 'title' => 'Email'],
                ['data' => 'age', 'title' => 'Age'],
            ]
        ]" bordered select paging>
                </x-datatable>
            </x-card.body>
        </x-card>

        <x-card>
            <x-slot name="header">Toastify</x-slot>
            <x-card.body>
                <x-card.text>
                    <x-button id="toastify">Click Here</x-button>
                    <x-toastify id="toastify" :config="[
            'title' => 'Success',
            'message' => 'This is a success message',
            'type' => 'success'
        ]" />

                </x-card.text>
            </x-card.body>
        </x-card>

        <x-card>
            <x-slot name="header">Choices</x-slot>
            <x-card.body>
                <x-card.text>
                    <x-form.select title="Select" description="Select an option" class="text-capitalize" name="select"
                        label="Select">
                        <x-form.options :options="[
            'option 1' => 'Option 1',
            'option 2' => 'Option 2 (disabled)',
            'option 3' => 'Option 3 (selected)',
            'option 4' => 'Option 4 (selected)',
            'option 5' => 'Option 5 (disabled)',
        ]" :disabled="['option 2']" :selected="['option 3']" />
                    </x-form.select>
                </x-card.text>
            </x-card.body>
        </x-card>
    </section>
@endsection