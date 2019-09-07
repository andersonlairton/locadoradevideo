<?php

/**
 * This is the model class for table "emprestimo".
 *
 * The followings are the available columns in table 'emprestimo':
 * @property integer $Id
 * @property string $Duracao
 * @property integer $Id_cliente
 * @property integer $Id_filme
 * @property string $Data_Locacao
 * @property string $Data_Devolucao
 *
 * The followings are the available model relations:
 * @property Filmes $idFilme
 * @property Locacao $idCliente
 */
class Emprestimo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'emprestimo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id_cliente, Id_filme', 'numerical', 'integerOnly'=>true),
			array('Duracao, Data_Locacao, Data_Devolucao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Duracao, Id_cliente, Id_filme, Data_Locacao, Data_Devolucao', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fkfilme' => array(self::BELONGS_TO, 'Filmes', 'Id_filme'),
			'fkcliente' => array(self::BELONGS_TO, 'Locacao', 'Id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Duracao' => 'Duracao',
			'Id_cliente' => 'Id Cliente',
			'Id_filme' => 'Id Filme',
			'Data_Locacao' => 'Data Locacao',
			'Data_Devolucao' => 'Data Devolucao',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Duracao',$this->Duracao,true);
		$criteria->compare('Id_cliente',$this->Id_cliente);
		$criteria->compare('Id_filme',$this->Id_filme);
		$criteria->compare('Data_Locacao',$this->Data_Locacao,true);
		$criteria->compare('Data_Devolucao',$this->Data_Devolucao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Emprestimo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
