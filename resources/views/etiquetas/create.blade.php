<x-app-layout>
    <x-slot name="header">
        <p class="text-sm text-brand font-mono uppercase tracking-wide">
            Nueva
        </p>

        <h2 class="font-display font-semibold text-2xl text-ink">
            Crear etiqueta
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg p-8">

                <form
                    action="{{ route('etiquetas.store') }}"
                    method="POST"
                    novalidate
                >
                    @csrf

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
                            value="{{ old('nombre') }}"
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
                            value="{{ old('color', '#7F77DD') }}"
                            class="h-10 w-20 rounded-lg border-line focus:border-brand focus:ring-brand"
                        >

                        @error('color')
                            <p class="text-coral text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
<div class="flex justify-end gap-3">

    <a
        href="{{ route('etiquetas.index') }}"
        class="px-4 py-2 text-ink/60 hover:text-ink font-medium"
    >
        Cancelar
    </a>

    <button
        type="submit"
        class="px-6 py-2 bg-brand text-white rounded-lg font-medium hover:opacity-90 transition"
    >
        Crear etiqueta
    </button>

</div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>