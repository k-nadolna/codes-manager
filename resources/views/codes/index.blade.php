@extends('layouts.app')

@section('title', 'Codes Manager')
@section('heading', 'Lista kodów')

@section('content')
  <div class="w-full p-3">
    @if($codes->isEmpty())
      <p class="text-center">Brak kodów w bazie danych</p>
    @else
      <x-messages />
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
@endsection