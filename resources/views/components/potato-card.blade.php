@props(['potato'])

<x-card>
    <div class="col-4 mt-1">
        <a href="potatoes/{{ $potato->id }}">
            {{ $potato->potato_name }}</a> : {{ $potato->potato_country }}
    </div>
</x-card>
