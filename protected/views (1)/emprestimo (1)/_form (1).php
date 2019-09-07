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

	<div class="row" >
		<?php echo $form->labelEx($model,'Dias de Locacao');?>
		<?php echo $form->
		dropDownList($model,'Duracao',array(
			1=>'Duracao do Emprestimo',
			'2 dias'=>'2 dias',
			'5 dias'=>'5 dias',
			'7 dias'=>'7 dias'
		));?>

<div class="row">

		<?php echo $form->labelEx($model,'Data_Locacao'); ?>
		<?php
		//$mascara= new CMaskedTextfield();
		//$mascara->mask='99/99/9999';

		echo $form->textArea($model,'Data_Locacao',array('data','type'=>'date','dateFormat'=>'yyyy/MM/dd'));//inserindo o valor da data convertido para string no banco de dados
		//$form->CMaskedTextfield($model,'Data_Locacao',array('mask'=>'yyyy/MM/dd'));
		?>

	</div>
	<div>

	<?php
	//$devolucao= new Datetime();
	$two_dias = new Datetime('+2 days');
	$sete_dias = new DateTime('+7 days');
	$cinco_dias = new dateTime('+5 days');
	echo $form->labelEx($model,'Data de devolucao');
	echo $form-> dropDownList($model,'Data_Devolucao',array(
		 //"data de devolucao: ",
		 //$devolucao->format('d/m/Y')=>$devolucao->format('d/m/Y'),
		 $two_dias->format('Y/m/d')=>$two_dias->format('d/m/Y'),
		 $cinco_dias->format('d/m/Y')=>$cinco_dias->format('d/m/Y'),
		 $sete_dias->format('d/m/Y')=>$sete_dias->format('d/m/Y'),
		)) ?>
	</div>
		<?php
		/*
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
		 */?>
	</div>

	<div class="row">
		
		<?php //echo $form->textArea($model,'Id_cliente',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'Id_cliente'); ?>
	</div>

	<div class="row">

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_cliente'); ?>
		<?php 
		$consulta=Locacao::model()->findAll();
		$valores=CHtml::listData($consulta,'Id','Nome');
		echo $form->dropDownList($model,'Id_cliente',$valores);
		?>
		<br/>
		<?php echo $form->labelEx($model,'Id_filme'); ?>
		<?php
		if(empty($_POST["Id"]))//verificando se ha dados no id,empty verifica se ele esta vazio ou nao 
		{
			echo $form->textArea($model,'Id_filme',array('rows'=>6, 'cols'=>50 ,'readonly'=>'true')); 
			echo $form->labelEx($model,'Dia Devolvido:');
			//echo $form->textArea($model,'Dia_devolvido')
			echo $form->textArea($model,'Dia_devolvido',array('rows'=>4, 'cols'=>10,
				'value'=>date('d/m/Y'),
				'readonly'=>'true'));

		}else{
		 echo $form->textArea($model,'Id_filme',array('rows'=>6, 'cols'=>50,'value'=>$Id=$_POST["Id"],'readonly'=>'true')); 
		}
		 ?>
		<?php echo $form->error($model,'Id_filme'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');
		if($model->isNewRecord == 'Create')
		{
		//	echo "criar";

			//ob_start();
		Yii::app()->db->createCommand()
    	->update('filmes',array('Disponivel'=>'nao'),
    	'id=:id', array(':id'=>$Id=$_POST["Id"]));
    	//->queryScalar();

		}else{
			//echo "atualizar";
			//echo "dia devolvido"
		};
		 ?>		
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->