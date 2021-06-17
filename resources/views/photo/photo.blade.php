<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Photo') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <a style="background-color:green; color:white; padding:10px; text-decoration:none; border-radius:10px; position:absolute; top:150px; right:430px;"href="{{route('photo.create')}} ">Add New photo</a>
                
                @if(count($photo))
                    @foreach ($photo as $item)
                        <ul>
                            <li>Id : {{$item->id}}<li>
                            <li>Image : <img src="{{$item->photo}}" width="100px" height="100pc"><li>
                            <!-- <li>Content : {{$item->content}}<li> -->
                            <li>{!! Form::open(array('url'=> route('photo.edit', ['photo'=> $item->id]), 'method' => 'get', 'enctype' =>"multipart/form-data")) !!}
                                    {!! Form::submit('Edit', array('style' => 'padding:5px; background-color:grey; color:white; border-radius:10px;')) !!}
                                    {!! Form::close() !!}

                                {!! Form::open(array('url'=> route('photo.destroy',['photo'=> $item->id]), 'method' => 'delete',  'onclick' => "return confirm('Post Related To This Will Be Deleted?')")) !!}
                                    {!! Form::submit('Delete',array('style' => 'padding:5px; background-color:red; color:white; border-radius:10px;')) !!}
                                    {!! Form::close() !!}</li>
                            <br><hr><br>
                        </ul>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>