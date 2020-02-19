
@extends('layouts.navigations')

@section('content')
<div class="container mx-auto">
    <div class="">


    <form method="POST" action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @if(isset($category))
            @method('PUT')
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
               {{ isset($category) ? 'Edit' : 'Create'}} Category
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="name" value="{{ isset($category) ? $category->name : '' }}">
 
            @if($errors->any())
                <ul>
                @foreach($errors->all() as $error)

                    <li class=" text-red-600"> {{ $error }}</li>

                @endforeach
                
                </ul>
            @endif
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
            {{ isset($category) ? 'Edit' : 'Create'}} Category
            </button>
        </div>
    </form>

    <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
    </p>


    </div>
</div>
@endsection

