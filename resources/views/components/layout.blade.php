<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce</title>
  @vite('resources/css/app.css')
</head>

<body>
  <header class="sticky top-0 left-0 w-full py-4 bg-white">
    <nav class="flex justify-center gap-2">
      <a class="py-2 px-4 hover:bg-neutral-100 rounded" href="/">Inicio</a>
      <a class="py-2 px-4 hover:bg-neutral-100 rounded" href="{{ route('clothing.create') }}">Añadir Ropa</a>
      <a class="py-2 px-4 hover:bg-neutral-100 rounded" href="{{ route('clothingType.create') }}">Añadir Tipo</a>
      <a class="py-2 px-4 hover:bg-neutral-100 rounded" href="{{ route('cart') }}">carrito</a>
    </nav>
  </header>

  <main class="max-w-6xl px-8 m-auto py-4">
    {{ $slot }}
  </main>
</body>

</html>