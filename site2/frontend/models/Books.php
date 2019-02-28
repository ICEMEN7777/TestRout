<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $author_id
 * @property string $date
 * @property string $alias
 * @property int $likes
 * @property int $hits
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'likes', 'hits'], 'integer'],
            [['date'], 'safe'],
            [['title', 'alias'], 'string', 'max' => 200],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'author_id' => 'Author ID',
            'date' => 'Date',
            'alias' => 'Alias',
            'likes' => 'Likes',
            'hits' => 'Hits',
        ];
    }
}
