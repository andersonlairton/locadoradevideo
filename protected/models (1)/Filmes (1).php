<?php

/**
 * This is the model class for table "filmes".
 *
 * The followings are the available columns in table 'filmes':
 * @property integer $Id
 * @property string $titulo
 * @property string $duracao
 * @property string $Sinopse
 * @property string $Disponivel
 * @property integer $Categoria
 *
 * The followings are the available model relations:
 * @property Emprestimo[] $emprestimos
 * @property CategoriaFilme $categoria
 */
class Filmes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'filmes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Categoria', 'numerical', 'integerOnly'=>true),
			array('titulo, duracao, Sinopse, Disponivel', 'safe'),
			array('titulo, duracao, Sinopse, Disponivel,Categoria','required'),
			array('duracao','numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, titulo, duracao, Sinopse, Disponivel, Categoria', 'safe', 'on'=>'search'),
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
			'fkemprestimos' => array(self::HAS_MANY, 'Emprestimo', 'Id_filme'),
			'fkcategoria' => array(self::BELONGS_TO, 'CategoriaFilme', 'Categoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'titulo' => 'Titulo',
			'duracao' => 'Duracao',
			'Sinopse' => 'Sinopse',
			'Disponivel' => 'Disponivel',
			'Categoria' => 'Categoria',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('duracao',$this->duracao,true);
		$criteria->compare('Sinopse',$this->Sinopse,true);
		$criteria->compare('Disponivel',$this->Disponivel,true);
		$criteria->compare('Categoria',$this->Categoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Filmes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
