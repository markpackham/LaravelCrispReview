<x-layout>
    <h1>Crisps</h1>
    @include('partials._crisp_search')
    <div>
        @if (count($crisps) > 0)
            <ul class="index-list row align-items-start">
                @foreach ($crisps as $crisp)
                    <x-crisp-card :crisp="$crisp" />
                @endforeach
            </ul>
        @else
            <p>No crisps</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $crisps->links() }}
    </div>
</x-layout>
