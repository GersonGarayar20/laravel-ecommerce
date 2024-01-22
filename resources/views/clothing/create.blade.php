<x-layout>
  <form class="flex flex-col gap-4 w-96 mx-auto" action="{{ route('clothing.store') }}" method="post">
    @csrf
    <label class="flex flex-col">
      <span>Name:</span>
      <input class="p-2 border-b outline-none focus:border-blue-500" type="text" name="name" placeholder="nombre" required>
    </label>

    <label class="flex flex-col">
      <span>Price:</span>
      <input class="p-2 border-b outline-none focus:border-blue-500" type="number" name="price" placeholder="123" required>
    </label>

    <label class="flex flex-col">
      <span>Image:</span>
      <input class="p-2 border-b outline-none focus:border-blue-500" type="text" name="image" placeholder="https://abcde.jpg" required>
    </label>

    <label class="flex flex-col">
      <span>Size:</span>
      <select class="p-2 border-b outline-none focus:border-blue-500" name="size" id="size">
        <option value="xs">xs</option>
        <option value="s">s</option>
        <option value="m">m</option>
        <option value="l">l</option>
        <option value="xl">xl</option>
      </select>
    </label>

    <label class="flex flex-col">
      <span>Color:</span>
      <input class="p-2 border-b outline-none focus:border-blue-500" type="text" name="color" placeholder="azul" required>
    </label>

    <label class="flex flex-col">
      <span>Type:</span>
      <select class="p-2 border-b outline-none focus:border-blue-500" name="type_id" id="type">
        @foreach ($clothingTypes as $clothingType)
        <option value="{{ $clothingType->id }}">{{ $clothingType->name }}</option>
        @endforeach
      </select>
    </label>

    <button class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600" type="submit">Crear Ropa</button>
  </form>
</x-layout>