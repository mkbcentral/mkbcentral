<div>
    <!-- ====== Cards Section Start -->
    <section class=" pt-20  lg:pt-[80px] lg:pb-5">
        <div class="container mx-auto">
            <div class="text-center text-slate-600 pb-12">
                <h1 class="text-3xl md:text-4xl lg:text-5xl">Nos logiciels</h1>
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
                @foreach ($listApplications as $application)
                    <a href="#" class="">
                        <div class="w-full px-4 md:w-1/2 xl:w-1/3 transition duration-300 ease-in-out hover:scale-105">
                            <div class="mb-10 overflow-hidden rounded-lg bg-white shadow-md ">
                                <img src="{{ asset('storage/'.$application->image) }}"
                                    alt="image" class="w-full" />
                                <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                                    <h3>
                                        <a href="javascript:void(0)"
                                            class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                            {{substr($application->name,0,30).'...'}}
                                        </a>
                                    </h3>
                                    <p class="text-body-color mb-7 text-base leading-relaxed">
                                       {{substr($application->description,0,60).'...'}}
                                    </p>
                                    <a href="javascript:void(0)"
                                        class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>

                @endforeach

            </div>
        </div>
    </section>
    <!-- ====== Cards Section End -->
</div>
