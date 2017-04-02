<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $featured_image
 * @property integer $created_at
 * @property integer $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $fileUpload;

    const PATH = '@app/uploads/featured_image/';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content', 'featured_image'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['fileUpload'], 'file'],
            [['fileUpload'], 'file', 'extensions' => ['png', 'jpg', 'jpeg', 'gif']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'featured_image' => 'Featured Image',
            'fileUpload' => 'Featured Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     */
    public function load($data, $formName = null)
    {
        parent::load($data, $formName = null);
        $this->fileUpload = UploadedFile::getInstance($this, 'fileUpload');
        return $data && $this->validate();
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            return $this->fileUpload ? $this->beforeUpload() : true;
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public function afterSave($insert, $changedAttributes)
    {
        if ($this->fileUpload) {
            $this->upload();
        }
        return parent::afterSave($insert, $changedAttributes);
    }

    /**
     * @inheritdoc
     */
    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            if ($this->featured_image) {
                $path = Yii::getAlias(self::PATH . basename($this->featured_image));
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            return true;
        }
        return false;
    }

    public function beforeUpload()
    {
        if ($this->featured_image) {
            $file = Yii::getAlias(self::PATH . basename($this->featured_image));
            if (file_exists($file)) {
                unlink($file);
            }
        }
        
        $directory = Yii::getAlias(self::PATH);
        if (! file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $relativeUrl    = str_replace('@app/', '', trim(self::PATH, '/'));
        $fileName       = $this->fileUpload->baseName . '-' . date('dMY_H:i', time()) . '.' . $this->fileUpload->extension;
        $this->featured_image = Url::home(true) . $relativeUrl . '/' . $fileName;
        
        return true;
    }

    public function upload()
    {
        $file = Yii::getAlias(self::PATH . basename($this->featured_image));
        $this->fileUpload->saveAs($file);

        return true;
    }
}
