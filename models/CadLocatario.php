<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cad_locatario".
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $telefone
 * @property string $celular
 * @property string $endereco
 * @property int $num_carteira_habilitacao
 *
 * @property Reserva[] $reservas
 */
class CadLocatario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cad_locatario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'celular', 'endereco', 'num_carteira_habilitacao'], 'required'],
            [['num_carteira_habilitacao'], 'integer'],
            [['nome', 'endereco'], 'string', 'max' => 50],
            [['cpf', 'telefone', 'celular'], 'string', 'max' => 11],
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
            'num_carteira_habilitacao' => 'Numero CNH',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::className(), ['cliente' => 'id']);
    }
}
