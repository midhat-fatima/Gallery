<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(count($categories))
                        @foreach ($categories as $item)
                            <ul>
                                <a href="{{ route('gallery.show', ['id' => $item->id]) }}">{{$item->category_name}}</a>
                                <!-- <li>Content : {{$item->content}}<li> -->
                            </ul>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
        @isset($photoget) 
            @foreach($photoget as $item)
                <ul>
                <li><img src="{{ asset('uploads/'.$item->photo) }}" ></li>
                            <!-- <li>Content : {{$item->content}}<li> -->
                </ul>
            @endforeach
        @endisset
</x-app-layout>