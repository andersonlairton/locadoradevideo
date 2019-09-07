<?php
/* @var $this LocacaoControllerController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio Cliente', 'url'=>array('index')),
	array('label'=>'gerenciamento de cliente', 'url'=>array('admin')),
	array('label'=>'Filmes','url'=>'index.php?r=Filmes/index')
);
?>

<h1>Cadastrar Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

