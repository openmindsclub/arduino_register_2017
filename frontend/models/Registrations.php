<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "registrations".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $specialty
 * @property string $email
 * @property string $phone
 * @property string $know_arduino
 * @property string $level
 * @property string $coming
 * @property string $participated
 * @property string $interested
 */
class Registrations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registrations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'specialty', 'email', 'phone', 'know_arduino', 'level', 'coming', 'participated', 'interested'], 'required'],
            [['specialty', 'know_arduino', 'level', 'coming', 'participated', 'interested'], 'string'],
            [['first_name', 'last_name'], 'string', 'max' => 256],
            [['email'], 'string', 'max' => 512],
            [['phone'], 'string', 'max' => 10],
            [['email'], 'unique'],
            [['phone'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'specialty' => 'Specialty',
            'email' => 'Email',
            'phone' => 'Phone',
            'know_arduino' => 'Know Arduino',
            'level' => 'Level',
            'coming' => 'Coming',
            'participated' => 'Participated',
            'interested' => 'Interested',
        ];
    }
}
