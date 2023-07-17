<div>
    <!-- ====== Pricing Section Start -->
    <section class="relative z-20 overflow-hidden bg-white pt-15 pb-12 lg:pt-[40px] lg:pb-[40px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[30px] max-w-[510px] text-center ">
                        <span class="text-primary mb-2 block text-lg font-semibold">
                            Tarification
                        </span>
                        <h2 class="text-dark text-3xl font-bold sm:text-4xl md:text-[40px]">
                            Nos tarifs
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center py-3 mb-3">
                @foreach ($listPlan as $plan)
                    <button type="button" wire:click.prevent='selectPlan({{ $plan }})'
                        class="{{ $selectedPlanId == $plan->id ? 'bg-indigo-800 hover:bg-indigo-500 hover:text-slate-300' : ' text-blue-700 font-bold text-lg' }}  p-2 rounded-xl text-green-300 space-x-2 ">{{ $plan->name }}</button>
                @endforeach
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
                @foreach ($listTarif as $tarif)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                            <span class="text-primary mb-4 block text-lg font-semibold">
                                {{ $tarif->name }}
                            </span>
                            <h2 class="text-dark mb-5 text-[42px] font-bold">
                                ${{ $valueForCalculatePrice == 0 ? $tarif->priceTarif->price : $tarif->priceTarif->price * $valueForCalculatePrice }}
                                <span class="text-body-color text-base font-medium"> / {{ $planSelected->name }} </span>
                            </h2>
                            <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base">
                                {{ $tarif->description }}
                            </p>
                            <div class="mb-7">
                                @foreach ($tarif->itemTarifs as $item)
                                    <p class="text-body-color mb-1 text-base leading-loose">{{$item->name}}</p>
                                @endforeach
                            </div>
                            <a href="javascript:void(0)"
                                class="{{$tarif->name !='Gratuit'?'bg-primary border-primary block w-full rounded-md border p-4 text-center text-base font-semibold text-white transition hover:bg-opacity-90'
                                    :'text-primary hover:bg-primary hover:border-primary block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold transition hover:text-white'}} ">
                                Choose Business
                            </a>
                            <div>
                                <span class="absolute right-0 top-7 z-[-1]">
                                    <svg width="77" height="172" viewBox="0 0 77 172" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="86" cy="86" r="86"
                                            fill="url(#paint0_linear)" />
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="86" y1="0"
                                                x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3056D3" stop-opacity="0.09" />
                                                <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ====== Pricing Section End -->

</div>
