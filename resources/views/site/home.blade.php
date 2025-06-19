<x-app-layout>

    <section class="container mx-auto py-8">
        {{-- <x-form.button>Botao</x-form.button> --}}
        {{-- <x-form.input
            label="Nome"
            name="name"
            placeholder="Digite seu nome"
            :value="old('name')"
            required
            />
            <x-form.select 
    label="País" 
    name="country" 
    :options="['br' => 'Brasil', 'us' => 'Estados Unidos']" 
    placeholder="Selecione seu país" 
/> --}}
            <div class="flex gap-8 justify-evenly">
                @for($i = 0; $i < 4; $i++)
                    <x-cards.author
                        :name="$name"
                        :role="$role"
                        :photo="$photo"
                        :socialLinks="$socialLinks"
                        :background="'bg-gray-200'"
                    />
                @endfor
            </div>
    </section>

    @include('site.parts.join-team')

</x-app-layout>
