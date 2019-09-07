<?php

/**
 * This is the model class for table "locacao".
 *
 * The followings are the available columns in table 'locacao':
 * @property integer $Id
 * @property string $Nome
 * @property integer $Telefone
 * @property string $Email
 * @property integer $Idade
 *
 * The followings are the available model relations:
 * @property Emprestimo[] $emprestimos
 */
class Locacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'locacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Telefone, Idade', 'numerical', 'integerOnly'=>true),
			array('Nome, Email', 'safe'),
			array('Nome, Email,Telefone, Idade','required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Nome, Telefone, Email, Idade', 'safe', 'on'=>'search'),
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
			'emprestimos' => array(self::HAS_MANY, 'Emprestimo', 'Id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Nome' => 'Nome',
			'Telefone' => 'Telefone',
			'Email' => 'Email',
			'Idade' => 'Idade',
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
		$criteria->compare('Nome',$this->Nome,true);
		$criteria->compare('Telefone',$this->Telefone);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Idade',$this->Idade);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Locacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
