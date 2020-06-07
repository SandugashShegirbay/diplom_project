<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $shdescrip
 * @property int $img
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $img_f;
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'shdescrip', 'img'], 'required'],
            [['title', 'description', 'shdescrip','img'], 'string'],
            [['img_f'],'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заглавие',
            'description' => 'Полная информация',
            'shdescrip' => 'Краткое описание',
            'img' => 'Путь к файлу',
            'img_f' => 'Изображение',
        ];
    }
}
