<x-layout>
    <h1>Crisps</h1>
    @include('partials._crisp_search')
    <div>
        @if (count($crisps) > 0)
            @foreach ($crisps as $crisp)
                <ul>
                    <div class="mt-1">
                        <li><a href="crisps/{{ $crisp->id }}">{{ $crisp->crisp_name }}</a></li>
                        <li>Weight: {{ $crisp->crisp_weight }}g</li>
                        <p>{{ $crisp->crisp_review }}</p>
                        <li>Score: {{ $crisp->crisp_score }}/5</li>
                        <img class="img-thumbnail mt-2"
                            src="{{ $crisp->crisp_image ? asset('storage/' . $crisp->crisp_image) : asset('/images/no-image.png') }}"
                            alt="{{ $crisp->crisp_name }} crisp_image" />
                    </div>
                </ul>
            @endforeach
        @else
            <p>No crisps</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $crisps->links() }}
    </div>
</x-layout>
