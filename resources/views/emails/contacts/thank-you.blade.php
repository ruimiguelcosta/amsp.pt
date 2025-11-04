<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pelo seu contacto - AMSP</title>
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
        .email-footer a {
            color: hsl(199 89% 48%);
            text-decoration: none;
        }
        .highlight-box {
            background: linear-gradient(135deg, hsl(199 89% 48% / 0.1), hsl(188 94% 57% / 0.1));
            border-left: 4px solid hsl(199 89% 48%);
            padding: 20px;
            margin: 30px 0;
            border-radius: 4px;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }
        .contact-info p {
            margin: 8px 0;
            color: #333333;
        }
        .contact-info strong {
            color: hsl(199 89% 48%);
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ asset('images/logo_amsp_horizontal.png') }}" alt="AMSP Logo">
        </div>
        
        <div class="email-content">
            <h1>Obrigado pelo seu contacto!</h1>
            
            <p>Caro/a <strong>{{ $contact->name }}</strong>,</p>
            
            <p>Recebemos a sua mensagem e agradecemos o seu interesse na AMSP. A nossa equipa irá analisar o seu contacto e responder-lhe-á o mais brevemente possível.</p>
            
            <div class="highlight-box">
                <p style="margin: 0; color: #333333;"><strong>O que acontece a seguir?</strong></p>
                <p style="margin: 10px 0 0 0; color: #666666;">A nossa equipa irá contactá-lo/a nos próximos dias úteis para discutir as suas necessidades e como podemos ajudá-lo/a a transformar a sua casa com tecnologia PoE.</p>
            </div>
            
            <div class="contact-info">
                <p><strong>Resumo do seu contacto:</strong></p>
                <p><strong>Nome:</strong> {{ $contact->name }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Telefone:</strong> {{ $contact->phone }}</p>
                <p><strong>Mensagem:</strong><br>{{ $contact->message }}</p>
            </div>
        </div>
        
        <div class="email-footer">
            <p><strong>AMSP - Automação e Gestão Inteligente</strong></p>
            <p>Email: <a href="mailto:geral@amsp.pt">geral@amsp.pt</a></p>
            <p>Telefone: (+351) 926 289 876 | (+351) 21 145 1873</p>
            <p style="margin-top: 20px; font-size: 12px; color: #999999;">
                Este é um email automático. Por favor, não responda diretamente a este email.
            </p>
        </div>
    </div>
</body>
</html>
