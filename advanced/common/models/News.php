<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $News_Title
 * @property string $News_Time
 * @property string $News_Link
 * @property string $News_TeamA
 * @property string $News_TeamB
 *
 * @property Team $newsTeamA
 * @property Team $newsTeamB
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['News_Title', 'News_Time', 'News_Link'], 'required'],
            [['News_Title', 'News_Link'], 'string', 'max' => 200],
            [['News_Time', 'News_TeamA', 'News_TeamB'], 'string', 'max' => 50],
            [['News_TeamA'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['News_TeamA' => 'Team_Nation']],
            [['News_TeamB'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['News_TeamB' => 'Team_Nation']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'News_Title' => 'News  Title',
            'News_Time' => 'News  Time',
            'News_Link' => 'News  Link',
            'News_TeamA' => 'News  Team A',
            'News_TeamB' => 'News  Team B',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsTeamA()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'News_TeamA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsTeamB()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'News_TeamB']);
    }
}
