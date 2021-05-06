<div class="container grid grid-cols-1 gap-1 mx-auto mt-4 md:grid-cols-2">
    @foreach ($publications as $publication)
    <a href="{{ route('publication', $publication->slug) }}">
        <div class="flex">
            <div class="h-32 bg-blue-900 rounded-lg rounded-r-none min-w-28 max-w-28">
                <img class="object-cover w-full h-full rounded-lg rounded-r-none" 
                src="@foreach ($publication->image as $image)
                @if ($image->image)
                    {{ $image->image }}
                    @break
                @endif
            @endforeach" alt="">
            <div class="relative right-0 inline-block font-medium bg-pink-300 rounded-tr-lg rounded-bl-lg bottom-6 bg-opacity-30 ">
            {{ $publication->prices }}
            </div>
            </div>
            <div class="w-full h-32 leading-tight bg-gray-700 rounded-lg rounded-l-none">
                <div class="overflow-hidden text-lg font-medium leading-tight bg-pink-300 rounded-tr-lg h-1/3">
                    {{ $publication->title }}
                </div>
                <div class="overflow-hidden bg-pink-100 rounded-br-lg h-2/3">
                    {{ $publication->excerpt }}
                </div>
            </div>
        </div>
    </a>
    @endforeach
    <div class="text-white">
        {{ $publications->links() }}
    </div>
</div>
