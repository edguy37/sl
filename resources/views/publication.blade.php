@extends('layouts.web')

@section('content')
    <div class="text-center text-gray-100">
        <h1 class="text-4xl ">
            {{ $publication->title }}
        </h1>
        {{ $publication->description }}
        @foreach ($publication->image as $image)
        <img class="w-2/3 mx-auto" src="{{ $image->image }}" alt="">
        @endforeach
        {{ $publication->prices }}
    </div>
@endsection