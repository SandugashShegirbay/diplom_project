<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "univers".
 *
 * @property int $id
 * @property string $category
 * @property string $spec
 * @property string $region
 * @property int $price
 * @property int $students
 * @property int $sthouse
 * @property string $grants
 * @property string $accr
 * @property int $cat_id
 * @property int $spec_id
 * @property int $reg_id
 */
class Univers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file_img;
    public static function tableName()
    {
        return 'univers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'students', 'sthouse', 'grants', 'accr','title'], 'required'],
            [['category', 'spec', 'region', 'grants', 'accr','name','img','inform','ssilka','title','times'], 'string'],
            [['price', 'students', 'sthouse', 'cat_id', 'spec_id', 'reg_id','caf_id','money'], 'integer'],
            [['file_img'],'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title'=>'Заглавие',
            'name'=>'Название организации',
            'cat_id' => 'Категория',
            'spec_id' => 'Специальность',
            'reg_id' => 'Город',
            'caf_id' => 'Факультет',
            'price' => 'Цена',
            'students' => 'Количество студентов',
            'sthouse' => 'Общежитие',
            'grants' => 'Тип гранта',
            'accr' => 'Аккредитация',
            'file_img'=>'Изображение',
            'inform'=>'Информация о университете (требования, описание, процесс подачи документов и.т.д)',
            'ssilka'=>'Ссылка на сайт университета',
            'times'=>'Длительность',
            'money'=>'Размер стипендии (тенге)',
        ];
    }
}
