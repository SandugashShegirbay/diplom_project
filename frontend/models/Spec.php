<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spec".
 *
 * @property int $id
 * @property string $name
 */
class Spec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spec';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
            [['caf_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Специальность',
            'caf_id'=>'Кафедра',
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
