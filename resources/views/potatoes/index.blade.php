<x-layout>
    <h1>Potatoes</h1>
    @include('partials._potato_search')
    <div>
        @if (count($potatoes) > 0)
            <ul class="index-list row align-items-start">
                @foreach ($potatoes as $potato)
                    <x-potato-card-item :potato="$potato" />
                @endforeach
            </ul>
        @else
            <p>No potatoes</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $potatoes->links() }}
    </div>
</x-layout>
