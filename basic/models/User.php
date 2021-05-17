<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $username
 * @property string|null $password
 * @property string|null $first_name
 * @property string|null $last_name
 *
 * @property Mistake $mistake
 * @property Result[] $results
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username', 'password'], 'string', 'max' => 50],
            [['first_name', 'last_name'], 'string', 'max' => 45],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
        ];
    }

    /**
     * Gets query for [[Mistake]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMistake()
    {
        return $this->hasOne(Mistake::className(), ['username' => 'username']);
    }

    /**
     * Gets query for [[Results]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Result::className(), ['username' => 'username']);
    }
}
