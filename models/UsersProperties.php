<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "YS2017UsersProperties".
 *
 * @property integer $UsersPropertiesID
 * @property integer $UsersID
 * @property integer $PropertiesID
 */
class UsersProperties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'YS2017UsersProperties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UsersID', 'PropertiesID'], 'required'],
            [['UsersID', 'PropertiesID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UsersPropertiesID' => 'Users Properties ID',
            'UsersID' => 'Users ID',
            'PropertiesID' => 'Properties ID',
        ];
    }
}
