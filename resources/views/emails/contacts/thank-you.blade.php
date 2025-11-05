<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pelo seu contacto - AMSP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
            color: #333333;
            -webkit-font-smoothing: antialiased;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
        }
        .header {
            padding: 48px 32px 32px;
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
        }
        .logo {
            max-width: 160px;
            height: auto;
            margin-bottom: 24px;
        }
        .content {
            padding: 48px 32px;
        }
        .greeting {
            font-size: 24px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 24px;
            line-height: 1.3;
        }
        .text {
            font-size: 16px;
            color: #666666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .text strong {
            color: #1a1a1a;
            font-weight: 600;
        }
        .divider {
            height: 1px;
            background-color: #e5e5e5;
            margin: 32px 0;
        }
        .info-box {
            background-color: #f8f9fa;
            padding: 24px;
            border-radius: 8px;
            margin-top: 32px;
        }
        .info-item {
            font-size: 15px;
            color: #333333;
            margin-bottom: 12px;
            line-height: 1.6;
        }
        .info-item:last-child {
            margin-bottom: 0;
        }
        .info-label {
            color: #0ea5e9;
            font-weight: 600;
            display: inline-block;
            min-width: 80px;
        }
        .footer {
            padding: 32px;
            text-align: center;
            background-color: #f8f9fa;
            border-top: 1px solid #e5e5e5;
        }
        .footer-text {
            font-size: 14px;
            color: #666666;
            margin-bottom: 8px;
        }
        .footer-link {
            color: #0ea5e9;
            text-decoration: none;
        }
        .footer-link:hover {
            text-decoration: underline;
        }
        .footer-small {
            font-size: 12px;
            color: #999999;
            margin-top: 24px;
        }
        @media only screen and (max-width: 600px) {
            .email-wrapper {
                margin: 0;
                width: 100%;
            }
            .header, .content, .footer {
                padding: 32px 24px;
            }
            .greeting {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="header">
            <img src="{{ asset('images/logo_amsp_horizontal.png') }}" alt="AMSP" class="logo">
        </div>
        
        <div class="content">
            <h1 class="greeting">Obrigado pelo seu contacto</h1>
            
            <p class="text">Caro/a <strong>{{ $contact->name }}</strong>,</p>
            
            <p class="text">Recebemos a sua mensagem e agradecemos o seu interesse na AMSP. A nossa equipa irá analisar o seu contacto e responder-lhe-á o mais brevemente possível.</p>
            
            <div class="divider"></div>
            
            <p class="text" style="margin-bottom: 0;">A nossa equipa irá contactá-lo/a nos próximos dias úteis para discutir as suas necessidades e como podemos ajudá-lo/a a transformar a sua casa com tecnologia PoE.</p>
            
            <div class="info-box">
                <div class="info-item">
                    <span class="info-label">Nome:</span>{{ $contact->name }}
                </div>
                <div class="info-item">
                    <span class="info-label">Email:</span>{{ $contact->email }}
                </div>
                <div class="info-item">
                    <span class="info-label">Telefone:</span>{{ $contact->phone }}
                </div>
                <div class="info-item" style="margin-top: 16px;">
                    <div style="margin-bottom: 4px;"><span class="info-label">Mensagem:</span></div>
                    <div style="color: #666666; margin-left: 0;">{{ $contact->message }}</div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p class="footer-text"><strong>AMSP</strong></p>
            <p class="footer-text">
                <a href="mailto:geral@amsp.pt" class="footer-link">geral@amsp.pt</a>
            </p>
            <p class="footer-text">(+351) 926 289 876 | (+351) 21 145 1873</p>
            <p class="footer-small">Este é um email automático. Por favor, não responda diretamente a este email.</p>
        </div>
    </div>
</body>
</html>