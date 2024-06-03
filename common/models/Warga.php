<?php

namespace common\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "warga".
 *
 * @property int $id
 * @property string $no_kk
 * @property string $nik
 * @property string $nama
 * @property int $jk
 * @property string $alamat
 * @property string $agama
 * @property string $goldar
 * @property string $tgl_masuk
 */
class Warga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kk', 'nik', 'nama', 'jk', 'alamat', 'agama', 'goldar'], 'required'],
            [['jk', 'status'], 'integer'],
            [['tgl_masuk'], 'safe'],
            [['no_kk', 'nik', 'nama', 'alamat', 'agama', 'goldar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_kk' => 'No. KK',
            'nik' => 'NIK',
            'nama' => 'Nama',
            'jk' => 'Jenis kelamin',
            'alamat' => 'Alamat',
            'agama' => 'Agama',
            'goldar' => 'Golongan Darah',
            'tgl_masuk' => 'Tanggal Masuk',
        ];
    }

    public function getStatusButtonColor()
    {
        $statuses = [
            1 => [
                'description' => 'Lokal',
                'color' => 'btn btn-primary round',
            ],
            2 => [
                'description' => 'Pindah',
                'color' => 'btn btn-danger round',
            ],
        ];

        $status = $statuses[$this->status] ?? $statuses[1];

        return Html::button($status['description'], [
            'class' => $status['color'],
        ]);
    }
    public function getStatusDescription()
    {
        $statuses = [
            1 => 'Lokal',
            2 => 'Pindah',
        ];

        return $statuses[$this->status] ?? 'Unknown';
    }

    public function getJk()
    {
        $jk = [
            0 => 'Laki-laki',
            1 => 'Perempuan',
        ];

        return $jk[$this->jk] ?? 'Unknown';
    }
}
