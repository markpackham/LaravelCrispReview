<x-layout>
    <div>
        <h1>{{ $company->company_name }}</h1>
        <ul>
            <li>{{ $company->company_address }}</li>
            <li>{{ $company->company_phone }}</li>
            <li><a target="_blank" href="{{ $company->company_website }}">{{ $company->company_website }}</a>
            </li>
        </ul>

        <a class="btn btn-primary" href="/companies/{{ $company->id }}/edit">
            Edit <i class="fa-solid fa-pencil"></i>
        </a>

        <a class="btn btn-secondary" href="{{ route('companies') }}">
            Back <i class="fa-solid fa-arrow-left"></i>
        </a>

        <form method="POST" action="/companies/{{ $company->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">Delete <i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</x-layout>
