<?php
/* @var $this LocacaoControllerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locacaos',
);

$this->menu=array(//menu lateral
	array('label'=>'Cadastrar Cliete', 'url'=>array('create')),
	array('label'=>'gerenciamento de Cliente', 'url'=>array('admin')),
	//array('label'=>'Cadastro Cliente','url'=>'index.php?r=locacao/create'),//trocando a url
	array('label'=>'cadastrar filme','url'=>'index.php?r=filmes/create'),
	//array('label'=>'gerenciamento de filme','url'=>'index.php?r=filmes/admin')
);
?>

<h1>Clietes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
