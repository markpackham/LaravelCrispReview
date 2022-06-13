<x-layout>
    <h1>Crisps</h1>
    @include('partials._crisp_search')
    <div>
        @if (count($crisps) > 0)
            <ul>
                @foreach ($crisps as $crisp)
                    <div class="mt-1">
                        <h3><a href="crisps/{{ $crisp->id }}">{{ $crisp->crisp_name }}</a></h3>
                        <li>Weight: {{ $crisp->crisp_weight }}g</li>
                        <p>Review: {{ $crisp->crisp_review }}</p>
                        <li>Score: {{ $crisp->crisp_review_score }}/5</li>
                        <img class="img-thumbnail mt-2"
                            src="{{ $crisp->crisp_image ? asset('storage/' . $crisp->crisp_image) : asset('/images/no-image.png') }}"
                            alt="{{ $crisp->crisp_name }} crisp_image" />
                        <li>Brand: {{ $crisp->brand->brand_name }}</li>
                        <li>Flavour: {{ $crisp->flavour->flavour_name }}</li>
                    </div>
                @endforeach
            </ul>
        @else
            <p>No crisps</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $crisps->links() }}
    </div>
</x-layout>
