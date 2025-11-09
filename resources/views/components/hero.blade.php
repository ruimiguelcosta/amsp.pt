<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat z-0" style="background-image: url('{{ asset('images/hero-smart-home.jpg') }}')">
        <div class="absolute inset-0 bg-gradient-dark opacity-75"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-32">
        <div class="max-w-4xl mx-auto text-center animate-fade-in-up">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-primary-foreground leading-tight">
                Home AI
                <span class="block bg-gradient-primary bg-clip-text text-transparent mt-2">
                    A inteligência que dá vida à sua casa
                </span>
            </h1>
            
            <p class="text-xl md:text-2xl mb-10 text-white max-w-3xl mx-auto leading-relaxed font-light drop-shadow-lg">
                Transforme a sua casa num ambiente inteligente, autónomo e sustentável com a primeira 
                <span class="font-semibold text-white">IA doméstica local</span>, que compreende, antecipa e age de forma proativa.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="#how-it-works" class="px-8 py-4 bg-primary hover:bg-primary/90 text-white rounded-lg font-medium transition-all duration-200 text-lg smooth-scroll shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Descubra como funciona
                </a>
                <a href="#contact" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white border-2 border-white/30 rounded-lg font-medium transition-all duration-200 text-lg smooth-scroll shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Mais Informações
                </a>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 md:p-8 shadow-2xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-white font-semibold text-lg mb-2">Tecnologia PoE (Power over Ethernet)</h3>
                            <p class="text-white/95 text-base md:text-lg leading-relaxed">
                                Uma única infraestrutura para dados e energia. <span class="font-medium">Processamento local</span>, 
                                <span class="font-medium">privacidade total</span> e funcionamento sem depender da internet.
                            </p>
                        </div>
                    </div>
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
