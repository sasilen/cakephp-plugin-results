<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $result
 */
?>

<div class="container">

<?php
$this->Breadcrumbs->templates([
    'wrapper' => '<ol class="breadcrumb">{{content}}</ol>',
    'separator' => '<li{{attrs}}>{{separator}}</li>'
]);
$this->Breadcrumbs->add('Results',['plugin'=>'Results','controller' => 'results', 'action' => 'index'],['class'=>'breadcrumb-item']);
$this->Breadcrumbs->add('Add',null,['class'=>'breadcrumb-item active']);
echo $this->Breadcrumbs->render(
    ['separator' => '/']
);
?>
<div class="row">
<div class="form-group col-sm-12">

    <?= $this->Form->create($result) ?>
    <fieldset>
        <?php
					  echo $this->Form->control('name',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('firstname',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('surname',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('club',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('email',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('race',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('league',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('distance',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('time', ['label' => ['class' => 'col-sm-2 control-label']]);
					  echo $this->Form->control('date',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('gender',['label' => ['class' => 'col-sm-2 control-label']]);
						echo $this->Form->control('birthdate',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('agegroup',['label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->control('ranking',['label' => ['class' => 'col-sm-2 control-label']]);
						echo $this->Form->control('user_id', ['default'=>$post['user_id'],'options' => $users,'label' => ['class' => 'col-sm-2 control-label']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
