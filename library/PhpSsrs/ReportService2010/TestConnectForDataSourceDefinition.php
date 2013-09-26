<?php

namespace PhpSsrs\ReportService2010;

class TestConnectForDataSourceDefinition
{

  /**
   * 
   * @var DataSourceDefinition $DataSourceDefinition
   * @access public
   */
  public $DataSourceDefinition = null;

  /**
   * 
   * @var string $UserName
   * @access public
   */
  public $UserName = null;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password = null;

  /**
   * 
   * @param DataSourceDefinition $DataSourceDefinition
   * @param string $UserName
   * @param string $Password
   * @access public
   */
  public function __construct($DataSourceDefinition, $UserName, $Password)
  {
    $this->DataSourceDefinition = $DataSourceDefinition;
    $this->UserName = $UserName;
    $this->Password = $Password;
  }

}