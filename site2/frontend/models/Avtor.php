<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avtor".
 *
 * @property int $id
 * @property string $name
 * @property string $creation date
 * @property string $date of change
 *
 * @property Kniga[] $knigas
 */
class Avtor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avtor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['creation date', 'date of change'], 'safe'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'creation date' => 'Creation Date',
            'date of change' => 'Date Of Change',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKnigas()
    {
        return $this->hasMany(Kniga::className(), ['id_avtor' => 'id']);
    }
}
