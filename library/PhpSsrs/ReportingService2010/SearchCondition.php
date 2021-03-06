<?php

namespace PhpSsrs\ReportingService2010;

class SearchCondition
{

  /**
   * 
   * @var ConditionEnum $Condition
   * @access public
   */
  public $Condition = null;

  /**
   * 
   * @var String[] $Values
   * @access public
   */
  public $Values = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @param ConditionEnum $Condition
   * @param String[] $Values
   * @param string $Name
   * @access public
   */
  public function __construct($Condition = null, $Values = null, $Name = null)
  {
    $this->Condition = $Condition;
    $this->Values = $Values;
    $this->Name = $Name;
  }

}
