<x-layout>
    <x-slot name="title">
        {{ __('All Wishlists') }}
    </x-slot>

    @forelse ($lists as $list)
        <a href="{!! route('idealists.show', $list->id) !!}">{{ $list->name }}</a>
    @empty
        <p>{{ __('No lists at this time.') }}</p>
    @endforelse
</x-layout>
