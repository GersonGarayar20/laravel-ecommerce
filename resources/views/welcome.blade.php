<x-layout>
    @if(session('success'))
    <div class="p-3 bg-blue-100 rounded">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('index') }}" method="get">
        <input class="p-2 border outline-none hover:border-blue-500" type="search" name="search" placeholder="buscar..." id="">
        <button class="p-2 bg-neutral-200 rounded">Buscar</button>
    </form>

    <nav class="flex gap-2 py-4">
        <a class="px-3 py-1 bg-neutral-200 rounded-full hover:bg-blue-200" href="{{ route('index') }}">
            all
        </a>
        @foreach($clothingTypes as $clothingType)
        <a class="px-3 py-1 bg-neutral-200 rounded-full hover:bg-blue-200" href="{{ route('index', ['category' => $clothingType->name]) }}">
            {{ $clothingType->name }}
        </a>
        @endforeach
    </nav>

    <ul class="grid grid-cols-4 gap-4 py-8">
        @foreach ($clothingItems as $clothingItem)
        <a href="{{ route('clothing.show', $clothingItem)  }}">
            <x-card src="{{ $clothingItem->image }}" name="{{ $clothingItem->name }}" price="{{ $clothingItem->price }}" />
        </a>
        @endforeach
    </ul>
</x-layout>