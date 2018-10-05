<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cad_titulos".
 *
 * @property int $id
 * @property string $placa
 * @property string $marca
 * @property string $modelo
 * @property string $ano_fabricacao
 * @property double $valor_diario
 */
class Veiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cad_veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['placa', 'marca', 'modelo', 'ano_fabricacao', 'valor_diario'], 'required'],
            [['ano_fabricacao'], 'safe'],
            [['valor_diario'], 'number'],
            [['placa'], 'string', 'max' => 7],
            [['marca'], 'string', 'max' => 20],
            [['modelo'], 'string', 'max' => 50],
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
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'ano_fabricacao' => 'Ano Fabricacao',
            'valor_diario' => 'Valor Diario',
        ];
    }
}
