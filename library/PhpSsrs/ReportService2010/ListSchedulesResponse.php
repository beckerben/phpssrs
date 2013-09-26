<?php

namespace PhpSsrs\ReportService2010;

class ListSchedulesResponse
{

  /**
   * 
   * @var Schedule[] $Schedules
   * @access public
   */
  public $Schedules = null;

  /**
   * 
   * @param Schedule[] $Schedules
   * @access public
   */
  public function __construct($Schedules)
  {
    $this->Schedules = $Schedules;
  }

}
