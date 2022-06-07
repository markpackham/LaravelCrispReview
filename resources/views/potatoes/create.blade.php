<x-layout>
    <h1>Create Potato</h1>
    <form method="POST" action="{{ route('potatoes') }}">
        @csrf
        <div class="mb-6">
            <label for="potato_name" class="inline-block text-lg mb-2">Potato Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="potato_name"
                value="{{ old('potato_name') }}" />
            @error('potato_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="country_name" class="inline-block text-lg mb-2">Country Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="country_name"
                value="{{ old('country_name') }}" />
            @error('country_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Create Potato
            </button>
        </div>
    </form>
</x-layout>
