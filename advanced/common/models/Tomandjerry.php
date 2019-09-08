<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tomandjerry".
 *
 * @property string $NAME
 * @property string $SEXUAL
 * @property string $IS_LEADER
 * @property string $BIRTH_PLACE
 */
class Tomandjerry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tomandjerry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NAME', 'SEXUAL', 'IS_LEADER', 'BIRTH_PLACE'], 'required'],
            [['NAME', 'SEXUAL', 'IS_LEADER'], 'string', 'max' => 10],
            [['BIRTH_PLACE'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NAME' => 'Name',
            'SEXUAL' => 'Sexual',
            'IS_LEADER' => 'Is  Leader',
            'BIRTH_PLACE' => 'Birth  Place',
        ];
    }
}
