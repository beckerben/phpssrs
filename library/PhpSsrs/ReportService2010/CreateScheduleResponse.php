<?php

namespace PhpSsrs\ReportService2010;

class CreateScheduleResponse
{

  /**
   * 
   * @var string $ScheduleID
   * @access public
   */
  public $ScheduleID = null;

  /**
   * 
   * @param string $ScheduleID
   * @access public
   */
  public function __construct($ScheduleID)
  {
    $this->ScheduleID = $ScheduleID;
  }

}
