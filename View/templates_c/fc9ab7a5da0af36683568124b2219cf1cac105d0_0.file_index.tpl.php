<?php
/* Smarty version 5.4.2, created on 2024-12-14 22:16:30
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675df5ae3e5490_48131283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9ab7a5da0af36683568124b2219cf1cac105d0' => 
    array (
      0 => 'index.tpl',
      1 => 1734210874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675df5ae3e5490_48131283 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\FitStop\\View\\templates';
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getValue('nome_palestra');?>
 - Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .sezione {
            margin: 20px 0;
        }
        .sezione a {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Benvenuti a <?php echo $_smarty_tpl->getValue('nome_palestra');?>
!</h1>
    </header>
    <div class="container">
        <section class="storia">
            <h2>La nostra storia</h2>
            <p><?php echo $_smarty_tpl->getValue('storia_palestra');?>
</p>
        </section>
        <section class="sezioni">
            <h2>Scopri di più</h2>
            <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sezioni'), 'sezione');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sezione')->value) {
$foreach0DoElse = false;
?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('sezione')['link'];?>
"><?php echo $_smarty_tpl->getValue('sezione')['nome'];?>
</a></li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </section>
    </div>
</body>
</html>
<?php }
}
