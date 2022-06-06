<x-layout>
    <h1 class="text-3xl">Brands</h1>
    <div>
        @if (count($brands) > 0)
            @foreach ($brands as $brand)
                <ul>
                    <li>{{ $brand->brand_name }}</li>
                </ul>
            @endforeach
        @else
            <p>No brands</p>
        @endif
    </div>
</x-layout>
