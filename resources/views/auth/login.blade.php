<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codes Manager | Login</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-nav />

 <div class="flex justify-center mt-5">
    <div class="bg-slate-200 w-full sm:w-1/2 shadow flex flex-col items-center justify-center p-2">
        <h1 class="text-2xl p-2 text-center">Logowanie</h1> 

      <div class="w-full p-3 flex justify-center">
        <form action="{{route('auth.login')}}" method="POST" class="flex flex-col w-full md:w-1/2">
          @csrf
              <label for="email" class="my-2">Email</label>
              <input type="email" id="email" name="email" class="p-1" required>
              <label for="password" class="my-2">Hasło</label>
              <input type="password" id="password" name="password" class="p-1" required>

          <input type="submit" class="py-2 my-2 bg-slate-300 hover:bg-slate-400 cursor-pointer" value="Zaloguj">
        @if(session('error'))
            <p class="text-red-400">{{session('error')}}</p>
        @endif
        </form>



      </div>
    </div>
  </div>

</body>
</html>