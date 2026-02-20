<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codes Manager | Usuń</title>
    @vite('resources/css/app.css')
</head>
<body>
   <x-nav />

  <div class="flex justify-center mt-5">
    <div class="bg-slate-200 w-full sm:w-1/2 shadow flex flex-col items-center justify-center p-2">
        <h1 class="text-2xl p-2 text-center">Usuń kody</h1> 

      <div class="w-full p-3 flex justify-center">
        <form action="{{ route('codes.destroy') }}" method="POST" class="flex flex-col w-full md:w-1/2">
          @csrf
          <label for="codes_to_delete" class="my-2">Kody do usunięcia <br>(oddzielone spacjami lub przecinkami)</label>
          <textarea name="codes_to_delete" id="codes_to_delete" class="p-2" required>{{ old('codes_to_delete')}}</textarea>
          <input type="submit" class="py-2 my-2 bg-slate-300 hover:bg-slate-400 cursor-pointer" value="Usuń">

          @if(session('success'))
          <p class="text-green-600">{{ session('success') }}</p>
          @endif

          @if(session('warning'))
          <p class="text-red-500"> {{ session('warning') }} </p>
          @endif
        </form>
        
      </div>
    </div>
  </div>
</body>
</html>