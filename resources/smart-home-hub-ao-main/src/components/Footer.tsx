import { Home, Facebook, Instagram, Linkedin, Mail } from "lucide-react";

const Footer = () => {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-gradient-dark text-primary-foreground py-12">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-4 gap-8 mb-8">
          {/* Brand */}
          <div>
            <div className="flex items-center space-x-2 mb-4">
              <div className="w-10 h-10 bg-gradient-primary rounded-lg flex items-center justify-center">
                <Home className="w-6 h-6" />
              </div>
              <span className="text-xl font-bold">SmartHome</span>
            </div>
            <p className="text-primary-foreground/70">
              Transformando residências em casas inteligentes com tecnologia de ponta.
            </p>
          </div>

          {/* Quick Links */}
          <div>
            <h3 className="font-semibold mb-4">Links Rápidos</h3>
            <ul className="space-y-2">
              <li>
                <a href="#home" className="text-primary-foreground/70 hover:text-primary transition-colors">
                  Início
                </a>
              </li>
              <li>
                <a href="#solutions" className="text-primary-foreground/70 hover:text-primary transition-colors">
                  Soluções
                </a>
              </li>
              <li>
                <a href="#security" className="text-primary-foreground/70 hover:text-primary transition-colors">
                  Segurança
                </a>
              </li>
              <li>
                <a href="#contact" className="text-primary-foreground/70 hover:text-primary transition-colors">
                  Contacto
                </a>
              </li>
            </ul>
          </div>

          {/* Services */}
          <div>
            <h3 className="font-semibold mb-4">Serviços</h3>
            <ul className="space-y-2 text-primary-foreground/70">
              <li>Iluminação Inteligente</li>
              <li>Segurança Residencial</li>
              <li>Climatização</li>
              <li>Entretenimento</li>
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h3 className="font-semibold mb-4">Contacto</h3>
            <ul className="space-y-2 text-primary-foreground/70">
              <li>+244 900 000 000</li>
              <li>info@smarthome.ao</li>
              <li>Luanda, Angola</li>
            </ul>
            <div className="flex space-x-4 mt-4">
              <a href="#" className="hover:text-primary transition-colors">
                <Facebook className="w-5 h-5" />
              </a>
              <a href="#" className="hover:text-primary transition-colors">
                <Instagram className="w-5 h-5" />
              </a>
              <a href="#" className="hover:text-primary transition-colors">
                <Linkedin className="w-5 h-5" />
              </a>
              <a href="#" className="hover:text-primary transition-colors">
                <Mail className="w-5 h-5" />
              </a>
            </div>
          </div>
        </div>

        <div className="border-t border-primary-foreground/20 pt-8 text-center text-primary-foreground/70">
          <p>&copy; {currentYear} SmartHome. Todos os direitos reservados.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
