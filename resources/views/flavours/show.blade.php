<x-layout>
    <div>
        <h1>{{ $flavour->flavour_name }}</h1>

        <a class="btn btn-secondary" href="/flavours/{{ $flavour->id }}/edit">
            Edit <i class="fa-solid fa-pencil"></i>
        </a>

        <a class="btn btn-secondary" href="{{ route('flavours') }}">
            Back <i class="fa-solid fa-arrow-left"></i>
        </a>

        <form method="POST" action="/flavours/{{ $flavour->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">Delete <i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</x-layout>
