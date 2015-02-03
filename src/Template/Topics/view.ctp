<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Topic'), ['action' => 'edit', $topic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Topic'), ['action' => 'delete', $topic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="topics view large-10 medium-9 columns">
    <h2><?= h($topic->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Forum Name') ?></h6>
            <p><?= h($topic->forum_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($topic->id) ?></p>
        </div>
    </div>
</div>
