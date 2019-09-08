<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coach".
 *
 * @property string $Coach_Name
 * @property integer $Coach_Age
 *
 * @property Team[] $teams
 */
class coach extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coach';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Coach_Name', 'Coach_Age'], 'required'],
            [['Coach_Age'], 'integer'],
            [['Coach_Name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Coach_Name' => 'Coach  Name',
            'Coach_Age' => 'Coach  Age',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams()
    {
        return $this->hasMany(Team::className(), ['Team_Coach' => 'Coach_Name']);
    }
}
