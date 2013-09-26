<?php

namespace PhpSsrs\ReportService2010;

class PrepareQueryResponse
{

  /**
   * 
   * @var DataSetDefinition $DataSettings
   * @access public
   */
  public $DataSettings = null;

  /**
   * 
   * @var boolean $Changed
   * @access public
   */
  public $Changed = null;

  /**
   * 
   * @var String1[] $ParameterNames
   * @access public
   */
  public $ParameterNames = null;

  /**
   * 
   * @param DataSetDefinition $DataSettings
   * @param boolean $Changed
   * @param String1[] $ParameterNames
   * @access public
   */
  public function __construct($DataSettings, $Changed, $ParameterNames)
  {
    $this->DataSettings = $DataSettings;
    $this->Changed = $Changed;
    $this->ParameterNames = $ParameterNames;
  }

}
