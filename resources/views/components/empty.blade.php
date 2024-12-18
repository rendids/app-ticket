<div class="text-center py-10">
    <img src="{{ asset('empty.svg') }}" alt="Empty State" class="mx-auto mt-4" />
    <p class="text-gray-500">{{ $message }}</p>
    {{  $slot }}
</div>
