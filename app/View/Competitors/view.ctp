<div class="competitors view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Competitor'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Competitor'), array('action' => 'edit', $competitor['Competitor']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Competitor'), array('action' => 'delete', $competitor['Competitor']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $competitor['Competitor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Competitors'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Competitor'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Teams'), array('controller' => 'teams', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Team'), array('controller' => 'teams', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pesocategorias'), array('controller' => 'pesocategorias', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pesocategoria'), array('controller' => 'pesocategorias', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Idadecategorias'), array('controller' => 'idadecategorias', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Idadecategoria'), array('controller' => 'idadecategorias', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Faixas'), array('controller' => 'faixas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Faixa'), array('controller' => 'faixas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Teachers'), array('controller' => 'teachers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Teacher'), array('controller' => 'teachers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Championships'), array('controller' => 'championships', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Championship'), array('controller' => 'championships', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($competitor['Competitor']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Team'); ?></th>
		<td>
			<?php echo $this->Html->link($competitor['Team']['id'], array('controller' => 'teams', 'action' => 'view', $competitor['Team']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peso'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['peso']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pesocategoria'); ?></th>
		<td>
			<?php echo $this->Html->link($competitor['Pesocategoria']['id'], array('controller' => 'pesocategorias', 'action' => 'view', $competitor['Pesocategoria']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Idade'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['idade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Idadecategoria'); ?></th>
		<td>
			<?php echo $this->Html->link($competitor['Idadecategoria']['id'], array('controller' => 'idadecategorias', 'action' => 'view', $competitor['Idadecategoria']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Faixa'); ?></th>
		<td>
			<?php echo $this->Html->link($competitor['Faixa']['id'], array('controller' => 'faixas', 'action' => 'view', $competitor['Faixa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pago'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['pago']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sexo'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['sexo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Teacher'); ?></th>
		<td>
			<?php echo $this->Html->link($competitor['Teacher']['id'], array('controller' => 'teachers', 'action' => 'view', $competitor['Teacher']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Posicao Chave'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['posicao_chave']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pagina'); ?></th>
		<td>
			<?php echo h($competitor['Competitor']['pagina']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Championship'); ?></th>
		<td>
			<?php echo $this->Html->link($competitor['Championship']['id'], array('controller' => 'championships', 'action' => 'view', $competitor['Championship']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

