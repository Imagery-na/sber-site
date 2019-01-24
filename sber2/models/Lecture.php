<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lecture".
 *
 * @property int $id
 * @property string $filename
 *
 * @property CourseHasLecture[] $courseHasLectures
 */
class Lecture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lecture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filename'], 'string', 'max' => 50],
            [['filename'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filename' => 'Filename',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseHasLectures()
    {
        return $this->hasMany(CourseHasLecture::className(), ['lecture_id' => 'id']);
    }
}
