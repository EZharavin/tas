<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "card".
 *
 * @property int $id
 * @property string|null $question
 * @property string|null $topic_name
 * @property string|null $answer
 * @property string|null $option_1
 * @property string|null $option_2
 *
 * @property Topic $topicName
 * @property Mistake[] $mistakes
 * @property Ticket[] $tickets
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'answer', 'option_1', 'option_2'], 'string'],
            [['topic_name'], 'string', 'max' => 100],
            [['topic_name'], 'exist', 'skipOnError' => true, 'targetClass' => Topic::className(), 'targetAttribute' => ['topic_name' => 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'topic_name' => 'Topic Name',
            'answer' => 'Answer',
            'option_1' => 'Option 1',
            'option_2' => 'Option 2',
        ];
    }

    /**
     * Gets query for [[TopicName]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTopicName()
    {
        return $this->hasOne(Topic::className(), ['name' => 'topic_name']);
    }

    /**
     * Gets query for [[Mistakes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMistakes()
    {
        return $this->hasMany(Mistake::className(), ['card_id' => 'id']);
    }

    /**
     * Gets query for [[Tickets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['card_id' => 'id']);
    }
}
