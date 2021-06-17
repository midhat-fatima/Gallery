<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Photo') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('photo.update', ['photo' => $photo->id]), 'method' => 'put', 'enctype' =>"multipart/form-data" )) !!}	

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif	

        {!! Form::label('photo', 'photo :') !!}	   <br>   <br>
		    {!! Form::file('photo') !!}   <br>   <br>
        {!! Form::label('category_id', 'Category :') !!}   <br>   <br>
            {!! Form::select('category_id', $edit_photo) !!} <br>   <br>
        {!! Form::submit('Edit') !!}

	{!! Form::close() !!}

</x-app-layout>