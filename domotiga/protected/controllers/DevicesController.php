<?php

class DevicesController extends Controller
{
	public function actionIndex()
	{
    		$model = Devices::model();
		$this->render('index', array('model'=>$model));
	}
/*
	public function getAllDevices()
	{
		$criteria=new CDbCriteria;
		$criteria->condition = "enabled=true";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function actionView()
	{
    		$model = Devices::model()->findByPk(1);
		$this->render('view', array('model'=>$model));
	}
*/
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