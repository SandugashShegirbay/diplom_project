<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "selected".
 *
 * @property int $id
 * @property int $user_id
 * @property int $univer_id
 */
class Selected extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'selected';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'univer_id'], 'required'],
            [['user_id', 'univer_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'univer_id' => 'Univer ID',
        ];
    }
}
