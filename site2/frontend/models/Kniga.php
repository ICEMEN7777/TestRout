<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kniga".
 *
 * @property int $id
 * @property string $name
 * @property int $id_avtor
 * @property string $creation date
 * @property string $date of change
 *
 * @property Avtor $avtor
 */
class Kniga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kniga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_avtor'], 'integer'],
            [['creation date', 'date of change'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['id_avtor'], 'exist', 'skipOnError' => true, 'targetClass' => Avtor::className(), 'targetAttribute' => ['id_avtor' => 'id']],
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
            'id_avtor' => 'Id Avtor',
            'creation date' => 'Creation Date',
            'date of change' => 'Date Of Change',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvtor()
    {
        return $this->hasOne(Avtor::className(), ['id' => 'id_avtor']);
    }
}
