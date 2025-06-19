<form action="{{ route('form.submit') }}" method="POST">
    @csrf
    
    <x-form.form-group title="Informações Pessoais" description="Preencha seus dados pessoais abaixo.">
        <x-form.input 
            label="Nome" 
            name="name" 
            placeholder="Digite seu nome" 
            :value="old('name')" 
            required 
        />
        
        <x-form.input 
            type="email" 
            label="Email" 
            name="email" 
            placeholder="Digite seu email" 
            :value="old('email')" 
            required 
        />
        
        <x-form.select 
            label="País" 
            name="country" 
            :options="[
                'br' => 'Brasil',
                'us' => 'Estados Unidos',
                'ca' => 'Canadá',
                'pt' => 'Portugal'
            ]" 
            placeholder="Selecione seu país" 
            required 
        />
        
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Gênero
                <span class="text-red-500 ml-1">*</span>
            </label>
            
            <div class="space-y-2">
                <x-form.radio 
                    label="Masculino" 
                    name="gender" 
                    id="gender-male" 
                    value="male" 
                    :checked="old('gender') == 'male'" 
                />
                
                <x-form.radio 
                    label="Feminino" 
                    name="gender" 
                    id="gender-female" 
                    value="female" 
                    :checked="old('gender') == 'female'" 
                />
                
                <x-form.radio 
                    label="Outro" 
                    name="gender" 
                    id="gender-other" 
                    value="other" 
                    :checked="old('gender') == 'other'" 
                />
            </div>
            
            <x-form.error name="gender" />
        </div>
    </x-form.form-group>
    
    <x-form.form-group title="Mensagem" description="Deixe sua mensagem e preferências.">
        <x-form.textarea 
            label="Mensagem" 
            name="message" 
            placeholder="Digite sua mensagem" 
            :value="old('message')" 
            rows="5" 
        />
        
        <x-form.checkbox 
            label="Desejo receber novidades por email" 
            name="subscribe" 
            :checked="old('subscribe')" 
        />
    </x-form.form-group>
    
    <div class="flex justify-end space-x-4 mt-8">
        <x-form.button variant="outline" type="reset">
            Limpar
        </x-form.button>
        
        <x-form.button type="submit" variant="primary">
            Enviar
        </x-form.button>
    </div>
</form>