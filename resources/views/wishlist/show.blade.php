<x-layout>
    <x-slot name="title">
        {{ __('Wishlists') }} | {{ $list->name }}
    </x-slot>

    <h1 class="font-bold text-3xl">
        {{ $list->name }}
        <small class="text-gray-500">Last updated <time datetime="{{ $list->updated_at }}">{{ $list->updated_at->diffForHumans() }}</time></small>
    </h1>

    @if ($list->description)
        <p class="mt-4 max-w-prose">{{ $list->description }}</p>
    @endif

    @forelse ($list->ideas->sortBy('position') as $idea)
    <a class="block mt-8" href="{!! $idea->url !!}" target="_blank" rel="noopener nofollow">
        <span class="font-bold text-sm text-gray-600 uppercase tracking-wider">{{ $idea->brand }}</span>
        <h2 class="font-bold text-xl">
            {{ $idea->name }}

            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
            </svg>
        </h2>

        <div>
            Added <time datetime="{{ $idea->created_at }}">{{ $idea->created_at->diffForHumans() }}</time>
        </div>

        @if ($idea->price)
        <div>
            ${{ $idea->priceInDollars() }}
        </div>
        @endif

        @if ($idea->description)
        <p>{{ $idea->description }}</p>
        @endif
    </a>
    @empty
    <p>{{ __('No items have been added to this list yet.') }}</p>
    @endforelse
</x-layout>
