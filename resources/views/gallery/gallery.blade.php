<x-app-layout>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery') }} 
        </h2>
    </x-slot>
    

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if(count($categories))
                    @foreach ($categories as $item)
                        <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('gallery.show', ['id' => $item->id]) }}">{{$item->category_name}}</a>
                        </li>
                        </ul>
                    @endforeach
                @else
                    <p>Category Not Found ! </p>
                @endif 
            </div>
        </div>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @isset($photoget)
                    @foreach($photoget as $item)
                        <div style="display:inline-block;">
                            <ul>
                                <li><img src="{{ asset('uploads/'.$item->photo) }}" width="350px"></li>
                            </ul>
                        </div>
                    @endforeach
                @else
                    <p>Data Not Found ! </p>
                @endisset
            </div>
        </div>
    </div>
</div>
</x-app-layout>