<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de contact</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f5; font-family: Arial, Helvetica, sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f5; padding: 40px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden;">

                    <!-- En-tête -->
                    <tr>
                        <td style="background-color: #1a1a2e; padding: 30px 40px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px; letter-spacing: 0.5px;">
                                Glory Challenge
                            </h1>
                        </td>
                    </tr>

                    <!-- Corps du message -->
                    <tr>
                        <td style="padding: 40px;">
                            <h2 style="color: #1a1a2e; font-size: 20px; margin-top: 0;">
                                Bonjour {{ $contactMessage->name }},
                            </h2>

                            <p style="color: #444444; font-size: 15px; line-height: 1.6;">
                                Nous avons bien reçu votre message et nous vous remercions de nous avoir contactés.
                                Notre équipe reviendra vers vous dans les plus brefs délais.
                            </p>

                            <!-- Récap du message -->
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f9f9fb; border-left: 4px solid #f5a623; border-radius: 4px; margin: 24px 0;">
                                <tr>
                                    <td style="padding: 16px 20px;">
                                        <p style="margin: 0 0 8px 0; color: #888888; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">
                                            Votre message
                                        </p>
                                        <p style="margin: 0; color: #333333; font-size: 15px; line-height: 1.5;">
                                            {{ $contactMessage->message }}
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <p style="color: #444444; font-size: 15px; line-height: 1.6;">
                                À très bientôt,<br>
                                <strong>L'équipe Glory Challenge</strong>
                            </p>
                        </td>
                    </tr>

                    <!-- Pied de page -->
                    <tr>
                        <td style="background-color: #f4f4f5; padding: 20px 40px; text-align: center;">
                            <p style="color: #999999; font-size: 12px; margin: 0;">
                                Cotonou, Bénin — Glory Challenge Consulting
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
