<div class="competitors form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Competitor'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Competitor.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Competitor.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Competitors'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Teams'), array('controller' => 'teams', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Team'), array('controller' => 'teams', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pesocategorias'), array('controller' => 'pesocategorias', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pesocategoria'), array('controller' => 'pesocategorias', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Idadecategorias'), array('controller' => 'idadecategorias', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Idadecategoria'), array('controller' => 'idadecategorias', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Faixas'), array('controller' => 'faixas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Faixa'), array('controller' => 'faixas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Teachers'), array('controller' => 'teachers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Teacher'), array('controller' => 'teachers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Championships'), array('controller' => 'championships', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Championship'), array('controller' => 'championships', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Competitor', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('team_id', array('class' => 'form-control', 'placeholder' => 'Team Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peso', array('class' => 'form-control', 'placeholder' => 'Peso'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pesocategoria_id', array('class' => 'form-control', 'placeholder' => 'Pesocategoria Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('idade', array('class' => 'form-control', 'placeholder' => 'Idade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('idadecategoria_id', array('class' => 'form-control', 'placeholder' => 'Idadecategoria Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('faixa_id', array('class' => 'form-control', 'placeholder' => 'Faixa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pago', array('class' => 'form-control', 'placeholder' => 'Pago'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sexo', array('class' => 'form-control', 'placeholder' => 'Sexo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('teacher_id', array('class' => 'form-control', 'placeholder' => 'Teacher Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('posicao_chave', array('class' => 'form-control', 'placeholder' => 'Posicao Chave'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pagina', array('class' => 'form-control', 'placeholder' => 'Pagina'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('championship_id', array('class' => 'form-control', 'placeholder' => 'Championship Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
