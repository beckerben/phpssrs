<?php

namespace PhpSsrs\ReportService2010;

class CreateCacheRefreshPlanResponse
{

  /**
   * 
   * @var string $CacheRefreshPlanID
   * @access public
   */
  public $CacheRefreshPlanID = null;

  /**
   * 
   * @param string $CacheRefreshPlanID
   * @access public
   */
  public function __construct($CacheRefreshPlanID)
  {
    $this->CacheRefreshPlanID = $CacheRefreshPlanID;
  }

}
