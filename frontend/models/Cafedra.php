<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cafedra".
 *
 * @property int $id
 * @property string $name
 */
class Cafedra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cafedra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Кафедра',
        ];
    }
    public static function dropdown(){
        $self = self::find()->all();
        foreach ($self as $key) {
            $mass[$key->id] = $key->name;
        }
        return $mass;
    }
}
