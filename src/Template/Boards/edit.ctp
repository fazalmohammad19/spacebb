<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $board->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $board->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Boards'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="boards form large-10 medium-9 columns">
    <?= $this->Form->create($board); ?>
    <fieldset>
        <legend><?= __('Edit Board') ?></legend>
        <?php
            echo $this->Form->input('board_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
