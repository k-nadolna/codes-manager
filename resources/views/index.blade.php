<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codes Manager</title>
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="bg-slate-100 shadow">
    <ul class="flex p-4 justify-center">
      <li>
        <a href="/codes" class="p-2">home</a>
      </li>
      <li>
        <a href="/codes/create" class="p-2">create</a>
      </li>
      <li>
        <a href="/codes/delete" class="p-2">delete</a>
      </li>
    </ul>
  </nav>

  <div class="flex justify-center mt-5">
    <div class="bg-slate-200 w-full md:w-1/2 shadow flex flex-col items-center justify-center">
        <h1 class="text-2xl p-2 text-center">Codes List</h1> 

      <div class="w-full p-3">
      @if($codes->isEmpty())
        <p>rak kodów w bazie danych</p>
      @else
        <table class="w-full border-collapse border border-gray-400">
          <thead>
            <th class="border border-gray-400 p-2">code</th>
            <th class="border border-gray-400 p-2">id_code</th>
            <th class="border border-gray-400 p-2">created at</th>
          </thead>
          <tbody>
            
            @foreach($codes as $code)
              <tr>
                <td class="border border-gray-400 p-2">{{ $code->code }}</td>
                <td class="border border-gray-400 p-2">{{ $code->id }}</td>
                <td class="border border-gray-400 p-2">{{ $code->created_at }}</td>
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