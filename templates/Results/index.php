<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $results
 */
?>
<div class="container">
  <div class="row">
    <div class="col-md-9">
		<?php $this->Breadcrumbs->setTemplates([
	    'wrapper' => '<ol class="breadcrumb">{{content}}</ol>',
	    'separator' => '<li{{attrs}}>{{separator}}</li>'
		]);
		$this->Breadcrumbs->add('Results',['plugin'=>'Sasilen/Results','controller' => 'results', 'action' => 'index'],['class'=>'breadcrumb-item']);
		if (isset($query['race'])) :
			$this->Breadcrumbs->add($query['race'],['plugin'=>'Sasilen/Results','controller' => 'results', 'action' => 'index','?'=>['race'=>$query['race']]],['class'=>'breadcrumb-item']);
		endif;
		if (isset($query['date'])) :
      $this->Breadcrumbs->add($query['date'],['plugin'=>'Sasilen/Results','controller' => 'results', 'action' => 'index','?'=>['date'=>$query['date']]],['class'=>'breadcrumb-item']);
    endif;
		if (isset($query['league'])) :
      $this->Breadcrumbs->add($query['league'],['plugin'=>'Sasilen/Results','controller' => 'results', 'action' => 'index','?'=>['league'=>$query['league']]],['class'=>'breadcrumb-item']);
    endif;
		$this->Breadcrumbs->add('index',null,['class'=>'breadcrumb-item active']);
		$this->Breadcrumbs->add($this->AuthLink->link($this->Html->image('Blog.ic_note_add_black_24px.svg'),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'add'],['escape'=>false,'class'=>'badge badge-info ml-1 float-right']));
		echo $this->Breadcrumbs->render(
	    ['separator' => '/']
		);
?>
      <div class="row">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- google_728x90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3385878572697735"
     data-ad-slot="3338879303"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				<table class="table table-sm">
        <thead class="thead-light">
            <tr>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club') ?></th>
								<?php if (!isset($query['race'])) : ?>
<!--  	              <th scope="col"><?= $this->Paginator->sort('race') ?></th> -->
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
                <td><?=$this->Html->link(h($result->firstname),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'index','?'=>['name'=>$result->name]]); ?></td>
                <td><?=$this->Html->link(h($result->surname),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'index','?'=>['name'=>$result->name]]); ?></td>
                <td><?=$this->Html->link(h($result->club),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'index','?'=>['club'=>$result->club]]); ?></td>
								<?php if (!isset($query['race'])) : ?>
<!--	                <td><?=$this->Html->link(h($result->race),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'index','?'=>['race'=>$result->race]]); ?></td>-->
								<?php endif; ?>
                <td><?=$this->Html->link(h($result->league),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'index','?'=>['league'=>$result->league]]); ?></td>
<!--                 <td><?= $this->Number->format($result->distance) ?></td> -->
                <td><?= h($result->time->i18nFormat('HH:mm:ss')) ?></td>
								<?php if (!isset($query['date'])) : ?>
	                <td><?=$this->Html->link(h($result->date->i18nFormat('yyyy-MM-dd')),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'index','?'=>['date'=>$result->date->i18nFormat('yyyy-MM-dd')]]); ?></td>
								<?php endif; ?> 
<!--                <td><?= h($result->gender) ?></td>
                <td><?= $this->Number->format($result->agegroup) ?></td> -->
                <td><?= $this->Number->format($result->ranking) ?>
									 <?= $this->AuthLink->link($this->Html->image('Blog.ic_mode_edit_black_24px.svg'),['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'edit',$result->id],['escape'=>false,'class'=>'float-right']);?>
								   <?php if ($this->AuthLink->isAuthorized(['plugin'=>'Sasilen/Results','controller'=>'results','action' => 'delete',$result->id])) : ?> 
                     <?= $this->Form->postLink($this->Html->image('ic_delete_forever_black_24px.svg'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id),'escape'=>false,'class'=>'float-right']) ?>
                   <?php endif; ?>

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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
			</div>
		</div>
    <div class="col-md-3">
		<?php if (isset($dates)): ?>
      <h3><?php echo __('Dates',true);?></h3>
			<?=$this->Results->menu($dates,'date',$query); ?>
    <?php endif?>

    <?php if (isset($clubss)): ?>
      <h3><?php echo __('Clubs',true);?></h3>
      <?=$this->Results->menu($clubs,'club',$query); ?>
    <?php endif?>

		<?php if (isset($leagues)): ?>
      <h3><?php echo __('Leagues',true);?></h3>
      <?=$this->Results->menu($leagues,'league',$query); ?>
    <?php endif?>

    <?php if (isset($races)): ?>
	    <h3><?php echo __('Races',true);?></h3>
			<?=$this->Results->menu($races,'race',$query); ?>
    <?php endif?>
		<hr/>
		<H3> Laukkosken Taimi </h3>
		<p> Kotojärven ympärijuoksun tulostaulu.</p>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- sidebanner -->
		<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3385878572697735"
     data-ad-slot="2808014484"
     data-ad-format="auto"></ins>
		<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
</div>
</div>