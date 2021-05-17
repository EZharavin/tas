<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ticket_id".
 *
 * @property int $id
 *
 * @property Result $result
 * @property Ticket[] $tickets
 */
class TicketId extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ticket_id';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }

    /**
     * Gets query for [[Result]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResult()
    {
        return $this->hasOne(Result::className(), ['ticket_id' => 'id']);
    }

    /**
     * Gets query for [[Tickets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['ticket_id' => 'id']);
    }
}
