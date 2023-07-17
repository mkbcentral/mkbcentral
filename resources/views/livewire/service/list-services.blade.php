 <!-- ====== Services Section Start -->
 <section class="pt-32 pb-12 lg:pt-[50px] lg:pb-[90px]">
     <div class="container mx-auto">
         <div class="-mx-4 flex flex-wrap">
             <div class="w-full px-4">
                 <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                     <h2 class="text-slate-500 mb-4 text-lg font-bold sm:text-2xl md:text-[40px]">
                         Nos services
                     </h2>
                 </div>
             </div>
         </div>
         <div class="-mx-4 flex justify-center flex-wrap">
             @foreach ($listServices as $service)
                 <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                     <div
                         class="mb-8 rounded-[20px] bg-white p-10  hover:scale-105 shadow-lg hover:shadow-lg md:px-7 xl:px-10">
                         <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d=" {{$service->icon}}" />
                             </svg>
                         </div>
                         <h4 class="text-dark mb-3 text-xl font-semibold">
                             {{ $service->name }}
                         </h4>
                         <p class="text-body-color">
                             {{ substr($service->description, 0, 150) . '...' }}
                         </p>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </section>
 <!-- ====== Services Section End -->
