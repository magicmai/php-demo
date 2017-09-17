<?php

/**
 * 提示操作信息的，并且跳转
 * @param string $mes
 * @param string $url
 */

function alertMes($mes, $url) {
	echo "<script>alert('{$mes}'); location.href='{$url}';</script>";
}

/**
 * 截取文件扩展名
 * @param string $filename
 * @param string
 */
function getExt($filename) {
	return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
}

/**
 * 产生唯一名称
 * @param int $length
 * @param string
 */
function getUniqidName($length=10){
	return substr(md5(uniqid(microtime(true),true)),0,$length);
}