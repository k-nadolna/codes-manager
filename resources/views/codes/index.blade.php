<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codes Manager</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-nav />

  <div class="flex justify-center mt-5">
    <div class="bg-slate-200 w-full md:w-1/2 shadow flex flex-col items-center justify-center p-2">
        <h1 class="text-2xl p-2 text-center">Lista kodów</h1> 

      <div class="w-full p-3">
      @if($codes->isEmpty())
        <p class="text-center">Brak kodów w bazie danych</p>
      @else
        <table class="w-full border-collapse border border-gray-400 bg-slate-100">
          <thead>
            <th class="border border-gray-400 p-2">kod</th>
            <th class="border border-gray-400 p-2">id kodu</th>
            <th class="border border-gray-400 p-2">utworzony</th>
            <th class="border border-gray-400 p-2">użytkownik</th>
          </thead>
          <tbody>
            
            @foreach($codes as $code)
              <tr>
                <td class="border border-gray-400 p-2">{{ $code->code }}</td>
                <td class="border border-gray-400 p-2">{{ $code->id }}</td>
                <td class="border border-gray-400 p-2">{{ $code->created_at }}</td>
                <td class="border border-gray-400 p-2"> {{$code->user->name }} </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      @endif
        <div class="pt-4">
          {{ $codes->links() }}
        </div>
      </div>
    </div>
  </div>

</body>
</html>