<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Data Datetimes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataDatetimes form large-10 medium-9 columns">
    <?= $this->Form->create($dataDatetime); ?>
    <fieldset>
        <legend><?= __('Add Data Datetime') ?></legend>
        <?php
            echo $this->Form->input('value');
            echo $this->Form->input('extension_field_id', ['options' => $extensionFields]);
            echo $this->Form->input('extension_row_id', ['options' => $extensionRows]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
