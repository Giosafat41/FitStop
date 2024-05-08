<?php

require 'smarty/libs/Smarty.class.php';

class View extends Smarty {

    public function __construct() {
        parent::__construct();

        global $base_dir_smarty;  // variabile definita nel file config.inc.php

        // directory dei template
        $this->setTemplateDir( $base_dir_smarty . '/templates');   
        
        // directory dove Smarty trans-compila il codice dei template in codice php
        $this->setCompileDir( $base_dir_smarty . '/templates_c');  
        
        // altre dir non strettamente necessarie per un uso basico di Smarty
        $this->setCacheDir( $base_dir_smarty . '/cache');
        $this->setConfigDir( $base_dir_smarty . '/configs');	

    }


    private function setTemplate( $template ) {
	    
        $this->display( $template );
    }


    private function setDataIntoTemplate( $reference, $data  ) {

        $this->assign( $reference, $data );

    }  


    public function showResults( $data  ) {

         $this->setDataIntoTemplate('results', $data);
         //$this->setTemplate('nome_template.tpl');
         $this->setTemplate('mytemplate.tpl');

    } 

}

?>