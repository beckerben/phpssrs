<?php

namespace PhpSsrs\ReportService2010;

class CreateDataSource
{

  /**
   * 
   * @var string $DataSource
   * @access public
   */
  public $DataSource = null;

  /**
   * 
   * @var string $Parent
   * @access public
   */
  public $Parent = null;

  /**
   * 
   * @var boolean $Overwrite
   * @access public
   */
  public $Overwrite = null;

  /**
   * 
   * @var DataSourceDefinition $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $DataSource
   * @param string $Parent
   * @param boolean $Overwrite
   * @param DataSourceDefinition $Definition
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($DataSource, $Parent, $Overwrite, $Definition, $Properties)
  {
    $this->DataSource = $DataSource;
    $this->Parent = $Parent;
    $this->Overwrite = $Overwrite;
    $this->Definition = $Definition;
    $this->Properties = $Properties;
  }

}
