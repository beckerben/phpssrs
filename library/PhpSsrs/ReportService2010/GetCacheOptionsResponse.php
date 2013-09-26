<?php

namespace PhpSsrs\ReportService2010;

class GetCacheOptionsResponse
{

  /**
   * 
   * @var boolean $CacheItem
   * @access public
   */
  public $CacheItem = null;

  /**
   * 
   * @var ScheduleExpiration $ScheduleExpiration
   * @access public
   */
  public $ScheduleExpiration = null;

  /**
   * 
   * @var TimeExpiration $TimeExpiration
   * @access public
   */
  public $TimeExpiration = null;

  /**
   * 
   * @param boolean $CacheItem
   * @param ScheduleExpiration $ScheduleExpiration
   * @param TimeExpiration $TimeExpiration
   * @access public
   */
  public function __construct($CacheItem, $ScheduleExpiration, $TimeExpiration)
  {
    $this->CacheItem = $CacheItem;
    $this->ScheduleExpiration = $ScheduleExpiration;
    $this->TimeExpiration = $TimeExpiration;
  }

}