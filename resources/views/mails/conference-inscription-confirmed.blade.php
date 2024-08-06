<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Email</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Light background color */
        }

        .email-container {
            padding: 24px;
            background-color: #ffffff; /* White background for the container */
            border: 1px solid #e0e0e0; /* Light gray border */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            max-width: 600px;
            margin: 20px auto;
        }

        .greeting {
            font-size: 1.25rem; /* Larger font size */
            font-weight: 600; /* Semi-bold */
            color: #333333; /* Dark text color */
        }

        .intro {
            margin-top: 8px;
            color: #555555; /* Medium gray text color */
        }

        .credentials {
            margin-top: 16px;
            padding-left: 0;
            list-style-type: none;
            color: #333333; /* Dark text color */
        }

        .credentials li {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }

        .label {
            font-weight: 500; /* Medium font weight */
        }

        .value {
            font-weight: 600; /* Semi-bold font weight */
        }

        .closing {
            margin-top: 16px;
            color: #555555; /* Medium gray text color */
        }

        .signature {
            font-weight: 600; /* Semi-bold */
        }
    </style>
</head>
<body>
    <div class="email-container">
        <p class="greeting">Bonjour {{ $name }},</p>
        <p class="intro">
            Votre inscription aux JPN 2024 de la Société Marocaine de Neurologie est confirmée.
            Vous pouvez dès maintenant accéder à votre espace sur notre site en utilisant vos coordonnées :
        </p>
        <ul class="credentials">
            <li>
                <span class="label">Email :</span>
                <strong class="value">{{ $email }}</strong>
            </li>
            <li>
                <span class="label">Mot de passe :</span>
                <strong class="value">{{ $password }}</strong>
            </li>
        </ul>
        <p class="closing">
            Vous pouvez consulter le programme de ces journées, les conférences des éditions précédentes ainsi que d'autres rubriques.
            Vous pouvez également soumettre vos résumés pour les e-posters du congrès, en suivant les instructions aux auteurs et présentateurs.
            <br><br>
            À très bientôt, <br>
            <span class="signature">Secrétariat de la Société Marocaine de Neurologie.</span>
        </p>
    </div>
</body>
</html>
