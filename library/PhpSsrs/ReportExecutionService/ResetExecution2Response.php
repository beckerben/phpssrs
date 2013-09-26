<?php

namespace PhpSsrs\ReportExecutionService;

class ResetExecution2Response
{

  /**
   * 
   * @var ExecutionInfo2 $executionInfo
   * @access public
   */
  public $executionInfo = null;

  /**
   * 
   * @param ExecutionInfo2 $executionInfo
   * @access public
   */
  public function __construct($executionInfo)
  {
    $this->executionInfo = $executionInfo;
  }

}