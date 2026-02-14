<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codes Manager | Delete</title>
    @vite('resources/css/app.css')
</head>
<body>
  <nav class="bg-slate-200 shadow">
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
    <div class="bg-slate-200 w-full sm:w-1/2 shadow flex flex-col items-center justify-center">
        <h1 class="text-2xl p-2 text-center">Delete Codes</h1> 

      <div class="w-full p-3 flex justify-center">
        <form action="" method="POST" class="flex flex-col w-full md:w-1/2">
          @csrf
          <label for="codes_to_delete" class="my-2">Codes to remove</label>
          <textarea name="codes_to_delete" id="codes_to_delete" required></textarea>
          <input type="submit" class="py-2 my-2 bg-slate-300 hover:bg-slate-400 cursor-pointer" value="Delete">
        </form>
      </div>
    </div>
  </div>
</body>
</html>