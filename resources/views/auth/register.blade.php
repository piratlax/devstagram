@extends('layouts.app')

@section('titulo')
Registrate en Devstagram
@endsection

@section('contenido')
<div class="md:flex justify-center  md:gap-10 items-center">
    <div class="md:w-6/12 p-5">
    <img  src="{{ asset ('img/registrar.jpg') }}" alt="imagen de registro">
    </div>

    <div class="md:w-4/12 p-6 bg-white rounded-lg shadow-xl">
        <form action="/crear-cuenta" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="text-bold text-gray-600 uppercase">Nombre</label>
                <input id="name" name="name" type="text" class="border p-2 rounded-lg w-full" placeholder="Coloca tu nombre" value= "{{ old('name') }}">
                @error('name')
                <p class="text-red-500 text-sm"> {{  $message }}</p>
                @enderror
                
            </div>
            <div class="mb-5">
                <label for="username" class="text-bold text-gray-600 uppercase">UserName</label>
                <input id="username" name="username" type="text" class="border p-2 rounded-lg w-full" placeholder="Coloca tu username" value= "{{ old('username') }}">
                @error('username')
                <p class="text-red-500 text-sm"> {{  $message }}</p>
                @enderror
            </div>
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
            <div class="mb-5">
                <label for="password_confirmation" class="text-bold text-gray-600 uppercase">Repite tu password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="border p-2 rounded-lg w-full" placeholder="Repite tu password">
            </div>
            <input type="submit" value="Crear tu cuenta" class="bg-sky-500 hover:bg-sky-600 transition-colors cursor-pointer uppercase font-bold rounded-lg p-3 w-full text-white">
        </form>
    </div>
</div>
@endsection