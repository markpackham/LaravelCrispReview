<x-layout>
    <h1>Create Brand</h1>
    <form method="POST" action="{{ route('brands') }}">
        @csrf
        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input class="form-control" type="text" name="brand_name" value="{{ old('brand_name') }}" />
            @error('brand_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_id">Company Name</label>
            <select class="form-control" name="company_id">
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                @endforeach
            </select>
            @error('company_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-2">
            Create Flavour
        </button>
    </form>
</x-layout>
