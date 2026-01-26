<x-layouts.layout>
    <x-slot name="header">
        hola
    </x-slot>
<p>hola inicio</p>
    @php

    @endphp
    @foreach($usuarios as $usuario)
        <p>{{$usuario}}</p>
    @endforeach
</x-layouts.layout>
