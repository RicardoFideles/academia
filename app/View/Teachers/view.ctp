<div class="teachers view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Teacher'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Teacher'), array('action' => 'edit', $teacher['Teacher']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Teacher'), array('action' => 'delete', $teacher['Teacher']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Teachers'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Teacher'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Teams'), array('controller' => 'teams', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Team'), array('controller' => 'teams', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Competitors'), array('controller' => 'competitors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Competitor'), array('controller' => 'competitors', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($teacher['Teacher']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($teacher['User']['id'], array('controller' => 'users', 'action' => 'view', $teacher['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($teacher['Teacher']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($teacher['Teacher']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Senha'); ?></th>
		<td>
			<?php echo h($teacher['Teacher']['senha']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Team'); ?></th>
		<td>
			<?php echo $this->Html->link($teacher['Team']['id'], array('controller' => 'teams', 'action' => 'view', $teacher['Team']['id'])); ?>
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
	<?php if (!empty($teacher['Competitor'])): ?>
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
	<?php foreach ($teacher['Competitor'] as $competitor): ?>
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
