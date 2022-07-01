<x-layout>
    <h1>Edit Brand</h1>
    <form method="POST" action="/brands/{{ $brand->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input class="form-control" type="text" name="brand_name" value="{{ $brand->brand_name }}" />
            @error('brand_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_id">Company Name</label>
            <select class="form-control" name="company_id">
                <option selected value="{{ $brand->company->id }}">{{ $brand->company->company_name }}</option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                @endforeach
            </select>
            @error('company_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-success mt-2">
            Update Brand
        </button>
        <a class="btn btn-secondary mt-2" href="{{ route('flavours') }}">
            Back <i class="fa-solid fa-arrow-left"></i>
        </a>
    </form>
</x-layout>
