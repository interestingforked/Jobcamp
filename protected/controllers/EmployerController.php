<?php

class EmployerController extends Controller
{
	public function actionIndex()
	{
		$this->layout = "employer";
		$this->render('index');
	}

	public function actionRegister()
	{
		$this->layout = "employer";
		$model = new Employer;
		$model->setScenario('register');
		$form = new CForm('application.views.employer.registerForm', $model);
		if ($form->submitted('register') && $form->validate()) {
			$model->username = $_POST['Employer']['username'];
			$model->password = $_POST['Employer']['password'];
			$model->password_hash = md5($model->password);
			$model->email = $_POST['Employer']['email'];
			$model->status = 0;
			$mode->scheme_id = 0;
			$model->activation_code = md5(mt_rand());
			if ($model->save()) {
				Yii::app()->user->setFlash('success', 'Your account has been created. Please check your email for activation details.');
				$this->redirect(array('employer/index'));
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
		$this->layout = "employer";
		$model = new Employer;
		$model->setScenario('login');
		$form = new CForm('application.views.employer.loginForm', $model);
		if ($form->submitted('login') && $form->validate()) {
			$identity = new EmployerIdentity($_POST['Employer']['username'], $_POST['Employer']['password']);
			if ($identity->authenticate()) {
				Yii::app()->user->setFlash('success', 'Login successful.');
				Yii::app()->user->login($identity);
				$this->redirect(array('employer/index'));
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
		$this->layout = "employer";
		$model = Employer::model()->findByPk(Yii::app()->user->id);
		$this->render('profile', array('model' => $model));
	}

	public function actionEdit()
	{
		$this->layout = "employer";
		$model = Employer::model()->findByPk(Yii::app()->user->id);
		$model->setScenario('edit');
		$form = new CForm('application.views.employer.editForm', $model);
		if ($form->submitted('Employer') && $form->validate()) {
			$model->attributes = $_POST['Employer'];
			if ($model->update()) {
				Yii::app()->user->setFlash('success', 'Your profile has been updated.');
				$this->redirect(array('employer/profile'));
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