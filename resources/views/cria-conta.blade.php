<x-layout_base>

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="mx-auto max-w-screen-md py-10 px-4 sm:px-6 md:max-w-screen-xl md:py-0 lg:py-20 md:px-8">
        <div class="md:pe-8 md:w-1/2 xl:pe-0 xl:w-5/12">
            <!-- Title -->
            
            <h1 class="text-3x1  text-gray-100  font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight text-neutral-500">
            Acesse milhares de produtos no <span class="text-blue-600 dark:text-yellow-500">MarketShop</span>
            
            </h1>
            <p class="mt-3 text-decoration: underline text-base text-gray-500 dark:text-neutral-500 my-2">
            Crie sua conta para poder vender, comprar e pesquisar milhares de produtos em diversas categorias diferentes.
            </p>
            <!-- End Title -->

            <!-- Form -->
            <form action="{{route('salva-usuario')}}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="campo-nome" class="block text-sm font-medium dark:text-white"><span class="">Nome completo</span></label>
                <input type="text" name="nome" id="campo-nome" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-red-500 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-100 dark:focus:ring-neutral-600" placeholder="Nome e Sobrenome">
            </div>

            <div class="mb-2">
                <label for="hs-hero-email-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Email</span></label>
                <input type="email" name="email" id="hs-hero-email-2" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-red-500 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-100 dark:focus:ring-neutral-600" placeholder="Email">
            </div>

            <div class="mb-10">
                <label for="hs-hero-password-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Senha</span></label>
                <input type="password" name="senha" id="hs-hero-password-2" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-red-500 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-100 dark:focus:ring-neutral-600" placeholder="Senha">
            </div>

            <div class="grid ">
                <button type="submit" class="py-3  px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-500 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Criar</button>
            </div>
            </form>
            <!-- End Form -->
        </div>
        </div>

        <div class="hidden md:block md:absolute md:top-0 md:start-1/2 md:end-0 h-full bg-[url('https://static.vecteezy.com/system/resources/previews/014/494/786/original/shopping-bags-on-the-shopping-cart-online-shopping-ideas-png.png')] bg-no-repeat bg-center bg-cover"></div>
        <!-- End Col -->
    </div>
    <!-- End Hero -->

</x-layout_base>
