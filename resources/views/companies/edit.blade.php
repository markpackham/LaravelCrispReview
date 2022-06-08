<x-layout>
    <h1>Edit Company</h1>
    <form method="POST" action="/companies/{{ $company->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input class="form-control" type="text" name="company_name" value="{{ $company->company_name }}" />
            @error('company_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_address">Company Address</label>
            <input class="form-control" type="text" name="company_address" value="{{ $company->company_address }}" />
            @error('company_address')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_phone">Company Phone</label>
            <input class="form-control" type="text" name="company_phone" value="{{ $company->company_phone }}" />
            @error('company_phone')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_website">Company Website</label>
            <input class="form-control" type="text" name="company_website"
                value="{{ $company->company_website }}" />
            @error('company_website')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-success">
            Update Company
        </button>
    </form>
</x-layout>
