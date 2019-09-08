<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sponsor".
 *
 * @property string $Sponsor_Name
 * @property integer $Sponsor_Amount
 *
 * @property Team[] $teams
 */
class Sponsor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sponsor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sponsor_Name', 'Sponsor_Amount'], 'required'],
            [['Sponsor_Amount'], 'integer'],
            [['Sponsor_Name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Sponsor_Name' => 'Sponsor  Name',
            'Sponsor_Amount' => 'Sponsor  Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams()
    {
        return $this->hasMany(Team::className(), ['Team_Shirtsponsor' => 'Sponsor_Name']);
    }
}
