@extends('layouts.navigations')

@section('content')
  
    <main class="container mx-auto ">

          <div class=" mt-16 auto px-24 mb-20">
            <h1 class="text-4xl">Templates</h1>
            <a class="bg-blue-600 text-white p-1" href="{{route('templates.create')}}">Add Template</a>
              <div class=" flex flex-wrap mb-20">
                @foreach($templates as $template)

                    <div class="max-w-xs rounded overflow-hidden shadow-lg mx-4  mt-10 bg-white">
                      <img class=" h-48 w-full object-cover object-right-top" src="{{asset('/storage/'.$template->image)}}" alt="{{ $template->name }}">
                      <div class="px-6 py-4 min-h-10">
                        <div class="font-bold text-xl mb-2">{{ $template->name }}</div>
                          <p class="text-gray-700 text-base">
                            {{$template->description }}
                          </p>
                        </div>
                        <div class="px-6 py-4 flex">
                          <a class=" bg-teal-400 text-teal-100 px-4 py-1 rounded" href="{{ route('templates.edit', $template->id )}}">Edit</a>
                        </div>
                    </div>
                @endforeach
              </div>
              {{ $templates->links()}}

          </div>
          <div class="mt-4 auto px-24 mb-20 ">
            <h1 class="text-xl">Category</h1>
            <ul class="mt-4">
            @foreach($categories as $category)
              <li class="my-4">{{ $category->name }} <a class=" px-4 py-2 bg-orange-500 text-white" href="{{ route('categories.edit', $category->id )}}">Edit</a> <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="" type="submit">Delete</button></li>
              </form>
            @endforeach
            </ul>
            <a class="bg-blue-600 text-white p-1 my-4" href="{{route('categories.create')}}">Add Category</a>
          </div>
     
    </main>

@endsection


@section('js')

@stop