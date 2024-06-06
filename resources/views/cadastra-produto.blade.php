    <x-layout_base>

    <div class="bg-white   p-4 sm:p-7 bg-[#6959CD]">
        

    <!-- Card Section -->
     <div class=" max-w-2xl  py-2 sm:px-6  lg:px-2 mx-auto">

    <form method= "POST" action ="{{route('salva-produto')}}" enctype="multipart/form-data">
      @csrf
      
    
    <!-- Card -->


    <div class="bg-white rounded-xl ring-2 ring-[#87CEEB] p-4 sm:p-7 bg-[#87CEEB]">


    <img class="flex items-center   bg-white " src="https://www.smplaces.com.br/blog/wp-content/uploads/2021/06/4-dicas-essenciais-para-cadastrar-os-produtos-no-seu-e-commerce_11102019935400.png" alt="Image Description">

        <div class="mb-8">
        <h2 class="p-8 text-xl  font-bold text-gray-800 dark:text-neutral-200">
            Cadastre seu produto:
        </h2>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
        
        </p>
        </div>

        




        <!-- Grid -->

        <div class="grid sm:grid-cols-12 gap-2 sm:gap-4">
            <div class="sm:col-span-3">
            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
            Imagens:
            
            </label>
            </div>


            <!-- End Col -->

            <div class="sm:col-span-8">
            <div class="flex">
                
                <div class="flex gap-x-2">
                <div>
              
                    
                   
                </div>
                </div>

                <input name= "foto" type="file" id=" af-account-full-name" type="text" class="py-2 px-2 pe-11 block w-full border-gray-200 -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
            </div>
            
            <!-- End Col -->

            <div class="sm:col-span-3">
            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">






            Nome doproduto:
            
            </label>
            <div class=" hs-tooltip inline-block">
                <button type="button" class="hs-tooltip-toggle ms-1">
                
                    <path d=" M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
               
             
                </span>
            </div>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-9">
            <div class=" sm:flex">
                <input name= "nome" id=" af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>
            </div>
         

            <div class="sm:col-span-3">
            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">






            Descrição:
            </label>
            <div class="hs-tooltip inline-block">
                <button type="button" class="hs-tooltip-toggle ms-1">
               
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
              
             
                </span>
            </div>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-9">
            <div class=" sm:flex">
                <input name= "descricao" id="af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
               
            </div>
            </div>
         
            <div class="sm:col-span-3">
            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">




      Preço:
            </label>
            <div class="hs-tooltip inline-block">
                <button type="button" class="hs-tooltip-toggle ms-1">
                
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
              
            </div>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-9">
            <div class=" sm:flex">
                <input name= "valor" id="af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              
            </div>
            </div>
         
         </div>
            
            
           
        
   
    

         <div class="mt-5 flex justify-end gap-x-2">
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-black text-gray-800 shadow-sm hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none bg-neutral-800 border-neutral-700 text-white hover:bg-blue-700">
            Cancelar
            </button>
            <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Salvar
            </button>
        </div>
        </form>
    </div>
    <!-- End Card -->
    </div>
    <!-- End Card Section -->




    </x-layout_base>