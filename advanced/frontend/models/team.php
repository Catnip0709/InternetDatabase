<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property string $Team_Nation
 * @property string $Team_Coach
 * @property integer $Team_Score
 * @property string $Team_Group
 * @property string $Team_Shirtsponsor
 *
 * @property Competition[] $competitions
 * @property Competition[] $competitions0
 * @property News[] $news
 * @property News[] $news0
 * @property Player[] $players
 * @property Coach $teamCoach
 * @property Sponsor $teamShirtsponsor
 * @property Videos[] $videos
 * @property Videos[] $videos0
 */
class team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Team_Nation', 'Team_Coach', 'Team_Score', 'Team_Group', 'Team_Shirtsponsor'], 'required'],
            [['Team_Score'], 'integer'],
            [['Team_Nation', 'Team_Coach', 'Team_Shirtsponsor'], 'string', 'max' => 50],
            [['Team_Group'], 'string', 'max' => 1],
            [['Team_Coach'], 'exist', 'skipOnError' => true, 'targetClass' => Coach::className(), 'targetAttribute' => ['Team_Coach' => 'Coach_Name']],
            [['Team_Shirtsponsor'], 'exist', 'skipOnError' => true, 'targetClass' => Sponsor::className(), 'targetAttribute' => ['Team_Shirtsponsor' => 'Sponsor_Name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Team_Nation' => 'Team  Nation',
            'Team_Coach' => 'Team  Coach',
            'Team_Score' => 'Team  Score',
            'Team_Group' => 'Team  Group',
            'Team_Shirtsponsor' => 'Team  Shirtsponsor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitions()
    {
        return $this->hasMany(Competition::className(), ['Competition_TeamA' => 'Team_Nation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitions0()
    {
        return $this->hasMany(Competition::className(), ['Competition_TeamB' => 'Team_Nation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['news_kw_nation1' => 'Team_Nation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews0()
    {
        return $this->hasMany(News::className(), ['news_kw_nation2' => 'Team_Nation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(Player::className(), ['player_Team' => 'Team_Nation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamCoach()
    {
        return $this->hasOne(Coach::className(), ['Coach_Name' => 'Team_Coach']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamShirtsponsor()
    {
        return $this->hasOne(Sponsor::className(), ['Sponsor_Name' => 'Team_Shirtsponsor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Videos::className(), ['Videos_TeamA' => 'Team_Nation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideos0()
    {
        return $this->hasMany(Videos::className(), ['Videos_TeamB' => 'Team_Nation']);
    }
}
