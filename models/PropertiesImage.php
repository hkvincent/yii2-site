<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "YS2017PropertiesImages".
 *
 * @property integer $ProportiesImagesID
 * @property integer $PropertiesID
 * @property integer $ImagesID
 */
class PropertiesImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'YS2017PropertiesImages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PropertiesID', 'ImagesID'], 'required'],
            [['PropertiesID', 'ImagesID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProportiesImagesID' => 'Proporties Images ID',
            'PropertiesID' => 'Properties ID',
            'ImagesID' => 'Images ID',
        ];
    }
}
