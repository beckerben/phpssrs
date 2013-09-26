<?php

namespace PhpSsrs\ReportService2010;

class CreateCatalogItemResponse
{

  /**
   * 
   * @var CatalogItem $ItemInfo
   * @access public
   */
  public $ItemInfo = null;

  /**
   * 
   * @var Warning[] $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param CatalogItem $ItemInfo
   * @param Warning[] $Warnings
   * @access public
   */
  public function __construct($ItemInfo, $Warnings)
  {
    $this->ItemInfo = $ItemInfo;
    $this->Warnings = $Warnings;
  }

}