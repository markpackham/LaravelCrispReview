@props(['brand'])

<x-card>
    <div class="col-6 mt-1">
        <h3 class="text-lg"><a href="brands/{{ $brand->id }}">{{ $brand->brand_name }}</a>
        </h3>
        <h4 name="brand_company_name">{{ $brand->company->company_name }}</h4>
    </div>
</x-card>
