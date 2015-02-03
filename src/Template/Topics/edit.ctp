<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $topic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="topics form large-10 medium-9 columns">
    <?= $this->Form->create($topic); ?>
    <fieldset>
        <legend><?= __('Edit Topic') ?></legend>
        <?php
            echo $this->Form->input('forum_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
