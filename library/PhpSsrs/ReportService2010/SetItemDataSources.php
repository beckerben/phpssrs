<?php

namespace PhpSsrs\ReportService2010;

class SetItemDataSources
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var DataSource[] $DataSources
   * @access public
   */
  public $DataSources = null;

  /**
   * 
   * @param string $ItemPath
   * @param DataSource[] $DataSources
   * @access public
   */
  public function __construct($ItemPath, $DataSources)
  {
    $this->ItemPath = $ItemPath;
    $this->DataSources = $DataSources;
  }

}
