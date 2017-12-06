<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $results
 */
?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h3><?php echo __('Results',true);?></h3>
      <div class="row">
				<table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club') ?></th>
                <th scope="col"><?= $this->Paginator->sort('race') ?></th>
                <th scope="col"><?= $this->Paginator->sort('league') ?></th>
<!--                <th scope="col"><?= $this->Paginator->sort('distance') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
<!--                <th scope="col"><?= $this->Paginator->sort('gender') ?></th> 
                <th scope="col"><?= $this->Paginator->sort('agegroup') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('ranking') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
            <tr>
                <td><?= h($result->firstname) ?></td>
                <td><?= h($result->surname) ?></td>
                <td><?= h($result->club) ?></td>
                <td><?= h($result->race) ?></td>
                <td><?= h($result->league) ?></td>
<!--                 <td><?= $this->Number->format($result->distance) ?></td> -->
                <td><?= h($result->time) ?></td>
                <td><?= h($result->date) ?></td>
<!--                <td><?= h($result->gender) ?></td>
                <td><?= $this->Number->format($result->agegroup) ?></td> -->
                <td><?= $this->Number->format($result->ranking) ?></td>
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
		<?php if (isset($dates)): ?>
      <h3><?php echo __('Dates',true);?></h3>
			<?=$this->Results->menu($dates,'date',$query); ?>
    <?php endif?>

<!--    <?php if (isset($clubsd)): ?>
      <h3><?php echo __('Clubs',true);?></h3>
      <?=$this->Results->menu($clubs,'club',$query); ?>
    <?php endif?> -->


    <?php if (isset($races)): ?>
	    <h3><?php echo __('Races',true);?></h3>
			<?=$this->Results->menu($races,'race',$query); ?>
    <?php endif?>
    </div>
</div>
</div>
