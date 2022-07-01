@props(['company'])

<x-card>
    <div class="col-6 mt-1">
        <h3 class="text-lg"><a href="companies/{{ $company->id }}">{{ $company->company_name }}</a></h3>
        <li>{{ $company->company_address }}</li>
        <li>{{ $company->company_phone }}</li>
        <li>{{ $company->company_website }}</li>
    </div>
</x-card>
