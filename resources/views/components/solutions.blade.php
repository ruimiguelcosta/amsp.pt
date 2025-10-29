<section id="solutions" class="py-20 bg-muted/30">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Nossas <span class="bg-gradient-primary bg-clip-text text-transparent">Soluções</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Tecnologia PoE (Power over Ethernet) para transformar cada aspecto da sua casa. 
                Uma única infraestrutura para alimentação e comunicação de todos os dispositivos.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group hover:shadow-lg-custom transition-all duration-300 hover:-translate-y-2 animate-fade-in border border-border rounded-lg overflow-hidden bg-card" style="animation-delay: 0ms">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/smart-living.jpg') }}" alt="Iluminação Inteligente" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 rounded-lg bg-primary/10 text-yellow-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Iluminação Inteligente</h3>
                    </div>
                    <p class="text-muted-foreground">Controle total da iluminação com ajuste automático de intensidade e cor via smartphone ou voz.</p>
                </div>
            </div>

            <div id="security" class="group hover:shadow-lg-custom transition-all duration-300 hover:-translate-y-2 animate-fade-in border border-border rounded-lg overflow-hidden bg-card" style="animation-delay: 100ms">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/security-system.jpg') }}" alt="Segurança Avançada" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 rounded-lg bg-primary/10 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Segurança Avançada</h3>
                    </div>
                    <p class="text-muted-foreground">Câmeras HD, sensores de movimento e fechaduras inteligentes para proteção 24/7.</p>
                </div>
            </div>

            <div class="group hover:shadow-lg-custom transition-all duration-300 hover:-translate-y-2 animate-fade-in border border-border rounded-lg overflow-hidden bg-card" style="animation-delay: 200ms">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/climate-control.jpg') }}" alt="Climatização Inteligente" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 rounded-lg bg-primary/10 text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Climatização Inteligente</h3>
                    </div>
                    <p class="text-muted-foreground">Termostatos inteligentes que aprendem suas preferências e otimizam o consumo de energia.</p>
                </div>
            </div>

            <div class="group hover:shadow-lg-custom transition-all duration-300 hover:-translate-y-2 animate-fade-in border border-border rounded-lg overflow-hidden bg-card" style="animation-delay: 300ms">
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 rounded-lg bg-primary/10 text-purple-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Entretenimento Conectado</h3>
                    </div>
                    <p class="text-muted-foreground">Sistema de som e vídeo integrado com controle centralizado para toda a casa.</p>
                </div>
            </div>

            <div class="group hover:shadow-lg-custom transition-all duration-300 hover:-translate-y-2 animate-fade-in border border-border rounded-lg overflow-hidden bg-card" style="animation-delay: 400ms">
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 rounded-lg bg-primary/10 text-secondary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Rede Mesh Potente</h3>
                    </div>
                    <p class="text-muted-foreground">Cobertura WiFi completa em todos os cômodos com alta velocidade e estabilidade.</p>
                </div>
            </div>

            <div class="group hover:shadow-lg-custom transition-all duration-300 hover:-translate-y-2 animate-fade-in border border-border rounded-lg overflow-hidden bg-card" style="animation-delay: 500ms">
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-3 rounded-lg bg-primary/10 text-amber-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Gestão de Energia</h3>
                    </div>
                    <p class="text-muted-foreground">Monitore e otimize o consumo elétrico em tempo real, reduzindo custos significativamente.</p>
                </div>
            </div>
        </div>
    </div>
</section>
