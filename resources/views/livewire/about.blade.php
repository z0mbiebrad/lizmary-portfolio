<div class="bg-white">
    <div class="relative">
        <x-section.hero /> 

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-12 w-11/12 mx-auto">
            <div class="relative aspect-[4/3] overflow-hidden rounded-lg shadow-lg basis-full w-full mx-auto">
                <a href="#">
                    <div class="absolute inset-0">
                        <img class="size-full object-cover"
                            src="{{asset("images/print.jpg")}}"
                            alt="People working on laptops">
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white p-4">
                        <h3 class="text-lg font-bold underline">Print Publications</h3>
                    </div>
                </a>
            </div>
            <div class="relative aspect-[4/3] overflow-hidden rounded-lg shadow-lg basis-full w-full mx-auto">
                <a href="#">
                    <div class="absolute inset-0">
                        <img class="size-full object-cover"
                            src="{{asset("images/digital.jpg")}}"
                            alt="People working on laptops">
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white p-4">
                        <h3 class="text-lg font-bold underline">Digital Publications</h3>
                    </div>
                </a>
            </div>
        </div>

        <div class="bg-gray-100">
            <div class="mx-auto px-6 py-16 lg:px-8">
                <p class="text-center text-base font-semibold text-gray-500">Brands I've worked with:</p>
                <div class="mt-6 grid grid-cols-2 md:grid-cols-4">
                    <div class="col-span-1">
                        <img class="h-16" src="{{ asset('images/fayob.png') }}"
                            alt="The Fayetteville Observer">
                    </div>
                    <div class="col-span-1">
                        <img class="h-20" src="{{ asset('images/pine.png') }}"
                            alt="Pine Straw">
                    </div>
                    <div class="col-span-1">
                        <img class="h-20" src="{{ asset('images/byb.png') }}"
                            alt="Backyard Boss">
                    </div> 
                    <div class="col-span-1">
                        <img class="h-16" src="{{ asset('images/pilot.png') }}"
                            alt="The Pilot">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
