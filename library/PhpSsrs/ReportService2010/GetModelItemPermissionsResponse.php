<?php

namespace PhpSsrs\ReportService2010;

class GetModelItemPermissionsResponse
{

  /**
   * 
   * @var String1[] $Permissions
   * @access public
   */
  public $Permissions = null;

  /**
   * 
   * @param String1[] $Permissions
   * @access public
   */
  public function __construct($Permissions)
  {
    $this->Permissions = $Permissions;
  }

}
