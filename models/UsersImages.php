<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "YS2017UsersImages".
 *
 * @property integer $UsersImagesID
 * @property integer $UsersID
 * @property integer $ImagesID
 */
class UsersImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'YS2017UsersImages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UsersID', 'ImagesID'], 'required'],
            [['UsersID', 'ImagesID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UsersImagesID' => 'Users Images ID',
            'UsersID' => 'Users ID',
            'ImagesID' => 'Images ID',
        ];
    }
}
