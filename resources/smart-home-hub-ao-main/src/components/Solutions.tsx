import { Lightbulb, Thermometer, Shield, Tv, Wifi, Zap } from "lucide-react";
import { Card, CardContent } from "@/components/ui/card";
import smartLiving from "@/assets/smart-living.jpg";
import securitySystem from "@/assets/security-system.jpg";
import climateControl from "@/assets/climate-control.jpg";

const Solutions = () => {
  const solutions = [
    {
      icon: Lightbulb,
      title: "Iluminação Inteligente",
      description: "Controle total da iluminação com ajuste automático de intensidade e cor via smartphone ou voz.",
      image: smartLiving,
      color: "text-yellow-500",
    },
    {
      icon: Shield,
      title: "Segurança Avançada",
      description: "Câmeras HD, sensores de movimento e fechaduras inteligentes para proteção 24/7.",
      image: securitySystem,
      color: "text-accent",
    },
    {
      icon: Thermometer,
      title: "Climatização Inteligente",
      description: "Termostatos inteligentes que aprendem suas preferências e otimizam o consumo de energia.",
      image: climateControl,
      color: "text-primary",
    },
    {
      icon: Tv,
      title: "Entretenimento Conectado",
      description: "Sistema de som e vídeo integrado com controle centralizado para toda a casa.",
      color: "text-purple-500",
    },
    {
      icon: Wifi,
      title: "Rede Mesh Potente",
      description: "Cobertura WiFi completa em todos os cômodos com alta velocidade e estabilidade.",
      color: "text-secondary",
    },
    {
      icon: Zap,
      title: "Gestão de Energia",
      description: "Monitore e otimize o consumo elétrico em tempo real, reduzindo custos significativamente.",
      color: "text-amber-500",
    },
  ];

  return (
    <section id="solutions" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16 animate-fade-in">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">
            Nossas <span className="bg-gradient-primary bg-clip-text text-transparent">Soluções</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Tecnologia PoE (Power over Ethernet) para transformar cada aspecto da sua casa. 
            Uma única infraestrutura para alimentação e comunicação de todos os dispositivos.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {solutions.map((solution, index) => (
            <Card 
              key={solution.title}
              className="group hover:shadow-lg-custom transition-all duration-300 hover:-translate-y-2 animate-fade-in border-border overflow-hidden"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              {solution.image && (
                <div className="h-48 overflow-hidden">
                  <img 
                    src={solution.image} 
                    alt={solution.title}
                    className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                  />
                </div>
              )}
              <CardContent className="p-6">
                <div className="flex items-center space-x-4 mb-4">
                  <div className={`p-3 rounded-lg bg-primary/10 ${solution.color}`}>
                    <solution.icon className="w-6 h-6" />
                  </div>
                  <h3 className="text-xl font-semibold">{solution.title}</h3>
                </div>
                <p className="text-muted-foreground">{solution.description}</p>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Solutions;
