<x-layout>
    <h1>Companies</h1>
    @include('partials._company_search')
    <div>
        @if (count($companies) > 0)
            <ul class="index-list row align-items-start">
                @foreach ($companies as $company)
                    <x-company-card :company="$company" />
                @endforeach
            </ul>
        @else
            <p>No companies</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $companies->links() }}
    </div>
</x-layout>
