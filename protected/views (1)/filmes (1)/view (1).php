<?php
/* @var $this FilmesController */
/* @var $model Filmes */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Filmes', 'url'=>array('index')),
	array('label'=>'Create Filmes', 'url'=>array('create')),
	array('label'=>'Update Filmes', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Filmes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Filmes', 'url'=>array('admin')),
);
?>

<h1>View Filmes #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'titulo',
		'duracao',
		'Sinopse',
		'Disponivel',
		//'Categoria',
	),
)); ?>

<div>
	<form action="index.php?r=emprestimo/create" method="post">
		<input type="text" name="Id" style="display:none" value="<?php echo $model->Id; ?>"></input>
		<br>
		<input type="submit" name="emprestimo" value="efetuar locacao">
	</form>
</div>
