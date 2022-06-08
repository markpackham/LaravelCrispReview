<x-layout>
    <h1>Create Company</h1>
    <form method="POST" action="{{ route('companies') }}">
        @csrf
        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input class="form-control" type="text" name="company_name" value="{{ old('company_name') }}" />
            @error('company_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_address">Company Address</label>
            <input class="form-control" type="text" name="company_address" value="{{ old('company_address') }}" />
            @error('company_address')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_phone">Company Phone</label>
            <input class="form-control" type="text" name="company_phone" value="{{ old('company_phone') }}" />
            @error('company_phone')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="company_website">Company Website</label>
            <input class="form-control" type="text" name="company_website" value="{{ old('company_website') }}" />
            @error('company_website')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-2">
            Create Company
        </button>
    </form>
</x-layout>
