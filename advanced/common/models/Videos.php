<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "videos".
 *
 * @property string $Videos_Name
 * @property string $Videos_Time
 * @property string $Videos_Link
 * @property string $Videos_TeamA
 * @property string $Videos_TeamB
 *
 * @property Team $videosTeamA
 * @property Team $videosTeamB
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'videos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Videos_Name', 'Videos_Time', 'Videos_Link'], 'required'],
            [['Videos_Name', 'Videos_Time', 'Videos_TeamA', 'Videos_TeamB'], 'string', 'max' => 50],
            [['Videos_Link'], 'string', 'max' => 200],
            [['Videos_TeamA'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['Videos_TeamA' => 'Team_Nation']],
            [['Videos_TeamB'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['Videos_TeamB' => 'Team_Nation']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Videos_Name' => 'Videos  Name',
            'Videos_Time' => 'Videos  Time',
            'Videos_Link' => 'Videos  Link',
            'Videos_TeamA' => 'Videos  Team A',
            'Videos_TeamB' => 'Videos  Team B',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideosTeamA()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'Videos_TeamA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideosTeamB()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'Videos_TeamB']);
    }
}
