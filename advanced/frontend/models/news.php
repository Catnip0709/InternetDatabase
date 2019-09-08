<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $news_title
 * @property string $news_time
 * @property string $news_link
 * @property string $news_kw_nation1
 * @property string $news_kw_nation2
 *
 * @property Team $newsKwNation1
 * @property Team $newsKwNation2
 */
class news extends \yii\db\ActiveRecord
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
            [['news_title', 'news_time', 'news_link'], 'required'],
            [['news_title', 'news_link'], 'string', 'max' => 200],
            [['news_time', 'news_kw_nation1', 'news_kw_nation2'], 'string', 'max' => 50],
            [['news_kw_nation1'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['news_kw_nation1' => 'Team_Nation']],
            [['news_kw_nation2'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['news_kw_nation2' => 'Team_Nation']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_title' => 'News Title',
            'news_time' => 'News Time',
            'news_link' => 'News Link',
            'news_kw_nation1' => 'News Kw Nation1',
            'news_kw_nation2' => 'News Kw Nation2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsKwNation1()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'news_kw_nation1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsKwNation2()
    {
        return $this->hasOne(Team::className(), ['Team_Nation' => 'news_kw_nation2']);
    }
}
