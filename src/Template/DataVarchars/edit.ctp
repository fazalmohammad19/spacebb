<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dataVarchar->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dataVarchar->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Data Varchars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataVarchars form large-10 medium-9 columns">
    <?= $this->Form->create($dataVarchar); ?>
    <fieldset>
        <legend><?= __('Edit Data Varchar') ?></legend>
        <?php
            echo $this->Form->input('value');
            echo $this->Form->input('extension_field_id', ['options' => $extensionFields, 'empty' => true]);
            echo $this->Form->input('extension_row_id', ['options' => $extensionRows]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
