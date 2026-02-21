@extends('layouts.app')

@section('title', 'Codes Manager | Usuń')
@section('heading', 'Usuń kody') 

@section('content')      
  <div class="w-full p-3 flex justify-center">
    <form action="{{ route('codes.destroy') }}" method="POST" class="flex flex-col w-full md:w-1/2">
      @csrf
      <label for="codes_to_delete" class="my-2">Kody do usunięcia <br>(oddzielone spacjami lub przecinkami)</label>
      <textarea name="codes_to_delete" id="codes_to_delete" class="p-2" required>{{ old('codes_to_delete')}}</textarea>
      <input type="submit" class="py-2 my-2 bg-slate-300 hover:bg-slate-400 cursor-pointer" value="Usuń">

      <x-messages />
    </form>
  </div>
@endsection