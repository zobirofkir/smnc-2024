<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 0 0 10px;
        }
        .content ul {
            padding-left: 20px;
        }
        .content li {
            margin-bottom: 5px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 0 0 8px 8px;
        }
        .footer p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            font-size: 16px;
            color: #fff;
            background-color: #dbecff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
        .button:hover {
            background-color: #6ab2ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Vérification de Paiement</h1>
        </div>
        <div class="content">
            <p>Bonjour,</p>
            <p>Votre paiement a été reçu. Voici les détails:</p>
            <ul>
                <li><strong>Status:</strong> Inscription: <ul> <li><strong>{{ $payment->status }}</strong></li> </ul></li>
                <li><strong>Hébergement:</strong> <strong>{{ $payment->depart_day }}</strong> <ul> <li>Chambre: <strong>{{ $payment->room }}</strong></li> <li>Nuits: <strong>{{ $payment->nights }}</strong></li> </ul></li>
                <li><strong>Colocataire:</strong> <strong>{{ $payment->roommate }}</strong></li>
                <li><strong>Accompagnement:</strong> <ul> <li>Repas: <strong>{{ $payment->meals }}</strong></li> </ul></li>
                <li><strong>Montant:</strong> {{ $payment->total }}</li>
                <li><strong>Reçu:</strong> <a href="{{ asset('payments/' . $payment->bank_transfer) }}" class="button">Télécharger le reçu</a></li>
            </ul>
            <p>Merci!</p>
        </div>
        <div class="footer">
            <p>Nous vous remercions de votre paiement.</p>
        </div>
    </div>
</body>
</html>
