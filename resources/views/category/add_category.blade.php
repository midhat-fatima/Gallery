<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('categories.store'), 'method' => 'post')) !!}	
            {!! Form::label('category_name', 'categories :') !!}   <br>   <br>
			    {!! Form::text('category_name') !!}   <br>   <br>
			{!! Form::submit('Add New categories') !!}
	{!! Form::close() !!}

</x-app-layout>