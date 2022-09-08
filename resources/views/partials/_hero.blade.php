<section
    class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
    <div
        class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/icon.png')"
    ></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-laravel2">
            Vault<span class="text-black">-Tec</span>
        </h1>

        <p class="text-2xl text-laravel2 font-bold my-4">
            Find or post jobs at Vault-Tec
        </p>
        @auth
            <div>
                <a
                    href="/listings/create"
                    class="inline-block border-2 border-laravel2 text-laravel2 py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                >List a job at Vault-Tec</a>
            </div>
        @else
        <div>
            <a
                href="/register"
                class="inline-block border-2 border-laravel2 text-laravel2 py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
            >Sign Up to List a job at Vault-Tec</a>
        </div>
        @endauth
    </div>
</section>
