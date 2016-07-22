<?php
/**
 * @file
 * Contains \Drupal\hello_dco\Controller\HelloController.
 */

namespace Drupal\hello_dco\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, Drupal Camp Ottawa 2016!'),
    );
  }
}