@extends('layouts.main')

@section('title', 'Modifier une liste d\'achat ')

@section('content')

<div class="m-4">
    <h1 class="text-3xl text-[#7A1E2E]" style="font-family: 'Crimson Text', serif;">
        Modifier la liste d'achat
    </h1>
    <p class="text-sm text-gray-600 mt-1 font-roboto">
        Mettez à jour les informations de votre liste d'achat.
    </p>
</div>

<div class="m-4 border p-4 rounded bg-white font-roboto">
    <form method="POST" action="{{ route('achat.update', $liste) }}" class="flex flex-col gap-5" novalidate>
        @csrf
        @method('PUT')

        @include('liste-achat._form')

        <div class="flex gap-3 pt-2 mb-24">
            <button type="submit" class="w-1/2 bg-[#A83248] text-white py-3 rounded font-medium">
                Sauvegarder
            </button>

            <a href="{{ url()->previous() }}"
                class="w-1/2 text-center border py-3 rounded font-medium">
                Annuler
            </a>
        </div>
    </form>
</div>

@endsection