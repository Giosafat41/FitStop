<?php
include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', 'George Smith');
$smarty->assign('address', '32nd Avenue, New York');

// display it
$smarty->display('mytemplate.tpl');
?>