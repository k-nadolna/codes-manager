<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Codes Manager')</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-nav />

  <main>
    <div class="flex justify-center mt-5">
      <div class="bg-slate-200 w-full md:w-1/2 shadow flex flex-col items-center justify-center p-2">
        <h1 class="text-2xl p-2 text-center">@yield('heading', 'Codes Manager')</h1> 
    @yield('content')
      </div>
  </div>
  </main>
</body>
</html>