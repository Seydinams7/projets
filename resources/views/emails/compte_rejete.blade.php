<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'ouverture de compte rejetée</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #dc3545; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f8f9fa; }
        .reason-box { background-color: #fff3cd; border: 1px solid #ffeaa7; padding: 15px; margin: 15px 0; border-radius: 5px; }
        .footer { text-align: center; padding: 20px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Demande d'ouverture de compte rejetée</h2>
        </div>
        
        <div class="content">
            <p>Bonjour {{ $compte->user->name ?? 'Cher client' }},</p>
            
            <p>Nous vous informons que votre demande d'ouverture de compte bancaire de type <strong>{{ ucfirst($compte->type_compte) }}</strong> a été examinée et malheureusement rejetée.</p>
            
            @if($raison)
                <div class="reason-box">
                    <h4>Raison du rejet :</h4>
                    <p>{{ $raison }}</p>
                </div>
            @endif
            
            <p>Nous vous encourageons à corriger les éléments mentionnés ci-dessus et à soumettre une nouvelle demande si vous le souhaitez.</p>
            
            <p>Pour toute question ou clarification, n'hésitez pas à nous contacter.</p>
            
            <p>Cordialement,<br>
            L'équipe de gestion bancaire</p>
        </div>
        
        <div class="footer">
            <p><small>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</small></p>
        </div>
    </div>
</body>
</html>
