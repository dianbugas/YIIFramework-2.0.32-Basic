<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%alumnis}}".
 *
 * @property int $id
 * @property string $nama
 * @property string $jk
 * @property string $tmp_lahir
 * @property string $tgl_lahir
 * @property string $email
 * @property string $no_hp
 * @property string $alamat
 * @property string $foto
 * @property string $angkatan
 * @property string $status_kerja
 * @property string $tmp_kerja
 * @property int $beastudi_id
 * @property int $prodi_id
 */
class Alumnis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%alumnis}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jk', 'tmp_lahir', 'email', 'no_hp', 'alamat', 'foto', 'angkatan', 'status_kerja', 'tmp_kerja', 'beastudi_id', 'prodi_id'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['alamat'], 'string'],
            [['beastudi_id', 'prodi_id'], 'integer'],
            [['nama', 'jk', 'tmp_lahir', 'email', 'no_hp', 'foto', 'angkatan', 'status_kerja', 'tmp_kerja'], 'string', 'max' => 255],
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
            'jk' => 'Jenis Kelamin',
            'tmp_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'email' => 'Email',
            'no_hp' => 'No Hp',
            'alamat' => 'Alamat',
            'foto' => 'Foto',
            'angkatan' => 'Angkatan',
            'status_kerja' => 'Status Kerja',
            'tmp_kerja' => 'Tempat Kerja',
            'beastudi_id' => 'Beastudi',
            'prodi_id' => 'Prodi',
            // 'created_at' => 'Created At',
            // 'updated_at' => 'Updated At',
        ];
    }
}
