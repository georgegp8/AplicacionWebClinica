<div class="w-full flex justify-center h-auto  py-10 ">
            <div class=" h-auto  flex flex-wrap justify-evenly gap-y-5 ">
                <div class="w-full flex justify-center items-center text-teal-500 text-5xl max-sm:text-4xl">
                    <h2>Testimonios</h2>
                </div>
                @foreach($testimonios as $testimonio)
                    <div class="w-[600px]  p-10 shadow-lg  flex flex-col gap-y-5 max-sm:w-[400px] max-md:w-[450px] max-xl:w-[500px] transition-transform transform hover:scale-105">
                        <p class=" italic">
                            {{$testimonio->testimonio}}

                        </p>
                        <div class="flex gap-x-5">
                            <div class="h-[70px] w-[70px] rounded-full lazyload bg-center bg-cover" data-bg="url('{{ asset('storage/testimonios/' . $testimonio->imagen) }}')">
                            </div>
                            <div class="flex  flex-col justify-center">
                                <h2 class="text-teal-500">
                                    {{$testimonio->nombre}}
                                </h2> 
                                <h2>
                                    {{$testimonio->servicio}}

                                </h2>
                            </div>


                        </div>
                    </div>    
                @endforeach
                
            </div>
        </div>