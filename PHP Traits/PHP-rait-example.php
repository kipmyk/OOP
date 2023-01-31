<?php

trait Logger
{
	public function log($msg)
	{
		echo '<pre>';
		echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg . '<br/>';
		echo '</pre>';
	}
}
