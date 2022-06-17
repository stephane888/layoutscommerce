<?php

namespace Drupal\layoutscommerce\Plugin\Layout;

use Drupal\layoutscommerce\Services\LayoutscommerceProductVariation;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LayoutscommerceSection extends FormatageModelsSection {
  /**
   *
   * @var LayoutscommerceProductVariation
   */
  protected $LayoutCommerceProductVariation = null;
  
  /**
   *
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->LayoutCommerceProductVariation = $container->get('layoutscommerce.product_variation');
    return $instance;
  }
  
}