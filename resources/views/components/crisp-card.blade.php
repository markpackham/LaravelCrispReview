@props(['crisp'])

<x-card>
    <div class="col-6 mt-1">
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
</x-card>
