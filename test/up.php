<?php
/**
 * Created by 大师兄
 * 派系: 神秘剑派
 * 技能: zxc秒杀
 * Date: 2021/8/3
 * Time: 18:39
 * QQ:  997823131
 */
require_once '../vendor/autoload.php';

use OssDog\Upload;

$upload = new Upload();
$upload->__set('maxSize',1*1024*1024);
$upload->__set('savePath','./upload/');
$upload->__set('saveRule','uniqid');
$upload->__set('uploadReplace',true);
$upload->__set('autoSub',true);
$upload->__set('subType','date');
$upload->__set('allowExts',['jpg', 'png']);

if($upload->upload()){
    var_dump($upload->getUploadFileInfo());
}else{
    var_dump($upload->getErrorMsg());
}
