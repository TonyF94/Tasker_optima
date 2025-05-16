@extends('system.app') {{-- Estende il layout base --}}

@section('title', 'Benvenuto - Bacheca') {{-- Definisce il titolo della pagina --}}

@section('navigation') {{-- Definisce la navigazione specifica --}}
    <a href="#">Home</a>
    <a href="{{ url('/profilo') }}">Profilo</a> {{-- Usa helper url() o route() --}}
    <a href="{{ url('/logout') }}">Esci</a> {{-- Usa helper url() o route() --}}
@endsection




{{-- @endsection --}}

@section('content') {{-- Definisce il contenuto principale --}}


<div class="row mb-5">
    <div class="col-12 align-items-center text-center">
        <h1 class="mt-5">Task Management System by Optima Task Team</h1>
    </div>
</div>

<div class="welcome-box pt-5">
    <h2>Benvenuto nella tua Bacheca</h2>
    <p>Qui puoi gestire i tuoi progetti e le tue attività in modo semplice e veloce.</p>

    <div class="boards-preview">
        <div class="board-card">📌 Progetto Marketing</div>
        <div class="board-card"> <a href="{{ route('home.index') }}">📝 Task Personali</a></div> {{-- Usa helper url() o route() --}}
        <div class="board-card">👥 Team Dev</div>
        <div class="board-card">🧠 Idee & Brainstorm</div>
    </div>
</div>
@endsection

{{-- Non c'è bisogno di definire @section('scripts') se non ci sono script specifici per questa pagina --}}
