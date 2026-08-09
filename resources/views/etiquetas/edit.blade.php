<x-app-layout>
    <x-slot name="header">
        <p class="text-sm text-brand font-mono uppercase tracking-wide">
            Editar
        </p>

        <h2 class="font-display font-semibold text-2xl text-ink">
            {{ $etiqueta->nombre }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg p-8">

                <form
                    action="{{ route('etiquetas.update', $etiqueta) }}"
                    method="POST"
                    novalidate
                >
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label
                            for="nombre"
                            class="block text-sm font-medium text-ink mb-2"
                        >
                            Nombre
                        </label>

                        <input
                            id="nombre"
                            type="text"
                            name="nombre"
                            value="{{ old('nombre', $etiqueta->nombre) }}"
                            maxlength="50"
                            class="w-full rounded-lg border-line focus:border-brand focus:ring-brand"
                        >

                        @error('nombre')
                            <p class="text-coral text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-8">
                        <label
                            for="color"
                            class="block text-sm font-medium text-ink mb-2"
                        >
                            Color
                        </label>

                        <input
                            id="color"
                            type="color"
                            name="color"
                            value="{{ old('color', $etiqueta->color) }}"
                            class="h-10 w-20 rounded-lg border-line focus:border-brand focus:ring-brand"
                        >

                        @error('color')
                            <p class="text-coral text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex justify-end gap-3">
                        
                            href="{{ route('etiquetas.index') }}"
                            class="px-4 py-2 text-ink/60 hover:text-ink font-medium"
                        >
                            Cancelar
                        </a>

                        <button
                            type="submit"
                            class="px-5 py-2 bg-amber hover:brightness-95 text-white font-semibold rounded-lg shadow"
                        >
                            Actualizar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>