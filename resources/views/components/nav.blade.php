 <nav class="bg-slate-100 shadow">
    <ul class="flex p-4 justify-center items-center">
      <li>
        <a href="/codes" class="p-2">Lista kodów</a>
      </li>

      @auth
      <li>
        <a href="/codes/create" class="p-2">Utwórz kody</a>
      </li>
      <li>
        <a href="/codes/delete" class="p-2">Usuń kody</a>
      </li >
      <li >
        <form action="{{ route('auth.logout')}}" method="POST">
            @csrf
            <button class="p-2">Wyloguj</button>
        </form>
      </li>
      @endauth

      @guest
        <li>
            <a href="{{ route('auth.login.form')}}" class="p-2">Zaloguj</a>   
        </li>
        <li>
            <a href="{{ route('auth.register.form')}}" class="p-2">Rejestracja</a>
        </li>
      @endguest
    </ul>
  </nav>