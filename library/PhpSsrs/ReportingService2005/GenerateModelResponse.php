<?php

namespace PhpSsrs\ReportingService2005;

class GenerateModelResponse
{

  /**
   * 
   * @var Warning[] $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param Warning[] $Warnings
   * @access public
   */
  public function __construct($Warnings = null)
  {
    $this->Warnings = $Warnings;
  }

}
