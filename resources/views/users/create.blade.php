<x-layout>
    <h1>Register</h1>
    <form method="POST" action="/">
        @csrf
        <div class="mb-6">
            <label for="name" class="text-lg mb-2">Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                value="{{ old('name') }}" />

            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="text-lg mb-2">Email</label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ old('email') }}" />

            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="text-lg mb-2">Password</label>
            <input type="password" class="border border-gray-200 rounded p-2" name="password"
                value="{{ old('password') }}" />

            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password2" class="text-lg mb-2">Confirm Password</label>
            <input type="password" class="border border-gray-200 rounded p-2" name="password_confirmation"
                value="{{ old('password_confirmation') }}" />

            @error('password_confirmation')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="btn btn-success">Register</button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="/login" class="text-laravel">Login</a>
            </p>
        </div>
    </form>
</x-layout>
