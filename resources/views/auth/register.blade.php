<x-guest-layout>
    <section class="h-screen bg-indigo-300">
        <div class="h-full">
            <!-- Left column container with background-->
            <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
                <div class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12">
                    <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="w-full" alt="Sample image" />
                </div>
                <!-- Right column container -->
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @include('components.auth-social-link')
                        <div
                            class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                            <p class="mx-4 mb-0 text-center font-semibold dark:text-white">
                                Ou
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <!-- Username -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full mb-2" type="text"
                                    name="name" :value="old('name')" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="application_id" :value="__('Application')" />
                            <x-select id="application_id" class="block mt-1 w-full" name="application_id">
                                @foreach ($listApplication as $application)
                                    <option selected value="{{$application->id}}">{{$application->name}}</option>
                                @endforeach
                            </x-select>
                            <x-input-error :messages="$errors->get('application_id')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <!-- Is free trail -->
                        <div class="ml-4 mt-4">
                            <label for="is_free_trial" class="inline-flex items-center">
                                <input id="is_free_trial" type="radio"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="is_free_trial">
                                <span class="ml-2 text-sm font-bold text-red-600">{{ __("J'essaie gratuitement") }}</span>
                            </label>
                        </div>
                        <!-- Is payment -->
                        <div class="ml-4 mt-2">
                            <label for="is_payment" class="inline-flex items-center">
                                <input id="is_payment" type="radio"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="is_payment">
                                <span class="ml-2 text-sm font-bold text-blue-600">{{ __('Je paie un abonnement') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <a href="{{ route('register') }}"
                                class="text-bold text-underline indigo-600 hover:text-red-600 underline">Se
                                connecter</a>
                            <x-primary-button class="ml-3 bg-indigo-600">
                                {{ __('Créer un compte') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
