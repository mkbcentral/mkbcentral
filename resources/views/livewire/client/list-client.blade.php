<div>
    <!-- ====== Brands Section Start -->
    <section class="bg-indigo-200 py-20 lg:py-[80px]"
        style="clip-path: polygon(30% 26%, 77% 14%, 100% 5%, 100% 100%, 80% 100%, 20% 100%, 0 100%, 0 49%);">
        <div class="text-center pt-12 pb-12">
            <h1 class="text-3xl md:text-4xl lg:text-5xl text-slate-600">Nos clients</h1>
        </div>
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="flex flex-wrap items-center justify-center">
                        @foreach ($listClients as $client)
                            <a href="javascript:void(0)"
                                class="mx-4 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]
                                transition duration-300 ease-in-out hover:scale-150">
                                <img src="{{ asset('storage/'.$client->image) }}" alt="image" class="h-10 w-full" />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Brands Section End -->
</div>
