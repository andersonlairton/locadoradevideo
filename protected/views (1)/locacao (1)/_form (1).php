<?php
/* @var $this LocacaoControllerController */
/* @var $model Locacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'locacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'Idd'); ?>
		<?php //echo $form->textField($model,'Id'); ?>
		<?php //echo $form->error($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nome'); ?>
		<?php echo $form->textArea($model,'Nome',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefone'); ?>
		<?php echo $form->textField($model,'Telefone'); ?>
		<?php echo $form->error($model,'Telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textArea($model,'Email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Idade'); ?>
		<?php echo $form->textField($model,'Idade'); ?>
		<?php echo $form->error($model,'Idade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->