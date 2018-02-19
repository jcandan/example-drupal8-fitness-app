<?php

namespace Drupal\example_fitness\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Exercise entities.
 */
class ExerciseEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
