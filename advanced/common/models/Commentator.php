<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "commentator".
 *
 * @property string $commentator_Name
 * @property string $commentator_NativePlace
 *
 * @property Competition[] $competitions
 */
class Commentator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commentator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['commentator_Name'], 'required'],
            [['commentator_Name'], 'string', 'max' => 7],
            [['commentator_NativePlace'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'commentator_Name' => 'Commentator  Name',
            'commentator_NativePlace' => 'Commentator  Native Place',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitions()
    {
        return $this->hasMany(Competition::className(), ['Competition_CCTV5' => 'commentator_Name']);
    }
}
