<?php

class CandidateController extends Controller
{
	public $layout = '/layouts/candidate';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionRegister()
	{
		$model = new Candidate;
		$model->setScenario('register');
		$form = new CForm('application.views.candidate.registerForm', $model);
		if ($form->submitted('register') && $form->validate()) {
			$model->username = $_POST['Candidate']['username'];
			$model->password = $_POST['Candidate']['password'];
			$model->password_hash = md5($model->password);
			$model->email = $_POST['Candidate']['email'];
			$model->status = 0;
			$model->activation_code = md5(mt_rand());
			if ($model->save()) {
				Yii::app()->user->setFlash('success', 'Your account has been created. Please check your email for activation details.');
				$this->redirect(array('site/index'));
				return;
			} else {
				Yii::app()->user->setFlash('error', 'There was an error creating your account. Please try again.');
				$this->render('register', array('form' => $form));
				return;
			}
		} else {
			$this->render('register', array('form' => $form));
			return;
		}
	}

	public function actionLogin()
	{
		$model = new Candidate;
		$model->setScenario('login');
		$form = new CForm('application.views.candidate.loginForm', $model);
		if ($form->submitted('login') && $form->validate()) {
			$identity = new CandidateIdentity($_POST['Candidate']['username'], $_POST['Candidate']['password']);
			if ($identity->authenticate()) {
				Yii::app()->user->setFlash('success', 'Login successful.');
				Yii::app()->user->login($identity);
				$this->redirect(Yii::app()->user->returnUrl);
				return;
			} else {
				Yii::app()->user->setFlash('error', 'Login failed. Please try again.');
				$this->render('login', array('form' => $form));
				return;
			}
		} else {
			$this->render('login', array('form' => $form));
			return;
		}
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		Yii::app()->user->setFlash('success', 'Thank you for using Jobcamp.');
		$this->redirect(Yii::app()->homeUrl);
		return;
	}

	public function actionProfile()
	{
		$model = Candidate::model()->findByPk(Yii::app()->user->id);
		$this->render('profile', array('candidate' => $model));
	}

	public function actionEdit()
	{
		$model = Candidate::model()->findByPk(Yii::app()->user->id);
		$model->setScenario('edit');
		$form = new CForm('application.views.candidate.editForm', $model);
		if ($form->submitted('Candidate') && $form->validate()) {
			$model->attributes = $_POST['Candidate'];
			if ($model->update()) {
				Yii::app()->user->setFlash('success', 'Your profile has been updated.');
				$this->redirect(array('candidate/profile'));
				return;
			} else {
				Yii::app()->user->setFlash('error', 'There was an error updating your profile. Please try again.');
				$this->render('edit', array('form' => $form));
				return;
			}
		} else {
			$this->render('edit', array('form' => $form));
			return;
		}
		$this->render('edit', array('form' => $form));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}