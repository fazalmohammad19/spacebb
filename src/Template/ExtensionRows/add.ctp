<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Extension Rows'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Extension Tables'), ['controller' => 'ExtensionTables', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Table'), ['controller' => 'ExtensionTables', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Datetimes'), ['controller' => 'DataDatetimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Datetime'), ['controller' => 'DataDatetimes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Floats'), ['controller' => 'DataFloats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Float'), ['controller' => 'DataFloats', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Ints'), ['controller' => 'DataInts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Int'), ['controller' => 'DataInts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Texts'), ['controller' => 'DataTexts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Text'), ['controller' => 'DataTexts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Varchars'), ['controller' => 'DataVarchars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Varchar'), ['controller' => 'DataVarchars', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="extensionRows form large-10 medium-9 columns">
    <?= $this->Form->create($extensionRow); ?>
    <fieldset>
        <legend><?= __('Add Extension Row') ?></legend>
        <?php
            echo $this->Form->input('extension_table_id', ['options' => $extensionTables, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
