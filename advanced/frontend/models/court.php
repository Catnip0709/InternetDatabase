<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "court".
 *
 * @property string $court_Name
 * @property string $court_Position
 *
 * @property Competition[] $competitions
 */
class court extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'court';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['court_Name', 'court_Position'], 'required'],
            [['court_Name'], 'string', 'max' => 50],
            [['court_Position'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'court_Name' => 'Court  Name',
            'court_Position' => 'Court  Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitions()
    {
        return $this->hasMany(Competition::className(), ['Competition_Court' => 'court_Name']);
    }
}
