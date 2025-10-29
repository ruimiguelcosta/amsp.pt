import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Card, CardContent } from "@/components/ui/card";
import { Zap, CheckCircle } from "lucide-react";
import { useState } from "react";
import { useToast } from "@/hooks/use-toast";
import { z } from "zod";

const emailSchema = z.object({
  email: z.string().trim().email({ message: "Email inválido" }).max(255, { message: "Email muito longo" }),
  name: z.string().trim().min(2, { message: "Nome muito curto" }).max(100, { message: "Nome muito longo" }),
});

const EarlyAccess = () => {
  const { toast } = useToast();
  const [formData, setFormData] = useState({ email: "", name: "" });
  const [isSubmitting, setIsSubmitting] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitting(true);

    try {
      const validated = emailSchema.parse(formData);
      
      toast({
        title: "Cadastro realizado com sucesso!",
        description: "Você receberá acesso prioritário à nossa tecnologia PoE.",
      });
      
      setFormData({ email: "", name: "" });
    } catch (error) {
      if (error instanceof z.ZodError) {
        toast({
          title: "Erro no cadastro",
          description: error.errors[0].message,
          variant: "destructive",
        });
      }
    } finally {
      setIsSubmitting(false);
    }
  };

  const benefits = [
    "Acesso antecipado às soluções PoE",
    "Desconto exclusivo na instalação",
    "Consultoria gratuita personalizada",
    "Suporte técnico prioritário",
  ];

  return (
    <section className="py-20 bg-gradient-dark text-primary-foreground relative overflow-hidden">
      {/* Background decoration */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-10 left-10 w-72 h-72 bg-primary rounded-full blur-3xl"></div>
        <div className="absolute bottom-10 right-10 w-96 h-96 bg-secondary rounded-full blur-3xl"></div>
      </div>

      <div className="container mx-auto px-4 relative z-10">
        <div className="max-w-4xl mx-auto">
          <div className="text-center mb-12 animate-fade-in">
            <div className="inline-flex items-center justify-center w-16 h-16 bg-primary/20 rounded-full mb-6">
              <Zap className="w-8 h-8 text-primary" />
            </div>
            <h2 className="text-4xl md:text-5xl font-bold mb-4">
              Seja Pioneiro em Tecnologia <span className="bg-gradient-primary bg-clip-text text-transparent">PoE</span>
            </h2>
            <p className="text-xl text-primary-foreground/90 max-w-2xl mx-auto">
              Cadastre-se agora e tenha acesso prioritário à revolução das casas inteligentes com Power over Ethernet. 
              Uma única infraestrutura para dados e energia!
            </p>
          </div>

          <Card className="bg-primary-foreground/5 backdrop-blur-sm border-primary-foreground/20 animate-fade-in-up">
            <CardContent className="p-8">
              <div className="grid md:grid-cols-2 gap-8">
                {/* Benefits List */}
                <div className="space-y-4">
                  <h3 className="text-2xl font-semibold mb-6">Benefícios Exclusivos:</h3>
                  {benefits.map((benefit, index) => (
                    <div key={index} className="flex items-start space-x-3">
                      <CheckCircle className="w-6 h-6 text-accent flex-shrink-0 mt-1" />
                      <span className="text-primary-foreground/90">{benefit}</span>
                    </div>
                  ))}
                </div>

                {/* Form */}
                <div>
                  <h3 className="text-2xl font-semibold mb-6">Garanta Sua Vaga:</h3>
                  <form onSubmit={handleSubmit} className="space-y-4">
                    <div>
                      <Input
                        type="text"
                        value={formData.name}
                        onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                        placeholder="Seu nome completo"
                        required
                        maxLength={100}
                        className="bg-primary-foreground/10 border-primary-foreground/30 text-primary-foreground placeholder:text-primary-foreground/50"
                      />
                    </div>

                    <div>
                      <Input
                        type="email"
                        value={formData.email}
                        onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                        placeholder="seu@email.com"
                        required
                        maxLength={255}
                        className="bg-primary-foreground/10 border-primary-foreground/30 text-primary-foreground placeholder:text-primary-foreground/50"
                      />
                    </div>

                    <Button 
                      type="submit" 
                      className="w-full bg-primary hover:bg-primary/90 text-primary-foreground" 
                      size="lg"
                      disabled={isSubmitting}
                    >
                      {isSubmitting ? "Processando..." : "Quero Acesso Prioritário"}
                    </Button>

                    <p className="text-sm text-primary-foreground/60 text-center">
                      Suas informações estão seguras. Sem spam.
                    </p>
                  </form>
                </div>
              </div>
            </CardContent>
          </Card>

          <div className="mt-12 text-center">
            <p className="text-primary-foreground/70 text-lg">
              Vagas limitadas para instalação em <span className="font-bold text-primary">2025</span>
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default EarlyAccess;
