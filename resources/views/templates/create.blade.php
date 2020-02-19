
@extends('layouts.navigations')

@section('content')
<div class="container mx-auto mt-40 pb-24">
    <div class="">


    <form method="POST" action="{{ isset($template) ? route('templates.update', $template->id) : route('templates.store')}}" class=" bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
        @csrf
        @if(isset($template))
            @method('PUT')
        @endif
        <div class="mb-4">
            <h1 class=" text-3xl block text-gray-700 text-sm font-bold mb-2" >
               {{ isset($template) ? 'Edit' : 'Create'}} Template
            </h1>
            <label class=" font-bold text-lg text-gray-600"  for="name">Name</label>
            <input class="shadow appearance-none border rounded w-full  px-3 py-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" name="name" id="name" type="text" placeholder="name" value="{{ isset($template) ? $template->name : '' }}">            
            <label class=" font-bold text-lg text-gray-600" for="description">Description</label>
            <input class="shadow appearance-none border rounded w-full  px-3 py-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" name="description" id="description" type="text" placeholder="description" value="{{ isset($template) ? $template->description : '' }}">
            <label class=" font-bold text-lg text-gray-600" for="content">Content</label>
            <textarea class="shadow appearance-none border rounded w-full  px-3 py-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" name="content" id="content" cols="30" rows="10" placeholder="content" >{{ isset($template) ? $template->content : '' }}</textarea>
            @if(isset($template->image))
                <label class=" font-bold text-lg text-gray-600" for="image">Image</label>
                <img class="h-48 w-auto" name="image" src="{{asset('/storage/'.$template->image)}}" alt="{{ $template->name }}">
            @endif
            <input class="shadow appearance-none border rounded w-full  px-3 py-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4 mt-4" name="image" id="image" type="file" placeholder="image"  value="{{ isset($template) ? $template->image : '' }}" >
            @if($errors->any())
                <ul>
                @foreach($errors->all() as $error)

                    <li class=" text-red-600"> {{ $error }}</li>

                @endforeach
                
                </ul>
            @endif
        </div>

        <div class="flex items-center  justify-start">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
            {{ isset($template) ? 'Edit' : 'Create'}} Template
            </button>

            <a class="bg-red-600 ml-8 px-4 py-2 text-white rounded" href="{{route('admin.index')}}">Cancel</a>
        </div>
    </form>

    <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
    </p>


    </div>
</div>
@endsection

@section('js')
    import Dropzone from 'dropzone';
@endsection