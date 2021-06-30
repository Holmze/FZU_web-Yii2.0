<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "message1".
 *
 * @property integer $id
 * @property string $content
 * @property integer $create_time
 */
class Message1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'create_time'], 'required'],
            [['content'], 'string'],
            [['create_time'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'create_time' => 'Create Time',
        ];
    }
}
