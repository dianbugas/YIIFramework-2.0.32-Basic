<?php

namespace app\models;

use yii\db\ActiveRecord;

class Mahasiswa extends ActiveRecord
{
    public static function tableName()
    {
        return 'mahasiswa';
    }
}
