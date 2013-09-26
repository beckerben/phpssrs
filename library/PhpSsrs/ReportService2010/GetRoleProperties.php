<?php

namespace PhpSsrs\ReportService2010;

class GetRoleProperties
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $SiteUrl
   * @access public
   */
  public $SiteUrl = null;

  /**
   * 
   * @param string $Name
   * @param string $SiteUrl
   * @access public
   */
  public function __construct($Name, $SiteUrl)
  {
    $this->Name = $Name;
    $this->SiteUrl = $SiteUrl;
  }

}