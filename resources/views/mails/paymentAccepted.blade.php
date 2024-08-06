<!DOCTYPE html>
<html>
<head>
    <title>Payment Accepted</title>
</head>
<body>
    <h1>Payment Accepted</h1>
    <p>Dear {{ $payment->conferenceInscription->first_name }},</p>
    <p>Your payment of {{ $payment->total }} MAD has been accepted.</p>
    <p>Thank you for your payment.</p>
</body>
</html>
