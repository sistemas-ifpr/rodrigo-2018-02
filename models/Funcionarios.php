<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cad_funcionarios".
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $telefone
 * @property string $celular
 * @property string $endereco
 * @property string $data_admissao

 */
class Funcionarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cad_funcionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'celular', 'endereco', 'data_admissao'], 'required'],
            [['data_admissao'], 'safe'],
            [['nome', 'endereco'], 'string', 'max' => 50],
            [['cpf', 'telefone', 'celular'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cpf' => 'CPF',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
            'endereco' => 'Endereço',
            'data_admissao' => 'Data Admissão',
            'data_demissao' => 'Data Demissão',
        ];
    }
}
