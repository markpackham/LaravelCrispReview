@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="sticky-top">
        <p class="text-danger">
            {{ session('message') }}
        </p>
    </div>
@endif
