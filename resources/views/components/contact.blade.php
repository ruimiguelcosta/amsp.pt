<section id="contact" class="py-20 bg-background">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Entre em <span class="bg-gradient-accent bg-clip-text text-transparent">Contacto</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Mais Informações sobre como podemos transformar sua casa
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <div class="border border-border rounded-lg animate-fade-in-up bg-card">
                <div class="p-8">
                    <form id="contact-form" method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                        @csrf
                        
                        <div id="form-message" class="hidden mb-4 p-4 rounded-lg"></div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Nome Completo</label>
                            <input type="text" name="name" placeholder="Seu nome" required class="w-full px-4 py-3 border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" name="email" placeholder="seu@email.com" required class="w-full px-4 py-3 border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Telefone</label>
                            <input type="tel" name="phone" placeholder="(+351) 926 289 876" required class="w-full px-4 py-3 border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Mensagem</label>
                            <textarea name="message" placeholder="Como podemos ajudar?" rows="4" required class="w-full px-4 py-3 border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary resize-none"></textarea>
                        </div>

                        <button type="submit" id="submit-btn" class="w-full px-6 py-3 bg-primary hover:bg-primary/90 text-primary-foreground rounded-lg font-medium transition-colors duration-200">
                            <span id="submit-text">Enviar Mensagem</span>
                            <span id="submit-loading" class="hidden">A enviar...</span>
                        </button>
                    </form>
                </div>
                
                <script>
                    document.getElementById('contact-form').addEventListener('submit', async function(e) {
                        e.preventDefault();
                        
                        const form = e.target;
                        const submitBtn = document.getElementById('submit-btn');
                        const submitText = document.getElementById('submit-text');
                        const submitLoading = document.getElementById('submit-loading');
                        const messageDiv = document.getElementById('form-message');
                        
                        submitBtn.disabled = true;
                        submitText.classList.add('hidden');
                        submitLoading.classList.remove('hidden');
                        messageDiv.classList.add('hidden');
                        
                        const formData = new FormData(form);
                        
                        try {
                            const response = await fetch(form.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'Accept': 'application/json',
                                }
                            });
                            
                            const data = await response.json();
                            
                            if (response.ok) {
                                messageDiv.className = 'mb-4 p-4 rounded-lg bg-green-100 text-green-800 border border-green-300';
                                messageDiv.textContent = data.message || 'Mensagem enviada com sucesso!';
                                messageDiv.classList.remove('hidden');
                                form.reset();
                            } else {
                                let errorMessage = 'Ocorreu um erro ao enviar a mensagem.';
                                if (data.errors) {
                                    errorMessage = Object.values(data.errors).flat().join(' ');
                                } else if (data.message) {
                                    errorMessage = data.message;
                                }
                                messageDiv.className = 'mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-300';
                                messageDiv.textContent = errorMessage;
                                messageDiv.classList.remove('hidden');
                            }
                        } catch (error) {
                            messageDiv.className = 'mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-300';
                            messageDiv.textContent = 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.';
                            messageDiv.classList.remove('hidden');
                        } finally {
                            submitBtn.disabled = false;
                            submitText.classList.remove('hidden');
                            submitLoading.classList.add('hidden');
                        }
                    });
                </script>
            </div>

            <div class="space-y-8 animate-fade-in-up" style="animation-delay: 200ms">
                <div>
                    <h3 class="text-2xl font-bold mb-6">Informações de Contacto</h3>
                    <p class="text-muted-foreground mb-8">
                        Nossa equipa está pronta para atendê-lo e responder todas as suas dúvidas sobre automação residencial.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-primary/10 rounded-lg">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Telefone</p>
                            <p class="text-muted-foreground">(+351) 926 289 876</p>
                            <p class="text-muted-foreground">(+351) 21 145 1873</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-primary/10 rounded-lg">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Email</p>
                            <p class="text-muted-foreground">geral@amsp.pt</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-primary/10 rounded-lg">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold mb-1">Localização</p>
                            <p class="text-muted-foreground">Mafra Business Factory</p>
                            <p class="text-muted-foreground">Av. Primeiro de Maio, 1</p>
                            <p class="text-muted-foreground">2640-455 MAFRA</p>
                            <p class="text-muted-foreground">PORTUGAL</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-primary p-8 rounded-lg text-primary-foreground mt-8">
                    <h4 class="text-xl font-bold mb-2">Horário de Atendimento</h4>
                    <p class="mb-2">Segunda a Sexta: 8h - 18h</p>
                    <p>Sábado: 9h - 13h</p>
                </div>
            </div>
        </div>
    </div>
</section>
