@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="sticky-top">
        <h4 class="text-success">
            {{ session('message') }}
        </h4>
    </div>
@endif
