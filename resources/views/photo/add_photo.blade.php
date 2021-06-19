<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Photo') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif	

    {!! Form::open(array('url' => route('photo.store'), 'method' => 'post', 'enctype' =>"multipart/form-data" )) !!}	
            {!! Form::label('photo', 'Photo :') !!}   <br>   <br>
			    {!! Form::file('photo') !!}   <br>   <br>
            {!! Form::label('category_id', 'Category :') !!}   <br>   <br>
                {!! Form::select('category_id', $add_photo) !!} <br>   <br>
			{!! Form::submit('Add New Photo') !!}
	{!! Form::close() !!}

</x-app-layout>