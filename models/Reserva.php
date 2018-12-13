<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $id
 * @property int $marca
 * @property int $modelo
 * @property string $data_reserva
 * @property int $cliente
 * @property string $data_baixa_reserva
 * @property int $funcionario
 *
 * @property Locatario $cliente
 * @property Funcionarios $funcionario
 * @property Marca $marca
 * @property Veiculo $modelo
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marca', 'modelo', 'data_reserva', 'cliente', 'funcionario'], 'required'],
            [['marca', 'modelo', 'cliente', 'funcionario'], 'integer'],
            [['data_reserva', 'data_baixa_reserva'], 'safe'],
            [['cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Locatario::className(), 'targetAttribute' => ['cliente' => 'id']],
            [['funcionario'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionarios::className(), 'targetAttribute' => ['funcionario' => 'id']],
            [['marca'], 'exist', 'skipOnError' => true, 'targetClass' => Marca::className(), 'targetAttribute' => ['marca' => 'id']],
            [['modelo'], 'exist', 'skipOnError' => true, 'targetClass' => Veiculo::className(), 'targetAttribute' => ['modelo' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'data_reserva' => 'Data Reserva',
            'cliente' => 'Cliente',
            'data_baixa_reserva' => 'Data Baixa Reserva',
            'funcionario' => 'Funcionário',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Locatario::className(), ['id' => 'cliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionario()
    {
        return $this->hasOne(Funcionarios::className(), ['id' => 'funcionario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarca()
    {
        return $this->hasOne(Marca::className(), ['id' => 'marca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModelo()
    {
        return $this->hasOne(Veiculo::className(), ['id' => 'modelo']);
    }
}
