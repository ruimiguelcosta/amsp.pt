import Navbar from "@/components/Navbar";
import Hero from "@/components/Hero";
import Solutions from "@/components/Solutions";
import Benefits from "@/components/Benefits";
import EarlyAccess from "@/components/EarlyAccess";
import Contact from "@/components/Contact";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen">
      <Navbar />
      <Hero />
      <Solutions />
      <Benefits />
      <EarlyAccess />
      <Contact />
      <Footer />
    </div>
  );
};

export default Index;
