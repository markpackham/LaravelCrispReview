<x-layout>
    <h1>Companies</h1>
    @include('partials._company_search')
    <div>
        @if (count($companies) > 0)
            <ul class="index-list row align-items-start">
                @foreach ($companies as $company)
                    <div class="col-6 mt-1">
                        <h3 class="text-lg"><a
                                href="companies/{{ $company->id }}">{{ $company->company_name }}</a></h3>
                        <li>{{ $company->company_address }}</li>
                        <li>{{ $company->company_phone }}</li>
                        <li>{{ $company->company_website }}</li>
                    </div>
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
