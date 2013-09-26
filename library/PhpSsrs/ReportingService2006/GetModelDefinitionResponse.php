<?php

namespace PhpSsrs\ReportingService2006;

class GetModelDefinitionResponse
{

  /**
   * 
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param base64Binary $Definition
   * @access public
   */
  public function __construct($Definition)
  {
    $this->Definition = $Definition;
  }

}