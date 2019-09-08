<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "player".
 *
 * @property string $player_Name
 * @property string $player_Team
 * @property integer $player_Age
 * @property integer $player_Number
 *
 * @property Team $playerTeam
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_Name', 'player_Team', 'player_Age', 'player_Number'], 'required'],
            [['player_Age', 'player_Number'], 'integer'],
            [['player_Name', 'player_Team'], 'string', 'max' => 50],
            [['player_Team'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['player_Team' => 'Team_Nation']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_Name' => 'Player  Name',
            'player_Team' => 'Player  Team',
            'player_Age' => 'Player  Age',
            'player_Number' => 'Player  Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerTeam()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'player_Team']);
    }
}
