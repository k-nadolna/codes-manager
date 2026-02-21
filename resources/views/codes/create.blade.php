@extends('layouts.app')

@section('title', 'Codes Manager | Utwórz')
@section('heading', 'Utwórz kody')

@section('content')
  <div class="w-full p-3 flex justify-center">
    <form action="{{route('codes.store')}}" method="POST" class="flex flex-col w-full md:w-1/2">
      @csrf
      <label for="quantity" class="my-2">Ile kodów wygenerować? (1-10)</label>
      <input type="number" class="p-2 my-2" min="0" max="10" id="quantity" name="quantity" required>
      <input type="submit" class="py-2 my-2 bg-slate-300 hover:bg-slate-400 cursor-pointer" value="Generuj">

      <x-messages/>
    </form>
  </div>
@endsection
    