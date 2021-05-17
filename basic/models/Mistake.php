<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mistake".
 *
 * @property string $username
 * @property int|null $card_id
 * @property string|null $chosen_answer
 *
 * @property Card $card
 * @property User $username0
 */
class Mistake extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mistake';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['card_id'], 'integer'],
            [['chosen_answer'], 'string'],
            [['username'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['card_id'], 'exist', 'skipOnError' => true, 'targetClass' => Card::className(), 'targetAttribute' => ['card_id' => 'id']],
            [['username'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['username' => 'username']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'card_id' => 'Card ID',
            'chosen_answer' => 'Chosen Answer',
        ];
    }

    /**
     * Gets query for [[Card]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCard()
    {
        return $this->hasOne(Card::className(), ['id' => 'card_id']);
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
