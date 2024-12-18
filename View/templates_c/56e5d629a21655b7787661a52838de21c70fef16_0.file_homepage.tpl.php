<?php
/* Smarty version 5.4.2, created on 2024-12-15 14:42:37
  from 'file:homepage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675edccd34eb08_68708134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56e5d629a21655b7787661a52838de21c70fef16' => 
    array (
      0 => 'homepage.tpl',
      1 => 1734270152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675edccd34eb08_68708134 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\FitStop\\View\\templates';
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitStop - Homepage</title>
    <!-- Collegamento al file CSS -->
    <link rel="stylesheet" href="View/templates/styleHome.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <h1>Benvenuti a <span>FitStop</span></h1>
        <!-- Pulsante Accedi/Registrati -->
        <div class="login-btn">
            <a href="login.php" class="btn">Accedi / Registrati</a>
        </div>
    </header>

    <!-- Sezione "La nostra storia" -->
    <section class="storia">
        <div class="storia-content">
            <h2>La nostra storia</h2>
            <p>
               Fondata nel 2024, la palestra FitStop nasce dalla passione per il benessere fisico e mentale, con l'obiettivo di offrire a tutti un luogo dove poter crescere, migliorare e sentirsi bene con se stessi. I nostri fondatori, un gruppo di appassionati di fitness e salute, avevano una visione chiara: creare un ambiente inclusivo, motivante e sicuro, dove ogni individuo potesse perseguire i propri obiettivi, indipendentemente dal livello di esperienza.

Da allora, FitStop è cresciuta rapidamente, diventando un punto di riferimento nella comunità locale. Abbiamo investito costantemente in attrezzature moderne, programmi di allenamento innovativi e formazione continua per i nostri istruttori. Ciò che ci distingue è l'approccio personalizzato: ascoltiamo le esigenze dei nostri membri e offriamo soluzioni su misura per aiutarli a raggiungere i loro traguardi.

Unisciti a noi e scopri come FitStop può aiutarti a raggiungere il tuo massimo potenziale!
            </p>
        </div>
        <div class="storia-image">
            <img src="View/images/logo.png" alt="La nostra palestra">
        </div>
    </section>

    <!-- Sezioni Corsi, Abbonamenti e Negozio -->
    <section class="info-sections">
        <div class="info-box">
            <img src="View/images/corsi.jpg" alt="Corsi">
            <h3>Corsi</h3>
            <p>Scopri i nostri corsi di gruppo: yoga, pilates, spinning e tanto altro per ogni livello!</p>
        </div>
        <div class="info-box">
            <img src="View/images/abbonamenti.jpg" alt="Abbonamenti">
            <h3>Abbonamenti</h3>
            <p>Trova l'abbonamento su misura per te e inizia a raggiungere i tuoi obiettivi.</p>
        </div>
        <div class="info-box">
            <img src="View/images/negozio.jpg" alt="Negozio">
            <h3>Negozio</h3>
            <p>Acquista abbigliamento e accessori di alta qualità per i tuoi allenamenti.</p>
        </div>
    </section>
</body>
</html>
<?php }
}
