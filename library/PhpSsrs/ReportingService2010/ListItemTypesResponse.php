<?php

namespace PhpSsrs\ReportingService2010;

class ListItemTypesResponse
{

  /**
   * 
   * @var String1[] $ListItemTypesResult
   * @access public
   */
  public $ListItemTypesResult = null;

  /**
   * 
   * @param String1[] $ListItemTypesResult
   * @access public
   */
  public function __construct($ListItemTypesResult = null)
  {
    $this->ListItemTypesResult = $ListItemTypesResult;
  }

}
