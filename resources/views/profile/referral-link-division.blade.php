<x-action-section>
    <x-slot name="title">
        {{ __('Referral Link') }}
    </x-slot>
    <x-slot name="description"> </x-slot>
    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ route('register', ['ref' => auth()->user()->affiliate_id]) }}
        </div>
    </x-slot>
</x-action-section>
