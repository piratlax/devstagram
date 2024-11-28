@extends('layouts.app')

@section('titulo')
Inicia sesion en Devstagram
@endsection

@section('contenido')
<div class="md:flex justify-center  md:gap-10 items-center">
    <div class="md:w-6/12 p-5">
    <img  src="{{ asset ('img/login.jpg') }}" alt="imagen de registro">
    </div>

    <div class="md:w-4/12 p-6 bg-white rounded-lg shadow-xl">
        <form method="POST" action=" {{ ('login') }}" novalidate>
            @csrf
           
            @if(session('mensaje'))
            <p class="bg-red-600 text-white text-center"> {{  session('mensaje') }}</p>
            @endif

            <div class="mb-5">
                <label for="email" class="text-bold text-gray-600 uppercase">eMail</label>
                <input id="email" name="email" type="email" class="border p-2 rounded-lg w-full" placeholder="Coloca tu correo electronico" value= "{{ old('mail') }}">
                @error('email')
                <p class="text-red-500 text-sm"> {{  $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="text-bold text-gray-600 uppercase">Password</label>
                <input id="password" name="password" type="password" class="border p-2 rounded-lg w-full" placeholder="Coloca tu password">
                @error('password')
                <p class="text-red-500 text-sm"> {{  $message }}</p>
                @enderror
            </div>
            
            <input type="submit" value="Acceder" class="bg-sky-500 hover:bg-sky-600 transition-colors cursor-pointer uppercase font-bold rounded-lg p-3 w-full text-white">
        </form>
    </div>
</div>
@endsection