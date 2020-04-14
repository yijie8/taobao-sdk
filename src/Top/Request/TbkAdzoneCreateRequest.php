<?php
namespace Tbsdk\Top\Request;
/**
 * TOP API: taobao.time.get request
 * 
 * @author auto create
 * @since 1.0, 2016.10.12
 */
class TbkAdzoneCreateRequest
{
	/** 
	 * 网站ID
	 **/
	private $siteId;
	
	/** 
	 * 广告位名称，最大长度64字符
	 **/
	private $adzoneName;

	private $apiParas = array();
	
	public function setSiteId($siteId)
	{
		$this->siteId = $siteId;
		$this->apiParas["site_id"] = $siteId;
	}

	public function getSiteId()
	{
		return $this->siteId;
	}

	public function setAdzoneName($adzoneName)
	{
		$this->adzoneName = $adzoneName;
		$this->apiParas["adzone_name"] = $adzoneName;
	}

	public function getAdzoneName()
	{
		return $this->adzoneName;
	}


	public function getApiMethodName()
	{
		return "taobao.tbk.adzone.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->siteId,"siteId");
		RequestCheckUtil::checkNotNull($this->adzoneName,"adzoneName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
