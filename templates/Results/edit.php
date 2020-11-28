<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $result
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="results form content">
            <?= $this->Form->create($result) ?>
            <fieldset>
                <legend><?= __('Edit Result') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('surname');
                    echo $this->Form->control('club');
                    echo $this->Form->control('email');
                    echo $this->Form->control('race');
                    echo $this->Form->control('league');
                    echo $this->Form->control('distance');
                    echo $this->Form->control('time', ['empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('gender');
                    echo $this->Form->control('birthdate', ['empty' => true]);
                    echo $this->Form->control('agegroup');
                    echo $this->Form->control('ranking');
                    echo $this->Form->control('user_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

