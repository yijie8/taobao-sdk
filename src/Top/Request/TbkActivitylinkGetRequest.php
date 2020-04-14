<?php
namespace Tbsdk\Top\Request;
/**
 * TOP API: taobao.tbk.activitylink.get request
 * 
 * @author auto create
 * @since 1.0, 2019.03.06
 */
class TbkActivitylinkGetRequest
{
	/** 
	 * 推广位id，mm_xx_xx_xx pid三段式中的第三段。adzone_id需属于appKey拥有者
	 **/
	private $adzoneId;
	
	/** 
	 * 1：PC，2：无线，默认：１
	 **/
	private $platform;
	
	/** 
	 * 官方活动ID，从官方活动页获取
	 **/
	private $promotionSceneId;
	
	/** 
	 * 渠道关系ID，仅适用于渠道推广场景
	 **/
	private $relationId;
	
	/** 
	 * 媒体平台下达人的淘客pid
	 **/
	private $subPid;
	
	/** 
	 * 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
	 **/
	private $unionId;
	
	private $apiParas = array();
	
	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function setPromotionSceneId($promotionSceneId)
	{
		$this->promotionSceneId = $promotionSceneId;
		$this->apiParas["promotion_scene_id"] = $promotionSceneId;
	}

	public function getPromotionSceneId()
	{
		return $this->promotionSceneId;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setSubPid($subPid)
	{
		$this->subPid = $subPid;
		$this->apiParas["sub_pid"] = $subPid;
	}

	public function getSubPid()
	{
		return $this->subPid;
	}

	public function setUnionId($unionId)
	{
		$this->unionId = $unionId;
		$this->apiParas["union_id"] = $unionId;
	}

	public function getUnionId()
	{
		return $this->unionId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.activitylink.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->promotionSceneId,"promotionSceneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
