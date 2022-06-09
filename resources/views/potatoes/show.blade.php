<x-layout>
    <div>
        <h1>{{ $potato->potato_name }}</h1>
        <h3> {{ $potato->potato_country }}</h3>

        <a class="btn btn-secondary" href="/potatoes/{{ $potato->id }}/edit">
            Edit <i class="fa-solid fa-pencil"></i>
        </a>

        <a class="btn btn-secondary" href="{{ route('potatoes') }}">
            Back <i class="fa-solid fa-arrow-left"></i>
        </a>

        <form method="POST" action="/potatoes/{{ $potato->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">Delete <i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</x-layout>
