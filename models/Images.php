<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "YS2017Images".
 *
 * @property integer $ImagesID
 * @property string $ImagePath
 * @property string $Created
 * @property string $Updated
 * @property string $Deleted
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'YS2017Images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ImagePath', 'Created', 'Updated', 'Deleted'], 'required'],
            [['Created', 'Updated', 'Deleted'], 'safe'],
            [['ImagePath'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ImagesID' => 'Images ID',
            'ImagePath' => 'Image Path',
            'Created' => 'Created',
            'Updated' => 'Updated',
            'Deleted' => 'Deleted',
        ];
    }
}
