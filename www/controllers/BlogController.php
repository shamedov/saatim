<?php

class NewsController {
	public function actionIndex()
		{
			echo"spisok novostey";
			return true;
		}

	public function actionView()
		{
			echo 'prosmotr 1y novosti';
			return true;

		}
}

?>