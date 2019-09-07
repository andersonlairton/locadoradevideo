<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	'Create',

);

$this->menu=array(
	array('label'=>'Todos os emprestimos', 'url'=>array('index')),
	array('label'=>'Gerenciamento de emprestimos', 'url'=>array('admin')),
);

?>

<h1>Create Emprestimo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>



