<x-layout>
    <div>
        <h1>{{ $potato->potato_name }}</h1>
        <h3> {{ $potato->potato_country }}</h3>

        <a class="btn btn-secondary" href="/potatoes/{{ $potato->id }}/edit">
            Edit <i class="fa-solid fa-pencil"></i>
        </a>

        <form method="POST" action="/potatoes/{{ $potato->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete <i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</x-layout>
