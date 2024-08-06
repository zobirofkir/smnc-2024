<!DOCTYPE html>
<html>
<head>
    <title>Paiement Accepté</title>
</head>
<body>
    <h1>Paiement Accepté</h1>
    <p>Cher/Chère {{ $payment->conferenceInscription->first_name }},</p>
    <p>Votre paiement de {{ $payment->total }} MAD a été accepté.</p>
    <p>Merci pour votre paiement.</p>
</body>
</html>
