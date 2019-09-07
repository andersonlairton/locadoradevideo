<?php
$model=new CadastroCliModel;
?>
<div class="form">

	
		<?php $form=$this->beginWidget('CActiveForm'); ?>
 
    	<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<?php echo $form->label($model,'nome');?>
			<?php echo $form->TextField($model,'nome');?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'telefone');?>
			<?php echo $form->TextField($model,'telefone');?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'email');?>
			<?php echo $form->TextField($model,'email');?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'idade');?>
			<?php echo $form->TextField($model,'idade');?>
		</div>

		<div class="row submit">
			<?php echo CHtml::submitButton('Cadastrar');?>
		</div>

	<?php $this->endWidget(); ?>
</div><!-- form -->

