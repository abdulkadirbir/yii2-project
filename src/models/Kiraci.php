<?php

namespace abdulkadirbir\content\models;

use Yii;

/**
 * This is the model class for table "kiraci".
 *
 * @property int $id
 * @property string|null $isim
 * @property string|null $soyisim
 * @property string|null $memleket
 */
class Kiraci extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kiraci';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'soyisim', 'memleket'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'soyisim' => 'Soyisim',
            'memleket' => 'Memleket',
        ];
    }
}
