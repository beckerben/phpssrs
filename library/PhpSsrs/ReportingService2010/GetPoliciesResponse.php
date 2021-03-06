<?php

namespace PhpSsrs\ReportingService2010;

class GetPoliciesResponse
{

  /**
   * 
   * @var Policy[] $Policies
   * @access public
   */
  public $Policies = null;

  /**
   * 
   * @var boolean $InheritParent
   * @access public
   */
  public $InheritParent = null;

  /**
   * 
   * @param Policy[] $Policies
   * @param boolean $InheritParent
   * @access public
   */
  public function __construct($Policies = null, $InheritParent = null)
  {
    $this->Policies = $Policies;
    $this->InheritParent = $InheritParent;
  }

}
