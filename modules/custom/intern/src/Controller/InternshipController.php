<?php

/**
 * Controller for intern module
 */

namespace Drupal\intern\Controller;

use Drupal\Core\Controller\ControllerBase;

class InternshipController extends ControllerBase {

    
    
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => '<div> Hello Class of Summer 2019 </div>',
        );
    }

    public function dynamicContent($count) {
        createNode($count);
        return array(
          '#type' => 'markup',
          '#markup' => '<div> Hello Class of Summer '.$count.'</div>',
        );

        //$node = \Drupal\node\Entity\Node::load($count);
    }












}