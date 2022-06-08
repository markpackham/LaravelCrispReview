<x-layout>
    <h1>Brands</h1>
    <div>
        @if (count($brands) > 0)
            @foreach ($brands as $brand)
                <h3 class="text-lg"><a href="brands/{{ $brand->id }}">{{ $brand->brand_name }}</a></h3>
            @endforeach
        @else
            <p>No brands</p>
        @endif
    </div>
</x-layout>
