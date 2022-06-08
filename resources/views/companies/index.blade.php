<x-layout>
    <h1>Companies</h1>
    <div>
        @if (count($companies) > 0)
            @foreach ($companies as $company)
                <ul>
                    <div class="mt-3">
                        <h3 class="text-lg"><a
                                href="companies/{{ $company->id }}">{{ $company->company_name }}</a></h3>
                        <li>{{ $company->company_address }}</li>
                        <li>{{ $company->company_phone }}</li>
                        <li>{{ $company->company_website }}</li>
                    </div>
                </ul>
            @endforeach
        @else
            <p>No companies</p>
        @endif
    </div>
</x-layout>
