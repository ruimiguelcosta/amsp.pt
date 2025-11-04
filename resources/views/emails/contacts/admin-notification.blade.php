<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo contacto recebido - AMSP</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .email-header {
            background: linear-gradient(135deg, hsl(199 89% 48%), hsl(188 94% 57%));
            padding: 40px 20px;
            text-align: center;
        }
        .email-header img {
            max-width: 200px;
            height: auto;
        }
        .email-content {
            padding: 40px 30px;
            color: #333333;
        }
        .email-content h1 {
            color: hsl(199 89% 48%);
            font-size: 28px;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .email-content p {
            color: #666666;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .email-footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            border-top: 2px solid hsl(199 89% 48% / 0.1);
        }
        .email-footer p {
            color: #666666;
            font-size: 14px;
            margin: 5px 0;
        }
        .alert-box {
            background: linear-gradient(135deg, hsl(142 76% 36% / 0.1), hsl(199 89% 48% / 0.1));
            border-left: 4px solid hsl(142 76% 36%);
            padding: 20px;
            margin: 30px 0;
            border-radius: 4px;
        }
        .contact-details {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            margin-top: 30px;
            border: 1px solid hsl(199 89% 48% / 0.2);
        }
        .contact-details h2 {
            color: hsl(199 89% 48%);
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid hsl(199 89% 48% / 0.2);
        }
        .contact-details p {
            margin: 12px 0;
            color: #333333;
        }
        .contact-details strong {
            color: hsl(199 89% 48%);
            display: inline-block;
            min-width: 120px;
        }
        .message-box {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            padding: 15px;
            border-radius: 4px;
            margin-top: 15px;
            color: #333333;
            white-space: pre-wrap;
        }
        .timestamp {
            color: #999999;
            font-size: 14px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ asset('images/logo_amsp_horizontal.png') }}" alt="AMSP Logo">
        </div>
        
        <div class="email-content">
            <h1>Novo contacto recebido</h1>
            
            <div class="alert-box">
                <p style="margin: 0; color: #333333;"><strong>⚠️ Ação necessária:</strong> Um novo contacto foi submetido através do formulário do website.</p>
            </div>
            
            <div class="contact-details">
                <h2>Detalhes do Contacto</h2>
                
                <p><strong>Nome:</strong> {{ $contact->name }}</p>
                
                <p><strong>Email:</strong> <a href="mailto:{{ $contact->email }}" style="color: hsl(199 89% 48%); text-decoration: none;">{{ $contact->email }}</a></p>
                
                <p><strong>Telefone:</strong> <a href="tel:{{ $contact->phone }}" style="color: hsl(199 89% 48%); text-decoration: none;">{{ $contact->phone }}</a></p>
                
                <p><strong>Mensagem:</strong></p>
                <div class="message-box">{{ $contact->message }}</div>
                
                <div class="timestamp">
                    <p style="margin: 0;"><strong>Data:</strong> {{ $contact->created_at->format('d/m/Y H:i:s') }}</p>
                    <p style="margin: 5px 0 0 0;"><strong>ID do contacto:</strong> #{{ $contact->id }}</p>
                </div>
            </div>
            
            <p style="margin-top: 30px; color: #666666;">
                Por favor, entre em contacto com o cliente o mais brevemente possível para agendar uma demonstração ou responder às suas questões.
            </p>
        </div>
        
        <div class="email-footer">
            <p><strong>AMSP - Automação e Gestão Inteligente</strong></p>
            <p>Este é um email automático do sistema de gestão de contactos.</p>
        </div>
    </div>
</body>
</html>
