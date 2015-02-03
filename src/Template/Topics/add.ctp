<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="topics form large-10 medium-9 columns">
    <?= $this->Form->create($topic); ?>
    <fieldset>
        <legend><?= __('Add Topic') ?></legend>
        <?php
            echo $this->Form->input('forum_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
