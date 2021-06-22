<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('img/logo1.png') }}" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
                <x-jet-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div><br>

            <select name="Tipo_Documento" class="block mt-1 w-full" >
                <option value="">{{ _('Tipo Documento')}}</option>
                <option value="Cedula ciudadania">{{_('Cedula Ciudadania')}}</option>
                <option value="Cedula extranjeria">{{_('Cedula Extranjeria')}}</option>
                <option value="Pasaporte">{{_('Pasaporte')}}</option>
            </select><br>

            <div>
                <x-jet-label for="numero_documento" value="{{ __('Numero Documento') }}" />
                <x-jet-input id="numero_documento" class="block mt-1 w-full" type="text" name="numero_documento" :value="old('numero_documento')" required autofocus autocomplete="numero_documento" />
            </div>

            

            <div>
                <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha Nacimiento') }}" />
                <x-jet-input type="date" id="fecha_nacimiento" class="block mt-1 w-full" type="text" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autofocus autocomplete="fecha_nacimiento" />
            </div>

            <div>
                <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono"/>
            </div><br>

            <div>
                {{-- <x-jet-label for="genero" value="{{ __('genero') }}" />
                <x-jet-input  id="genero" class="block mt-1 w-full" type="text" name="genero" :value="old('genero')" required autofocus autocomplete="genero"/> --}}
             <select name="Genero" class="block mt-1 w-full" >
                <option value="">{{ _('Genero')}}</option>
                <option value="Masculino">{{_('Masculino')}}</option>
                <option value="Femenino">{{_('Femenino')}}</option>
            </select><br>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div>
            <x-jet-input id="roles_id" class="block mt-1 w-full" type="hidden" name="roles_id" :value="3" />

        </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya Registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
