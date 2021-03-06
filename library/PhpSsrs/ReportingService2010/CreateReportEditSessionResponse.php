<?php

namespace PhpSsrs\ReportingService2010;

class CreateReportEditSessionResponse
{

  /**
   * 
   * @var string $EditSessionID
   * @access public
   */
  public $EditSessionID = null;

  /**
   * 
   * @var Warning[] $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param string $EditSessionID
   * @param Warning[] $Warnings
   * @access public
   */
  public function __construct($EditSessionID = null, $Warnings = null)
  {
    $this->EditSessionID = $EditSessionID;
    $this->Warnings = $Warnings;
  }

}
