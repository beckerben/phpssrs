<?php

namespace PhpSsrs\ReportingService2010;

class GetSubscriptionProperties
{

  /**
   * 
   * @var string $SubscriptionID
   * @access public
   */
  public $SubscriptionID = null;

  /**
   * 
   * @param string $SubscriptionID
   * @access public
   */
  public function __construct($SubscriptionID = null)
  {
    $this->SubscriptionID = $SubscriptionID;
  }

}
