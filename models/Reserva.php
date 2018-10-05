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
 * @property CadLocatario $cliente0
 * @property CadFuncionarios $funcionario0
 * @property CadMarca $marca0
 * @property CadVeiculo $modelo0
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
            [['marca', 'modelo', 'data_reserva', 'cliente', 'data_baixa_reserva', 'funcionario'], 'required'],
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
            'funcionario' => 'Funcionario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(CadLocatario::className(), ['id' => 'cliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionario()
    {
        return $this->hasOne(CadFuncionarios::className(), ['id' => 'funcionario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarca()
    {
        return $this->hasOne(CadMarca::className(), ['id' => 'marca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModelo()
    {
        return $this->hasOne(CadVeiculo::className(), ['id' => 'modelo']);
    }
}
