<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emprestimo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Dias de Locacao');?>
		<?php echo $form->
		dropDownList($model,'Duracao',array(
			'Duracao do Emprestimo'=>'Duracao do Emprestimo',
			'2 dias'=>'2 dias',
			'5 dias'=>'5 dias',
			'7 dias'=>'7 dias'
		));?>

<div class="row">
		<?php echo $form->labelEx($model,'Data_Locacao'); ?>
		<?php echo $form->textArea($model,'Data_Locacao',array('rows'=>4, 'cols'=>10,'value'=>date('d/m/Y'),'readonly'=>'true'))//inserindo o valor da data convertido para string no banco de dados
		;?>

	</div>


		<?php
		
		 echo "data de hoje:",date("d/m/Y");
		 echo "   ";
		 	$atual = new DateTime();
           // $especifica = new DateTime(' 1990-01-22');
            $texto = new DateTime(' +7 days');
  			//$Dfm= explode("/", $atual);
  			echo "data de devolucao: ",$texto->format('d-m-Y');

           // echo(print_r($atual));
            //print_r($especifica);
           // echo(print_r($texto));
		 ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_cliente'); ?>
		<?php echo $form->textArea($model,'Id_cliente',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_filme'); ?>

		<?php
		if(empty($_POST["Id"]))//verificando se ha dados no id,empty verifica se ele esta vazio ou nao 
		{
			echo $form->textArea($model,'Id_filme',array('rows'=>6, 'cols'=>50 ,'readonly'=>'true')); 

		}else{
		 echo $form->textArea($model,'Id_filme',array('rows'=>6, 'cols'=>50,'value'=>$Id=$_POST["Id"])); 
		}
		 ?>
		<?php echo $form->error($model,'Id_filme'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');
		if($model->isNewRecord == 'Create')
		{
			echo "criar";

		}else{
			echo "atualizar";


		};
		
		 ?>

		

		
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->