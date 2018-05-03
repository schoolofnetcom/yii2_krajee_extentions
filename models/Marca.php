<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marca".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Carros[] $carros
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarros()
    {
        return $this->hasMany(Carros::className(), ['marca_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\query\MarcaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\MarcaQuery(get_called_class());
    }
}
