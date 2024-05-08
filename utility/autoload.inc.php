<?php

// questa vecchia versione di __autoload() va in conflitto
// con l'autoloader di smarty 
//
//     function __autoload($className) {
//         include( "classi/$className" . ".class.php" );
//     }


function my_autoloader($className) {
	if ( $className == 'Smarty') {
       include_once( 'smarty-libs/Smarty.class.php' );
	} else { 
        $first = $className[0];
        if ( $first == 'E') {
           include_once( 'Entity/'. $className . '.class.php' ); 
        } elseif ($first == 'F') {
           include_once( 'Foundation/'. $className . '.class.php' ); 
        } elseif ( $first == 'V') {
           include_once( 'View/'. $className . '.class.php' );
        }
    }
}

spl_autoload_register('my_autoloader');

?>
