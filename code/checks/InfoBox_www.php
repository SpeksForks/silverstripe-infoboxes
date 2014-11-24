<?php

class InfoBox_www implements InfoBox {

	public function show() {
		$url = Director::absoluteBaseURL();

		if(preg_match("/^https?:\/\/www./", $url) == 1) {
			return true;
		}

		return false;
	}

	public function message() {
		return 'Force www';
	}

	public function severity() {
		return 2;
	}

}
