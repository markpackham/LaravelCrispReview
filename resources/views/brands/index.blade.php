<x-layout>
    <h1>Brands</h1>
    @include('partials._brand_search')
    <div>
        @if (count($brands) > 0)
            <ul class="index-list row align-items-start">
                @foreach ($brands as $brand)
                    <x-brand-card :brand="$brand" />
                @endforeach
            </ul>
        @else
            <p>No brands</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $brands->links() }}
    </div>
</x-layout>
