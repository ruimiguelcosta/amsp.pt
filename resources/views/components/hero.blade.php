<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero-smart-home.jpg') }}')">
        <div class="absolute inset-0 bg-gradient-dark opacity-90"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-32">
        <div class="max-w-4xl mx-auto text-center animate-fade-in-up">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-primary-foreground leading-tight">
                O Futuro da Sua Casa
                <span class="block bg-gradient-primary bg-clip-text text-transparent mt-2">
                    Começa Hoje
                </span>
            </h1>
            
            <p class="text-xl md:text-2xl mb-8 text-primary-foreground/90 max-w-2xl mx-auto">
                Transforme sua residência em uma casa inteligente com tecnologia PoE (Power over Ethernet). 
                Uma única infraestrutura para dados e energia. Conforto, segurança e eficiência máxima.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="group bg-primary hover:bg-primary/90 text-primary-foreground px-8 py-6 text-lg shadow-lg-custom rounded-lg transition-all duration-200 flex items-center">
                    Explorar Soluções
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
                
                <button class="bg-primary-foreground/10 backdrop-blur-sm border border-primary-foreground/30 text-primary-foreground hover:bg-primary-foreground/20 px-8 py-6 text-lg rounded-lg transition-all duration-200 flex items-center">
                    <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Ver Demonstração
                </button>
            </div>

            <div class="grid grid-cols-3 gap-8 mt-16 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2">500+</div>
                    <div class="text-primary-foreground/70">Casas Conectadas</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-secondary mb-2">95%</div>
                    <div class="text-primary-foreground/70">Satisfação</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">40%</div>
                    <div class="text-primary-foreground/70">Economia Energia</div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-float">
        <div class="w-6 h-10 border-2 border-primary-foreground/50 rounded-full flex items-start justify-center p-2">
            <div class="w-1 h-3 bg-primary rounded-full"></div>
        </div>
    </div>
</section>
