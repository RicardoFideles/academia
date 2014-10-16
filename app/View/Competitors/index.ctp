<div class="competitors index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Competitors'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Competitor'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('nome'); ?></th>
						<th><?php echo $this->Paginator->sort('team_id'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('peso'); ?></th>
						<th><?php echo $this->Paginator->sort('pesocategoria_id'); ?></th>
						<th><?php echo $this->Paginator->sort('idade'); ?></th>
						<th><?php echo $this->Paginator->sort('idadecategoria_id'); ?></th>
						<th><?php echo $this->Paginator->sort('faixa_id'); ?></th>
						<th><?php echo $this->Paginator->sort('pago'); ?></th>
						<th><?php echo $this->Paginator->sort('sexo'); ?></th>
						<th><?php echo $this->Paginator->sort('teacher_id'); ?></th>
						<th><?php echo $this->Paginator->sort('posicao_chave'); ?></th>
						<th><?php echo $this->Paginator->sort('pagina'); ?></th>
						<th><?php echo $this->Paginator->sort('championship_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($competitors as $competitor): ?>
					<tr>
						<td><?php echo h($competitor['Competitor']['id']); ?>&nbsp;</td>
						<td><?php echo h($competitor['Competitor']['nome']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($competitor['Team']['id'], array('controller' => 'teams', 'action' => 'view', $competitor['Team']['id'])); ?>
		</td>
						<td><?php echo h($competitor['Competitor']['email']); ?>&nbsp;</td>
						<td><?php echo h($competitor['Competitor']['peso']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($competitor['Pesocategoria']['id'], array('controller' => 'pesocategorias', 'action' => 'view', $competitor['Pesocategoria']['id'])); ?>
		</td>
						<td><?php echo h($competitor['Competitor']['idade']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($competitor['Idadecategoria']['id'], array('controller' => 'idadecategorias', 'action' => 'view', $competitor['Idadecategoria']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($competitor['Faixa']['id'], array('controller' => 'faixas', 'action' => 'view', $competitor['Faixa']['id'])); ?>
		</td>
						<td><?php echo h($competitor['Competitor']['pago']); ?>&nbsp;</td>
						<td><?php echo h($competitor['Competitor']['sexo']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($competitor['Teacher']['id'], array('controller' => 'teachers', 'action' => 'view', $competitor['Teacher']['id'])); ?>
		</td>
						<td><?php echo h($competitor['Competitor']['posicao_chave']); ?>&nbsp;</td>
						<td><?php echo h($competitor['Competitor']['pagina']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($competitor['Championship']['id'], array('controller' => 'championships', 'action' => 'view', $competitor['Championship']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $competitor['Competitor']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $competitor['Competitor']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $competitor['Competitor']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $competitor['Competitor']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->