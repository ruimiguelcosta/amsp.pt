<nav class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-26">
            <div class="flex items-center space-x-2">
                <a href="#home" class="flex items-center space-x-2 smooth-scroll">
                    <img src="{{ asset('images/logo_amsp_horizontal.png') }}" alt="i-H1" class="h-24 w-auto">
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-6">
                <a href="#home" class="text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll">
                    Início
                </a>
                <a href="#vision" class="text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll">
                    Visão
                </a>
                <a href="#how-it-works" class="text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll">
                    Como Funciona
                </a>
                <a href="#solutions" class="text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll">
                    Soluções
                </a>
                <a href="#benefits" class="text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll">
                    Benefícios
                </a>
                <a href="#sustainability" class="text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll">
                    Sustentabilidade
                </a>
                <a href="#contact" class="text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll">
                    Contacto
                </a>
                <a href="#contact" class="px-4 py-2 bg-primary hover:bg-primary/90 text-primary-foreground rounded-lg transition-colors duration-200 font-medium smooth-scroll">
                    Agendar Demonstração
                </a>
            </div>

            <button class="md:hidden p-2 text-slate-800" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="menu-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="close-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="md:hidden hidden py-4 border-t border-gray-200 animate-fade-in bg-white">
            <div class="flex flex-col space-y-4">
                <a href="#home" class="flex items-center space-x-2 text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll" onclick="toggleMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Início</span>
                </a>
                <a href="#vision" class="flex items-center space-x-2 text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll" onclick="toggleMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span>Visão</span>
                </a>
                <a href="#how-it-works" class="flex items-center space-x-2 text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll" onclick="toggleMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span>Como Funciona</span>
                </a>
                <a href="#solutions" class="flex items-center space-x-2 text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll" onclick="toggleMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <span>Soluções</span>
                </a>
                <a href="#benefits" class="flex items-center space-x-2 text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll" onclick="toggleMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Benefícios</span>
                </a>
                <a href="#sustainability" class="flex items-center space-x-2 text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll" onclick="toggleMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Sustentabilidade</span>
                </a>
                <a href="#contact" class="flex items-center space-x-2 text-slate-800 hover:text-primary transition-colors duration-200 font-medium smooth-scroll" onclick="toggleMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>Contacto</span>
                </a>
                <a href="#contact" class="w-full px-4 py-2 bg-primary hover:bg-primary/90 text-primary-foreground rounded-lg transition-colors duration-200 font-medium text-center smooth-scroll" onclick="toggleMobileMenu()">
                    Agendar Demonstração
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    menu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
}

document.addEventListener('DOMContentLoaded', function() {
    const smoothScrollLinks = document.querySelectorAll('.smooth-scroll');
    const navbarHeight = 104;
    
    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - navbarHeight;
                    window.scrollTo({
                        top: Math.max(0, offsetTop),
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});
</script>
