<?php

namespace PhpSsrs\ReportingService2010;

class CatalogItem
{

  /**
   * 
   * @var string $ID
   * @access public
   */
  public $ID = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Path
   * @access public
   */
  public $Path = null;

  /**
   * 
   * @var string $VirtualPath
   * @access public
   */
  public $VirtualPath = null;

  /**
   * 
   * @var string $TypeName
   * @access public
   */
  public $TypeName = null;

  /**
   * 
   * @var int $Size
   * @access public
   */
  public $Size = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var boolean $Hidden
   * @access public
   */
  public $Hidden = null;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate = null;

  /**
   * 
   * @var dateTime $ModifiedDate
   * @access public
   */
  public $ModifiedDate = null;

  /**
   * 
   * @var string $CreatedBy
   * @access public
   */
  public $CreatedBy = null;

  /**
   * 
   * @var string $ModifiedBy
   * @access public
   */
  public $ModifiedBy = null;

  /**
   * 
   * @var Property[] $ItemMetadata
   * @access public
   */
  public $ItemMetadata = null;

  /**
   * 
   * @param string $ID
   * @param string $Name
   * @param string $Path
   * @param string $VirtualPath
   * @param string $TypeName
   * @param int $Size
   * @param string $Description
   * @param boolean $Hidden
   * @param dateTime $CreationDate
   * @param dateTime $ModifiedDate
   * @param string $CreatedBy
   * @param string $ModifiedBy
   * @param Property[] $ItemMetadata
   * @access public
   */
  public function __construct($ID = null, $Name = null, $Path = null, $VirtualPath = null, $TypeName = null, $Size = null, $Description = null, $Hidden = null, $CreationDate = null, $ModifiedDate = null, $CreatedBy = null, $ModifiedBy = null, $ItemMetadata = null)
  {
    $this->ID = $ID;
    $this->Name = $Name;
    $this->Path = $Path;
    $this->VirtualPath = $VirtualPath;
    $this->TypeName = $TypeName;
    $this->Size = $Size;
    $this->Description = $Description;
    $this->Hidden = $Hidden;
    $this->CreationDate = $CreationDate;
    $this->ModifiedDate = $ModifiedDate;
    $this->CreatedBy = $CreatedBy;
    $this->ModifiedBy = $ModifiedBy;
    $this->ItemMetadata = $ItemMetadata;
  }

}
