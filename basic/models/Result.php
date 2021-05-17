<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $ticket_id
 * @property string|null $username
 * @property int|null $points
 * @property string|null $pass_time
 *
 * @property TicketId $ticket
 * @property User $username0
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ticket_id'], 'required'],
            [['ticket_id', 'points'], 'integer'],
            [['pass_time'], 'safe'],
            [['username'], 'string', 'max' => 50],
            [['ticket_id'], 'unique'],
            [['ticket_id'], 'exist', 'skipOnError' => true, 'targetClass' => TicketId::className(), 'targetAttribute' => ['ticket_id' => 'id']],
            [['username'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['username' => 'username']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ticket_id' => 'Ticket ID',
            'username' => 'Username',
            'points' => 'Points',
            'pass_time' => 'Pass Time',
        ];
    }

    /**
     * Gets query for [[Ticket]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTicket()
    {
        return $this->hasOne(TicketId::className(), ['id' => 'ticket_id']);
    }

    /**
     * Gets query for [[Username0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(User::className(), ['username' => 'username']);
    }
}
