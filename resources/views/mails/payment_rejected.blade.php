<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejet de Paiement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #d9534f;
        }
        p {
            margin: 10px 0;
        }
        .footer {
            font-size: 0.9em;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rejet de Paiement</h1>

        <p>Bonjour {{ $payment->conferenceInscription->first_name }} {{ $payment->conferenceInscription->last_name }},</p>

        <p>Nous sommes désolés de vous informer que votre paiement pour l'inscription à la conférence a été rejeté.</p>

        <p>Complétez votre paiement.</p>

        <p>Si vous pensez que cette décision est incorrecte ou si vous avez des questions, veuillez nous contacter à l'adresse <a href="mailto:naima-bouslam@smn.ma">naima-bouslam@smn.ma</a>.</p>

        <p>Merci de votre compréhension.</p>

        <p>Bien cordialement,<br>
        L'Équipe de la Conférence</p>

    </div>
</body>
</html>
