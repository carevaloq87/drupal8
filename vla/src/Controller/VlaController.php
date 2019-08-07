<?php
/**
 * @file
 * Contains \Drupal\vla\VlaController.
 */
namespace Drupal\vla\Controller;

use Drupal\Core\Controller\ControllerBase;

class VlaController extends ControllerBase
{
    public function content()
    {
        return array(
            '#markup' => '' . t('Hello there!!!') . '',
        );
    }
}
