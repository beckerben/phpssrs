<?php

namespace PhpSsrs\ReportService2010;

class CreateDataSourceResponse
{

  /**
   * 
   * @var CatalogItem $ItemInfo
   * @access public
   */
  public $ItemInfo = null;

  /**
   * 
   * @param CatalogItem $ItemInfo
   * @access public
   */
  public function __construct($ItemInfo)
  {
    $this->ItemInfo = $ItemInfo;
  }

}
