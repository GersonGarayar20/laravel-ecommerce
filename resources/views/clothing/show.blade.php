<x-layout>
  <div class="grid md:grid-cols-2 gap-8">
    <section>
      <img src="{{ $clothingItem->image }}" alt="{{ $clothingItem->name }}">
    </section>
    <section class="flex flex-col gap-2">
      <h1 class="text-2xl">{{ $clothingItem->name }}</h1>
      <p class="text-orange-600 text-xl font-bold">S/ {{ $clothingItem->price }}</p>
      <p>Color: {{ $clothingItem->color }}</p>
      <p>Talla: {{ $clothingItem->size }}</p>
      <button class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600">Añadir al carrito</button>
    </section>
  </div>
</x-layout>