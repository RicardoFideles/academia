<div class="teams view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Team'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Team'), array('action' => 'edit', $team['Team']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Team'), array('action' => 'delete', $team['Team']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Teams'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Team'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Competitors'), array('controller' => 'competitors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Competitor'), array('controller' => 'competitors', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Teachers'), array('controller' => 'teachers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Teacher'), array('controller' => 'teachers', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($team['Team']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($team['User']['id'], array('controller' => 'users', 'action' => 'view', $team['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($team['Team']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Representante'); ?></th>
		<td>
			<?php echo h($team['Team']['representante']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Competitors'); ?></h3>
	<?php if (!empty($team['Competitor'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Peso'); ?></th>
		<th><?php echo __('Pesocategoria Id'); ?></th>
		<th><?php echo __('Idade'); ?></th>
		<th><?php echo __('Idadecategoria Id'); ?></th>
		<th><?php echo __('Faixa Id'); ?></th>
		<th><?php echo __('Pago'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Teacher Id'); ?></th>
		<th><?php echo __('Posicao Chave'); ?></th>
		<th><?php echo __('Pagina'); ?></th>
		<th><?php echo __('Championship Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($team['Competitor'] as $competitor): ?>
		<tr>
			<td><?php echo $competitor['id']; ?></td>
			<td><?php echo $competitor['nome']; ?></td>
			<td><?php echo $competitor['team_id']; ?></td>
			<td><?php echo $competitor['email']; ?></td>
			<td><?php echo $competitor['peso']; ?></td>
			<td><?php echo $competitor['pesocategoria_id']; ?></td>
			<td><?php echo $competitor['idade']; ?></td>
			<td><?php echo $competitor['idadecategoria_id']; ?></td>
			<td><?php echo $competitor['faixa_id']; ?></td>
			<td><?php echo $competitor['pago']; ?></td>
			<td><?php echo $competitor['sexo']; ?></td>
			<td><?php echo $competitor['teacher_id']; ?></td>
			<td><?php echo $competitor['posicao_chave']; ?></td>
			<td><?php echo $competitor['pagina']; ?></td>
			<td><?php echo $competitor['championship_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'competitors', 'action' => 'view', $competitor['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'competitors', 'action' => 'edit', $competitor['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'competitors', 'action' => 'delete', $competitor['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $competitor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Competitor'), array('controller' => 'competitors', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Teachers'); ?></h3>
	<?php if (!empty($team['Teacher'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Senha'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($team['Teacher'] as $teacher): ?>
		<tr>
			<td><?php echo $teacher['id']; ?></td>
			<td><?php echo $teacher['user_id']; ?></td>
			<td><?php echo $teacher['nome']; ?></td>
			<td><?php echo $teacher['email']; ?></td>
			<td><?php echo $teacher['senha']; ?></td>
			<td><?php echo $teacher['team_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'teachers', 'action' => 'view', $teacher['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'teachers', 'action' => 'edit', $teacher['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'teachers', 'action' => 'delete', $teacher['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $teacher['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Teacher'), array('controller' => 'teachers', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
