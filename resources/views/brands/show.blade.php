<x-layout>
    <div>
        <h1>{{ $brand->brand_name }}</h1>
        <h4 name="brand_company_name">{{ $brand->company->company_name }}</h4>

        <a class="btn btn-secondary" href="{{ route('brands') }}">
            Back <i class="fa-solid fa-arrow-left"></i>
        </a>

        @auth
            <a class="btn btn-primary" href="/brands/{{ $brand->id }}/edit">
                Edit <i class="fa-solid fa-pencil"></i>
            </a>

            <form method="POST" action="/brands/{{ $brand->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete <i class="fa-solid fa-trash"></i></button>
            </form>
        @endauth
    </div>
</x-layout>
