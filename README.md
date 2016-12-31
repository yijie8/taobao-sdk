# taobao-sdk
淘宝SDK2.x 兼容composer安装使用

##使用
~~~
//安装
composer require "axdlee/taobao-sdk":"dev-master"

//引用
use Tbsdk\Top\TopClient;
use Tbsdk\Top\Request\WirelessShareTpwdCreateRequest;
use Tbsdk\Top\Domain\IsvTpwdInfo;

//初始化
$tb_client = new TopClient;
$tb_client->appkey = config('taobao.appkey');
$tb_client->secretKey = config('taobao.secretKey');
$req = new WirelessShareTpwdCreateRequest;
$tpwd_param = new IsvTpwdInfo;
$tpwd_param->text = $title;
$tpwd_param->url = $url;
$tpwd_param->user_id = $user_id;
$req->setTpwdParam(json_encode($tpwd_param));
$resp = $tb_client->execute($req);
~~~
