<x-layout>
    <div>
        <h1>{{ $brand->brand_name }}</h1>

        <a class="btn btn-secondary" href="/brands/{{ $brand->id }}/edit">
            Edit <i class="fa-solid fa-pencil"></i>
        </a>

        <form method="POST" action="/brands/{{ $brand->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete <i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</x-layout>
