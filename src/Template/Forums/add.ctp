<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Forums'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="forums form large-10 medium-9 columns">
    <?= $this->Form->create($forum); ?>
    <fieldset>
        <legend><?= __('Add Forum') ?></legend>
        <?php
            echo $this->Form->input('forum_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
