<?php

namespace PhpSsrs\ReportingService2006;

class GetPolicies
{

  /**
   * 
   * @var string $Item
   * @access public
   */
  public $Item = null;

  /**
   * 
   * @param string $Item
   * @access public
   */
  public function __construct($Item)
  {
    $this->Item = $Item;
  }

}