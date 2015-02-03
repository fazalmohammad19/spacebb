<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Board'), ['action' => 'edit', $board->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Board'), ['action' => 'delete', $board->id], ['confirm' => __('Are you sure you want to delete # {0}?', $board->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Boards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Board'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="boards view large-10 medium-9 columns">
    <h2><?= h($board->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Board Name') ?></h6>
            <p><?= h($board->board_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($board->id) ?></p>
        </div>
    </div>
</div>
