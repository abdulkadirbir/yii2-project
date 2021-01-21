<?php

namespace abdulkadirbir\content\models;

use Yii;

/**
 * This is the model class for table "evsahibi".
 *
 * @property int $id
 * @property string|null $isim
 * @property string|null $soyisim
 * @property string|null $memleket
 */
class Evsahibi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evsahibi';
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
