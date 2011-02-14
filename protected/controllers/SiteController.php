<?php

class SiteController extends Controller
{
	public $layout = '/layouts/candidate';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionadmin()
	{
		$this->layout = 'admin';
		$this->render('admin');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}