<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $date
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email',], 'string', 'max' => 255],
            [['name', 'email'], 'required'],
            ['email', 'email'],
            [['date'], 'time', 'format' => 'H:i:s'],
            [['date'], 'default', 'value' => date('H:i:s')],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'date' => 'Date',
        ];
    }

    public static function mailFile()
    {

        $mail = Yii::$app->request->post('email');

        Yii::$app->mailer->compose()
            ->setFrom('site@site.com')
            ->setSubject('Tapmedia')
            ->setTextBody('Hello, this is a file from Tapmedia web-site.')
            ->setTo($mail)
            ->attach('/doc1.docx')
            ->send();
    }

    public function getDate()
    {
        return Yii::$app->formatter->asTime($this->date);
    }
}
