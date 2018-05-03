<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carros".
 *
 * @property int $id
 * @property string $modelo
 * @property int $marca_id
 * @property string $ano_fabricacao
 * @property string $valor
 * @property int $ainda_fabrica
 * @property string $data_cadastro
 *
 * @property Marca $marca
 */
class Carros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modelo', 'marca_id', 'ano_fabricacao', 'valor'], 'required'],
            [['marca_id'], 'integer'],
            [['data_cadastro'], 'safe'],
            [['modelo', 'ano_fabricacao', 'valor'], 'string', 'max' => 50],
            [['ainda_fabrica'], 'string', 'max' => 1],
            [['marca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Marca::className(), 'targetAttribute' => ['marca_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'modelo' => Yii::t('app', 'Modelo'),
            'marca_id' => Yii::t('app', 'Marca ID'),
            'ano_fabricacao' => Yii::t('app', 'Ano Fabricacao'),
            'valor' => Yii::t('app', 'Valor'),
            'ainda_fabrica' => Yii::t('app', 'Ainda Fabrica'),
            'data_cadastro' => Yii::t('app', 'Data Cadastro'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarca()
    {
        return $this->hasOne(Marca::className(), ['id' => 'marca_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\query\CarrosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\CarrosQuery(get_called_class());
    }
}
