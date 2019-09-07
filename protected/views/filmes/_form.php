<?php
/* @var $this FilmesController */
/* @var $model Filmes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'filmes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textArea($model,'titulo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duracao'); ?>
		<?php echo $form->textArea($model,'duracao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'duracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sinopse'); ?>
		<?php echo $form->textArea($model,'Sinopse',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Sinopse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Disponivel'); ?>
		<?php //echo $form->textArea($model,'Disponivel',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'Disponivel'); ?>
		<?php echo $form->dropDownList($model,'Disponivel',array('Disponibilidade'=>'Disponibilidade','Sim'=>'Sim','nao'=>'nao'));?>
	</div>

	<div class="row">

		
		<?php //echo $form->textArea($model,'Categoria',array('rows'=>6, 'cols'=>50,'value'=>'Insira a categoria')); ?>
		<?php //echo $form->error($model,'Categoria'); ?>
		<?php echo $form->labelEx($model,'Categoria:');?>
		<?php

		$models=Categoria::model()->findAll('1');//pesquisando no banco
		//var_dump($models);
		$valores=CHtml::listData($models,'id','categoria');//organizando
		//var_dump($valores);

		echo $form->dropDownList($model,'Categoria',$valores);
			/*echo $form->dropDownList(
				$Categoria,
				//'categoria',
				CHtml::listData($model::model()->findAll('categoria'),'id'),array('empty'=>'select type'))
			 /*echo $form->dropDownList(
				$model,
				'Categoria',
				CHtml::listData(Categoria::model()->findAll('categoria_filme'),'categoria')



			);

			 echo $form->error($model,'categoria');


*/
		/*echo $form->dropDownList($model, 'Categoria', array(
			null=>'selecione o genero do filme',
			$user = Yii::app()->db->createCommand()//preparando comando
    		->select('categoria')//qual dado pegar
    		->from('categoria_filme')//onde pegar
    		//->queryRow()
    		->queryAll()
    		))//pegue todos os dados

    	//	CHtml::listData($model->fkcategoria->categoria::model()->findAll())
		/*	))

		
		*/
		?>

	
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->