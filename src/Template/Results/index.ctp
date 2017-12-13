<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $results
 */
?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
		<?php $this->Breadcrumbs->templates([
	    'wrapper' => '<ol class="breadcrumb">{{content}}</ol>',
	    'separator' => '<li{{attrs}}>{{separator}}</li>'
		]);
		$this->Breadcrumbs->add('Results',['plugin'=>'Results','controller' => 'results', 'action' => 'index'],['class'=>'breadcrumb-item']);
		if (isset($query['race'])) :
			$this->Breadcrumbs->add($query['race'],['plugin'=>'Results','controller' => 'results', 'action' => 'index','?'=>['race'=>$query['race']]],['class'=>'breadcrumb-item']);
		endif;
		if (isset($query['date'])) :
      $this->Breadcrumbs->add($query['date'],['plugin'=>'Results','controller' => 'results', 'action' => 'index','?'=>['date'=>$query['date']]],['class'=>'breadcrumb-item']);
    endif;
		if (isset($query['league'])) :
      $this->Breadcrumbs->add($query['league'],['plugin'=>'Results','controller' => 'results', 'action' => 'index','?'=>['league'=>$query['league']]],['class'=>'breadcrumb-item']);
    endif;
		$this->Breadcrumbs->add('index',null,['class'=>'breadcrumb-item active']);
		$this->Breadcrumbs->add($this->AuthLink->link($this->Html->image('Blog.ic_note_add_black_24px.svg'),['plugin'=>'Results','controller'=>'results','action' => 'add'],['escape'=>false,'class'=>'badge badge-info ml-1 float-right']));
		echo $this->Breadcrumbs->render(
	    ['separator' => '/']
		);
?>
      <div class="row">
				<table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club') ?></th>
								<?php if (!isset($query['race'])) : ?>
  	              <th scope="col"><?= $this->Paginator->sort('race') ?></th>
								<?php endif; ?>
                <th scope="col"><?= $this->Paginator->sort('league') ?></th>
<!--                <th scope="col"><?= $this->Paginator->sort('distance') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
								<?php if (!isset($query['date'])) : ?>
	                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
								<?php endif; ?>
<!--                <th scope="col"><?= $this->Paginator->sort('gender') ?></th> 
                <th scope="col"><?= $this->Paginator->sort('agegroup') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('ranking') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
            <tr>
                <td><?=$this->Html->link(h($result->firstname),['plugin'=>'Results','controller'=>'results','action' => 'index','?'=>['name'=>$result->name]]); ?></td>
                <td><?=$this->Html->link(h($result->surname),['plugin'=>'Results','controller'=>'results','action' => 'index','?'=>['name'=>$result->name]]); ?></td>
                <td><?=$this->Html->link(h($result->club),['plugin'=>'Results','controller'=>'results','action' => 'index','?'=>['club'=>$result->club]]); ?></td>
								<?php if (!isset($query['race'])) : ?>
	                <td><?=$this->Html->link(h($result->race),['plugin'=>'Results','controller'=>'results','action' => 'index','?'=>['race'=>$result->race]]); ?></td>
								<?php endif; ?>
                <td><?=$this->Html->link(h($result->league),['plugin'=>'Results','controller'=>'results','action' => 'index','?'=>['league'=>$result->league]]); ?></td>
<!--                 <td><?= $this->Number->format($result->distance) ?></td> -->
                <td><?= h($result->time->i18nFormat('HH:mm:ss')) ?></td>
								<?php if (!isset($query['date'])) : ?>
	                <td><?=$this->Html->link(h($result->date->i18nFormat('yyyy-MM-dd')),['plugin'=>'Results','controller'=>'results','action' => 'index','?'=>['date'=>$result->date->i18nFormat('yyyy-MM-dd')]]); ?></td>
								<?php endif; ?> 
<!--                <td><?= h($result->gender) ?></td>
                <td><?= $this->Number->format($result->agegroup) ?></td> -->
                <td><?= $this->Number->format($result->ranking) ?>
									 <?= $this->AuthLink->link($this->Html->image('Blog.ic_mode_edit_black_24px.svg'),['plugin'=>'Results','controller'=>'results','action' => 'edit',$result->id],['escape'=>false,'class'=>'badge badge-info ml-1 float-right']);?>
								</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    		<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    		</div>
			</div>
		</div>
    <div class="col-md-4">
		<?php if (isset($dates) && isset($query['race'])): ?>
      <h3><?php echo __('Dates',true);?></h3>
			<?=$this->Results->menu($dates,'date',$query); ?>
    <?php endif?>

    <?php if (isset($clubss)): ?>
      <h3><?php echo __('Clubs',true);?></h3>
      <?=$this->Results->menu($clubs,'club',$query); ?>
    <?php endif?>

		<?php if (isset($leagues) && isset($query['race'])): ?>
      <h3><?php echo __('Leagues',true);?></h3>
      <?=$this->Results->menu($leagues,'league',$query); ?>
    <?php endif?>

    <?php if (isset($races)): ?>
	    <h3><?php echo __('Races',true);?></h3>
			<?=$this->Results->menu($races,'race',$query); ?>
    <?php endif?>
    </div>
</div>
</div>
