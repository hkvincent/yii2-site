<?php
namespace app\models;
use yii\base\Models;
use yii\web\UploadeFile;

class UploadForm extends Model {
  public $file;
  
  public function rules(){
  	
  	return [
  		[['file'],'file'],
  		];
  		
  }
}