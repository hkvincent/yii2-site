<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "YS2017Properties".
 *
 * @property integer $PropertiesID
 * @property string $Address1
 * @property string $Address2
 * @property string $Address3
 * @property string $Postcode
 * @property string $Type
 * @property string $Price
 * @property string $Description
 * @property string $SaleStatus
 * @property string $Created
 * @property string $Updated
 * @property string $Deleted
 */
class Properties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'YS2017Properties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Address1', 'Address2', 'Address3', 'Postcode', 'Type', 'Price', 'Description', 'SaleStatus', 'Created', 'Updated', 'Deleted'], 'required'],
            [['Price'], 'number'],
            [['Description'], 'string'],
            [['Created', 'Updated', 'Deleted'], 'safe'],
            [['Address1', 'Address2', 'Address3'], 'string', 'max' => 255],
            [['Postcode'], 'string', 'max' => 7],
            [['Type'], 'string', 'max' => 20],
            [['SaleStatus'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PropertiesID' => 'Properties ID',
            'Address1' => 'Address1',
            'Address2' => 'Address2',
            'Address3' => 'Address3',
            'Postcode' => 'Postcode',
            'Type' => 'Type',
            'Price' => 'Price',
            'Description' => 'Description',
            'SaleStatus' => 'Sale Status',
            'Created' => 'Created',
            'Updated' => 'Updated',
            'Deleted' => 'Deleted',
        ];
    }
}
