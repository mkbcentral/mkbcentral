<!-- ====== Navbar Section Start -->
<header x-data="{
    navbarOpen: false,
}" class="absolute left-0 top-0 z-50 w-full bg-slate-200 text-slate-100">
    <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4">
                <a href="javascript:void(0)" class="block w-full py-5">
                    <h1 class="text-2xl text-slate-800 font-bold">mkbCentral</h1>
                </a>
            </div>
            <x-web-site.navbar />
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
<!-- ====== Hero Section Start -->
<div class="relative pt-[120px] pb-[110px] lg:pt-[70px] bg-blue-500"
    style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 86%);">
    <div class="container mx-auto">
        <div class="mx-4 flex flex-wrap">
            <div class="max-w-[490px] py-[10px] lg:py-[110px]">
                <span class="mb-3 block text-lg font-semibold text-white">
                    {{ $info?->title }}
                </span>
                <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-[40px]">
                    {{ $info?->subtitle }}
                </h2>
                <p class="mb-9 text-base leading-relaxed text-white">
                    {{ $info?->paragraph }}
                </p>
                <a href="javascript:void(0)"
                    class="inline-block rounded-full border border-white py-3 px-9 text-base font-medium text-white hover:bg-white hover:text-primary">
                    Commencer, c'est gratuit
                </a>
            </div>

            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="{{ asset('storage/' . $info?->image) }}" alt="hero"
                            class="max-w-full lg:ml-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
