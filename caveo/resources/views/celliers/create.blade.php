@extends('layouts.main')

@section('title', 'Créer un cellier')

@section('content')
<div class="flex justify-center px-4 sm:px-6 lg:px-8 py-12 pb-24">
    <div class="max-w-md w-full bg-white border border-[#E0E0E0] rounded-lg shadow-sm p-8">

        <h2 class="text-2xl font-semibold text-[#1A1A1A] text-center mb-6">
            Créer un cellier
        </h2>

        <x-alerts />

        <form method="POST" action="{{ route('celliers.store') }}" class="space-y-5" novalidate>
            @csrf

            @include('celliers._form')

            <button type="submit" class="w-full bg-[#7A1E2E] text-white py-2 rounded-lg">
                Enregistrer
            </button>
        </form>

        <div class="flex items-center my-5">
            <div class="grow border-t border-gray-300"></div>
            <span class="px-3 text-[#666666]">ou</span>
            <div class="grow border-t border-gray-300"></div>
        </div>

        <div class="text-center text-sm">
            <a href="{{ route('celliers.index') }}" class="text-[#7A1E2E] underline">
                Retour à mes celliers
            </a>
        </div>
    </div>
</div>
@endsection