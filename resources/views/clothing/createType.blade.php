<x-layout>
  <form class="flex flex-col gap-4 w-96 mx-auto" action="{{ route('clothingType.store') }}" method="post">
    @csrf
    <label class="flex flex-col">
      <span>Name:</span>
      <input class="p-2 border-b outline-none focus:border-blue-500" type="text" name="name" placeholder="camisa" required>
    </label>

    <button class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600" type="submit">Create Clothes</button>
  </form>
</x-layout>