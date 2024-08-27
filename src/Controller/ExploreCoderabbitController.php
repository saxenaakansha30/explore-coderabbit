<?php

declare(strict_types=1);

namespace Drupal\explore_coderabbit\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Explore CodeRabbit routes.
 */
final class ExploreCoderabbitController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
