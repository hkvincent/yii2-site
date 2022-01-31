<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "YS2017Users".
 *
 * @property integer $UsersID
 * @property string $EmailAddress
 * @property string $Fname
 * @property string $Lname
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'YS2017Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EmailAddress', 'Fname', 'Lname'], 'required'],
            [['EmailAddress'], 'string', 'max' => 100],
            [['Fname', 'Lname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UsersID' => 'Users ID',
            'EmailAddress' => 'Email Address',
            'Fname' => 'Fname',
            'Lname' => 'Lname',
        ];
    }
}
