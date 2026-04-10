<div class="space-y-5">
    <div>
        <label for="nom" class="block mb-1 text-sm font-medium text-[#1A1A1A]">
            Nom du cellier
        </label>
        <input
            type="text"
            id="nom"
            name="nom"
            value="{{ old('nom', $cellier->nom ?? '') }}"
            maxlength="75"
            required
            placeholder="Ex. Cellier principal"
            class="w-full border-2 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#E0E0E0] @error('nom') border-red-600 @enderror">
        @error('nom')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="emplacement" class="block mb-1 text-sm font-medium text-[#1A1A1A]">
            Emplacement
        </label>
        <input
            type="text"
            id="emplacement"
            name="emplacement"
            value="{{ old('emplacement', $cellier->emplacement ?? '') }}"
            maxlength="55"
            placeholder="Ex. Sous-sol"
            class="w-full border-2 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#E0E0E0] @error('emplacement') border-red-600 @enderror">
        @error('emplacement')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description" class="block mb-1 text-sm font-medium text-[#1A1A1A]">
            Description
        </label>
        <textarea
            id="description"
            name="description"
            rows="4"
            placeholder="Ajoutez une courte description de votre cellier"
            class="w-full border-2 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#E0E0E0] @error('description') border-red-600 @enderror">{{ old('description', $cellier->description ?? '') }}</textarea>
        @error('description')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>