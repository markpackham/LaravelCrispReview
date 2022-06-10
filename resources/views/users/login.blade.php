<x-layout>
    <h1>Login</h1>
    <form method="POST" action="/users/authenticate">
        @csrf
        <div class="mb-6">
            <label for="email" class="text-lg mb-2">Email (demoUser@email.com)</label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ old('email') }}" />

            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="text-lg mb-2">Password (demoU!12345)</label>
            <input type="password" class="border border-gray-200 rounded p-2" name="password"
                value="{{ old('password') }}" />

            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>
</x-layout>
