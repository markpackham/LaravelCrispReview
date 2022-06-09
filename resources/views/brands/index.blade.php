<x-layout>
    <h1>Brands</h1>
    @include('partials._brand_search')
    <div>
        @if (count($brands) > 0)
            @foreach ($brands as $brand)
                <h3 class="text-lg"><a href="brands/{{ $brand->id }}">{{ $brand->brand_name }}</a></h3>
                <label for="brand_company_name">Company Name</label>
                <h4 name="brand_company_name">{{ $brand->company->company_name }}</h4>
            @endforeach
        @else
            <p>No brands</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $brands->links() }}
    </div>
</x-layout>
