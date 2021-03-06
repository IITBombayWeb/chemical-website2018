<?php

namespace Drupal\search_api_solr;

use Drupal\search_api\Processor\ProcessorInterface;

/**
 * Provides an interface for Search API Solr processor plugins.
 *
 * Processors can act at many locations in the overall Search API process. These
 * locations are subsumed under the label "Stages" and defined by the STAGE_*
 * constants on this interface. A processor should take care to clearly define
 * for which stages it should run, in addition to implementing the corresponding
 * methods.
 *
 * @see \Drupal\search_api\Annotation\SearchApiProcessor
 * @see \Drupal\search_api\Processor\ProcessorPluginManager
 * @see \Drupal\search_api\Processor\ProcessorPluginBase
 * @see plugin_api
 */
interface SolrProcessorInterface extends ProcessorInterface {

  /**
   * Encode a streaming expression value.
   *
   * @param string $value
   *
   * @return string|NULL
   */
  public function encodeStreamingExpressionValue(string $value);

  /**
   * Decode a streaming expression value.
   *
   * @param string $value
   *
   * @return string|NULL
   */
  public function decodeStreamingExpressionValue(string $value);

}
