<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo contacto recebido - AMSP</title>
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
        .title {
            font-size: 24px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 16px;
            line-height: 1.3;
        }
        .alert {
            font-size: 15px;
            color: #1a1a1a;
            margin-bottom: 32px;
            padding: 16px;
            background-color: #f8f9fa;
            border-left: 3px solid #0ea5e9;
            border-radius: 4px;
        }
        .text {
            font-size: 16px;
            color: #666666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .divider {
            height: 1px;
            background-color: #e5e5e5;
            margin: 32px 0;
        }
        .details-box {
            background-color: #f8f9fa;
            padding: 24px;
            border-radius: 8px;
            margin-top: 32px;
        }
        .detail-item {
            font-size: 15px;
            color: #333333;
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .detail-item:last-child {
            margin-bottom: 0;
        }
        .detail-label {
            color: #0ea5e9;
            font-weight: 600;
            display: inline-block;
            min-width: 100px;
        }
        .detail-link {
            color: #0ea5e9;
            text-decoration: none;
        }
        .detail-link:hover {
            text-decoration: underline;
        }
        .message-box {
            background-color: #ffffff;
            padding: 16px;
            border-radius: 4px;
            margin-top: 12px;
            color: #333333;
            white-space: pre-wrap;
            line-height: 1.6;
            border: 1px solid #e5e5e5;
        }
        .meta {
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #e5e5e5;
            font-size: 14px;
            color: #666666;
        }
        .meta-item {
            margin-bottom: 8px;
        }
        .meta-item:last-child {
            margin-bottom: 0;
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
        }
        @media only screen and (max-width: 600px) {
            .email-wrapper {
                margin: 0;
                width: 100%;
            }
            .header, .content, .footer {
                padding: 32px 24px;
            }
            .title {
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
            <h1 class="title">Novo contacto recebido</h1>
            
            <div class="alert">
                Um novo contacto foi submetido através do formulário do website.
            </div>
            
            <div class="details-box">
                <div class="detail-item">
                    <span class="detail-label">Nome:</span>{{ $contact->name }}
                </div>
                
                <div class="detail-item">
                    <span class="detail-label">Email:</span>
                    <a href="mailto:{{ $contact->email }}" class="detail-link">{{ $contact->email }}</a>
                </div>
                
                <div class="detail-item">
                    <span class="detail-label">Telefone:</span>
                    <a href="tel:{{ $contact->phone }}" class="detail-link">{{ $contact->phone }}</a>
                </div>
                
                <div class="detail-item" style="margin-top: 20px;">
                    <div style="margin-bottom: 8px;"><span class="detail-label">Mensagem:</span></div>
                    <div class="message-box">{{ $contact->message }}</div>
                </div>
                
                <div class="meta">
                    <div class="meta-item"><strong>Data:</strong> {{ $contact->created_at->format('d/m/Y H:i:s') }}</div>
                    <div class="meta-item"><strong>ID:</strong> #{{ $contact->id }}</div>
                </div>
            </div>
            
            <div class="divider"></div>
            
            <p class="text" style="margin-bottom: 0;">Por favor, entre em contacto com o cliente o mais brevemente possível para fornecer mais informações ou responder às suas questões.</p>
        </div>
        
        <div class="footer">
            <p class="footer-text"><strong>AMSP</strong> - Sistema de gestão de contactos</p>
        </div>
    </div>
</body>
</html>