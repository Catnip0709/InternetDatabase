<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competition".
 *
 * @property string $Competition_Time
 * @property string $Competition_TeamA
 * @property string $Competition_TeamB
 * @property integer $Competition_AScore
 * @property integer $Competition_BScore
 * @property string $Competition_Court
 * @property string $Competition_CCTV5
 *
 * @property Court $competitionCourt
 * @property Commentatorofcctv5 $competitionCCTV5
 * @property Team $competitionTeamA
 * @property Team $competitionTeamB
 */
class Competition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'competition';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Competition_Time', 'Competition_TeamA', 'Competition_TeamB', 'Competition_Court', 'Competition_CCTV5'], 'required'],
            [['Competition_AScore', 'Competition_BScore'], 'integer'],
            [['Competition_Time', 'Competition_TeamA', 'Competition_TeamB', 'Competition_Court', 'Competition_CCTV5'], 'string', 'max' => 50],
            [['Competition_Court'], 'exist', 'skipOnError' => true, 'targetClass' => Court::className(), 'targetAttribute' => ['Competition_Court' => 'court_Name']],
            [['Competition_CCTV5'], 'exist', 'skipOnError' => true, 'targetClass' => Commentatorofcctv5::className(), 'targetAttribute' => ['Competition_CCTV5' => 'commentator_Name']],
            [['Competition_TeamA'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['Competition_TeamA' => 'Team_Nation']],
            [['Competition_TeamB'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['Competition_TeamB' => 'Team_Nation']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Competition_Time' => 'Competition  Time',
            'Competition_TeamA' => 'Competition  Team A',
            'Competition_TeamB' => 'Competition  Team B',
            'Competition_AScore' => 'Competition  Ascore',
            'Competition_BScore' => 'Competition  Bscore',
            'Competition_Court' => 'Competition  Court',
            'Competition_CCTV5' => 'Competition  Cctv5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitionCourt()
    {
        return $this->hasOne(Court::className(), ['court_Name' => 'Competition_Court']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitionCCTV5()
    {
        return $this->hasOne(Commentatorofcctv5::className(), ['commentator_Name' => 'Competition_CCTV5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitionTeamA()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'Competition_TeamA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitionTeamB()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'Competition_TeamB']);
    }
}
