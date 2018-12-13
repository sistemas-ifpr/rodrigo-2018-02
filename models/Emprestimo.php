<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo".
 *
 * @property int $id
 * @property int $placa
 * @property string $data_emprestimo
 * @property string $data_devolucao
 * @property double $valor_locacao
 * @property int $cliente
 * @property int $funcionario
 * @property int $ativo
 *
 * @property Locatario $cliente
 * @property Funcionarios $funcionario
 * @property Veiculo $placa
 */
class Emprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['placa', 'data_emprestimo', 'data_devolucao', 'valor_locacao', 'cliente', 'funcionario', 'ativo'], 'required'],
            [['placa', 'cliente', 'funcionario', 'ativo'], 'integer'],
            [['data_emprestimo', 'data_devolucao'], 'safe'],
            [['valor_locacao'], 'number'],
            [['cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Locatario::className(), 'targetAttribute' => ['cliente' => 'id']],
            [['funcionario'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionarios::className(), 'targetAttribute' => ['funcionario' => 'id']],
            [['placa'], 'exist', 'skipOnError' => true, 'targetClass' => Veiculo::className(), 'targetAttribute' => ['placa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'placa' => 'Placa',
            'data_emprestimo' => 'Data Empréstimo',
            'data_devolucao' => 'Data Devolução',
            'valor_locacao' => 'Valor Locação',
            'cliente' => 'Cliente',
            'funcionario' => 'Funcionário',
            'ativo' => 'Ativo',
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
    public function getPlaca()
    {
        return $this->hasOne(Veiculo::className(), ['id' => 'placa']);
    }
}
