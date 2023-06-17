<div class="w-full px-4 lg:w-1/2 xl:w-5/12">
    @if (session()->has('message'))
        <div class="bg-green-600 text-slate-200 p-4 rounded-md">
            {{ session('message') }}
        </div>
    @endif
    <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
        <form wire:submit.prevent='sendEmaiContact'>
            <div class="mb-6">
                <input type="text" placeholder="Votre nom" wire:model.defer='name'
                    class="text-body-color border-[f0f0f0] focus:border-primary w-full
                    rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <input type="email" placeholder="Votre adresse mail" wire:model.defer="email"
                    class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px]
                    text-base outline-none focus-visible:shadow-none" />
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <input type="phone" placeholder="Votre N° Tél" wire:model.defer="phone"
                    class="text-body-color border-[f0f0f0] focus:border-primary
                     w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                @error('phone')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <textarea rows="6" placeholder="Message" wire:model.defer="message"
                    class="text-body-color border-[f0f0f0] focus:border-primary w-full resize-none
                    rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"></textarea>
                @error('message')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="bg-primary border-primary w-full rounded border p-3 text-white transition hover:bg-opacity-90">
                    @if ($isLoading == false)
                        <span>Envoyer</span>
                    @else
                        <span>Envoie en cours...</span>
                    @endif
                </button>
            </div>
        </form>

    </div>
</div>
