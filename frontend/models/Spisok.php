<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spisok".
 *
 * @property int $id
 * @property string $path
 */
class Spisok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'spisok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['path'], 'required'],
            [['path'], 'string', 'max' => 255],
            [['file'],'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Путь к файлу',
            'file'=>'Файл со списком грантов',
        ];
    }
}
