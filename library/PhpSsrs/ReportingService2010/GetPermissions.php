<?php

namespace PhpSsrs\ReportingService2010;

class GetPermissions
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @param string $ItemPath
   * @access public
   */
  public function __construct($ItemPath = null)
  {
    $this->ItemPath = $ItemPath;
  }

}
