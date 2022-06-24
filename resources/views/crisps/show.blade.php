<x-layout>
    <div>
        <h1>{{ $crisp->crisp_name }}</h1>
        <p>Weight: {{ $crisp->crisp_weight }}g</p>
        <p>{{ $crisp->crisp_review }}</p>
        <p>Review Score: {{ $crisp->crisp_review_score }}/5</p>
        <p>Brand: {{ $crisp->brand->brand_name }}</p>
        <p>Flavour: {{ $crisp->flavour->flavour_name }}</p>

        <div class="container">
            <img class="mt-2"
                src="{{ $crisp->crisp_image ? asset('storage/' . $crisp->crisp_image) : asset('/images/no-image.png') }}"
                alt="{{ $crisp->crisp_name }} crisp_image" />
        </div>

        <a class="btn btn-secondary" href="{{ route('crisps') }}">
            Back <i class="fa-solid fa-arrow-left"></i>
        </a>

        @auth
            <a class="btn btn-secondary" href="/crisps/{{ $crisp->id }}/edit">
                Edit <i class="fa-solid fa-pencil"></i>
            </a>

            <form method="POST" action="/crisps/{{ $crisp->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete <i class="fa-solid fa-trash"></i></button>
            </form>
        @endauth
    </div>
</x-layout>
