import { CheckCircle2 } from "lucide-react";

const Benefits = () => {
  const benefits = [
    {
      title: "Economia de Energia",
      description: "Reduza até 40% no consumo elétrico com automação inteligente e gestão eficiente.",
    },
    {
      title: "Conforto Total",
      description: "Controle todos os sistemas da casa com comandos de voz ou pelo smartphone.",
    },
    {
      title: "Segurança Máxima",
      description: "Monitore sua casa de qualquer lugar e receba alertas instantâneos de atividades suspeitas.",
    },
    {
      title: "Valorização do Imóvel",
      description: "Casas inteligentes têm valorização até 20% superior no mercado imobiliário.",
    },
    {
      title: "Tecnologia PoE Avançada",
      description: "Power over Ethernet: uma única infraestrutura para alimentação elétrica e transmissão de dados, reduzindo custos e complexidade.",
    },
    {
      title: "Instalação Simplificada",
      description: "Sistema modular com tecnologia PoE que elimina a necessidade de múltiplas instalações elétricas, adaptando-se a qualquer residência em até 48 horas.",
    },
  ];

  return (
    <section className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16 animate-fade-in">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">
            Por que Escolher <span className="bg-gradient-accent bg-clip-text text-transparent">SmartHome</span>?
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Benefícios que transformam sua qualidade de vida
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          {benefits.map((benefit, index) => (
            <div 
              key={benefit.title}
              className="flex space-x-4 animate-fade-in-up p-6 rounded-lg hover:bg-muted/50 transition-colors"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              <div className="flex-shrink-0">
                <CheckCircle2 className="w-8 h-8 text-accent" />
              </div>
              <div>
                <h3 className="text-xl font-semibold mb-2">{benefit.title}</h3>
                <p className="text-muted-foreground">{benefit.description}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Benefits;
