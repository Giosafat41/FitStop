<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corsi FitStop</title>
</head>
<body>
    <h1>I nostri corsi</h1>
    <ul>
        {foreach from=$corsi item=corsocorso}
            <li>
                <strong>{$corsocorso.nome}</strong>: {$corsocorso.descrizione}
            </li>
        {/foreach}
    </ul>
</body>
</html>
