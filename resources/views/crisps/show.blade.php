<x-layout>
    <div>
        <h1>{{ $crisp->crisp_name }}</h1>
        <p>Weight: {{ $crisp->crisp_weight }}g</p>
        <p>{{ $crisp->crisp_review }}</p>
        <p>Review Score: {{ $crisp_crisp_score }}/5</p>

        <img class="mt-2"
            src="{{ $crisp->crisp_image ? asset('storage/' . $crisp->crisp_image) : asset('/images/no-image.png') }}"
            alt="{{ $crisp->crisp_name }} crisp_image" />

        <a class="btn btn-secondary mt-2" href="/crisps/{{ $crisp->id }}/edit">
            Edit <i class="fa-solid fa-pencil"></i>
        </a>

        <form method="POST" action="/crisps/{{ $crisp->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">Delete <i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</x-layout>
