<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $extensionTable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $extensionTable->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Extension Tables'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="extensionTables form large-10 medium-9 columns">
    <?= $this->Form->create($extensionTable); ?>
    <fieldset>
        <legend><?= __('Edit Extension Table') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('ext_for');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
