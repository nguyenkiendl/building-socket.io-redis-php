<?php
namespace nguyenkiendl\mySocket;
/**
 * 
 */
use LRedis;
class mySocket
{
	
	function __construct(argument)
	{
		$this->redis = LRedis::connection();
	}
	public function send($channel=null,$data=null)
	{
		if (!$channel) {
			return json_encode([
				'code'=> 'sk_01',
				'message' => 'Empty channel',
				'data'=> null
			]);
		}
		$this->redis->publish($channel,$data);
	}

}