<?php
namespace Tbsdk\Top\Request;
/**
 * TOP API: taobao.time.get request
 * 
 * @author auto create
 * @since 1.0, 2016.10.12
 */
class ItemcatsGetRequest
{
	/** 
	 * 本级
	 **/
	private $cids;
	
	/** 
	 * 上级
	 **/
	private $parentCid;

	private $fields;

	private $apiParas = array();
	
	public function setCids($cids)
	{
		$this->cids = $cids;
		$this->apiParas["cids"] = $cids;
	}

	public function getCids()
	{
		return $this->cids;
	}

	public function setParentCid($parentCid)
	{
		$this->parentCid = $parentCid;
		$this->apiParas["parent_cid"] = $parentCid;
		//print_r($this->apiParas);
	}

	public function getParentCid()
	{
		return $this->parentCid;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}
	public function getFields()
	{
		return $this->fields;
	}


	public function getApiMethodName()
	{
		return "taobao.itemcats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cids,"cids");
		RequestCheckUtil::checkNotNull($this->parentCid,"parentCid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
