<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mahasiswas}}".
 *
 * @property int $id
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $alamat
 */
class Mahasiswas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%mahasiswas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tgl_lahir', 'alamat'], 'required'],
            [['nama', 'tgl_lahir', 'alamat'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
        ];
    }
}
