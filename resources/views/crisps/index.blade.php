<x-layout>
    <h1>Crisps</h1>
    <div>
        @if (count($crisps) > 0)
            @foreach ($crisps as $crisp)
                <ul>
                    <div class="mt-1">
                        <li><a href="crisps/{{ $crisp->id }}">{{ $crisp->crisp_name }}</a></li>
                        <li>Weight: {{ $crisp->crisp_weight }}g</li>
                        <p>{{ $crisp->crisp_review }}</p>
                        <li>Score: {{ $crisp->crisp_score }}/5</li>
                    </div>
                </ul>
            @endforeach
        @else
            <p>No crisps</p>
        @endif
    </div>
</x-layout>
