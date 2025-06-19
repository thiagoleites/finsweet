<footer class="h-[560px] bg-[#232536] flex items-center sm:px-10">
    <div class="container h-full mx-auto flex flex-col justify-evenly items-stretch">
        <!-- Seção de navegação e logotipo -->
        <header class="flex justify-between items-center">
            <div class="logo">
                <a href="#" class="text-2xl font-bold">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                </a>
            </div>
            <nav aria-label="Navegação do rodapé">
                <ul class="flex items-center space-x-6 font-inter">
                    <li>
                        <a href="#" class="text-white font-normal hover:text-gray-500 transition-colors duration-300">Home</a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-normal hover:text-gray-500 transition-colors duration-300">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-normal hover:text-gray-500 transition-colors duration-300">About us</a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-normal hover:text-gray-500 transition-colors duration-300">Contact us</a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-normal hover:text-gray-500 transition-colors duration-300">Privacy Policy</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Seção de Newsletter -->
        <section class="newsletter h-[256px] flex items-center justify-around bg-[#2e3040]">
            <div class="newsletter-text font-bold text-4xl text-white tracking-[-2px]">
                <h2>
                    Subscribe to our newsletter to get<br>latest updates and news
                </h2>
            </div>
            <div x-data="newsletterForm()" class="newsletter-form flex flex-col space-y-2">
                <form action="{{ route('newsletter') }}" id="newsletterForm" method="POST">
                    @csrf
                    <div class="flex justify-between space-x-6">
                        <input
                            type="text"
                            name="email"
                            x-model="email"
                            placeholder="Enter Your Email"
                            class="w-[323px] border border-[#4C4C4C] py-3.5 px-6 text-base text-[#6D6E76]"
                        >
                        <button
                            type="button"
                            @click="subscribe"
                            class="w-[179px] bg-fw-yellow text-gray-900 font-bold text-lg px-12 cursor-pointer hover:bg-fw-yellow-600 transition-colors duration-300"
                            x-bind:disabled="loading"
                        >
                            <span x-show="!loading">Subscribe</span>
                            <span x-show="loading">Sending...</span>
                        </button>
                    </div>
                </form>
                <p x-show="message" x-text="message" class="text-green-500"></p>
                <p x-show="error" x-text="error" class="text-red-500"></p>
            </div>
        </section>

        <!-- Informações de contato e redes sociais -->
        <section class="footer-info flex justify-between">
            <address class="flex flex-col space-y-1 font-inter not-italic">
                <span class="block text-gray-50/75 text-base">Finstreet 118 2561 Fintown</span>
                <span class="block text-gray-50/75 text-base">Hello@finsweet.com 020 7993 2905</span>
            </address>
            <nav class="social-nav flex items-center space-x-6" aria-label="Links para redes sociais">
                <a href="#" class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300">
                    <x-icones.facebook class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300" />
                </a>
                <a href="#" class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300">
                    <x-icones.twitter class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300 "/>
                </a>
                <a href="#" class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300">
                    <x-icones.instagram class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300" />
                </a>
                <a href="#" class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300">
                    <x-icones.linkedin class="text-fw-gray hover:text-fw-yellow-600 transition-colors duration-300" />
                </a>
            </nav>
        </section>
    </div>
</footer>

<script>
    function newsletterForm() {
        return {
            email: '',
            message: '',
            error: '',
            loading: false,

            async subscribe() {
                this.loading = true;
                this.message = '';
                this.error = '';

                try {
                    let response = await fetch('/subscribe', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        },
                        body: JSON.stringify({ email: this.email })
                    });

                    let data = await response.json();

                    if (response.ok) {
                        this.message = data.message;
                        this.email = '';
                    } else {
                        this.error = data.errors?.email?.[0] || 'Ocorreu um erro.';
                    }
                } catch (error) {
                    this.error = "Erro ao se inscrever no newsletter.";
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>
