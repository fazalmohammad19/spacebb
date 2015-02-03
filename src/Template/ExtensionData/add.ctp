<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Extension Data'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
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
<div class="extensionData form large-10 medium-9 columns">
    <?= $this->Form->create($extensionData); ?>
    <fieldset>
        <legend><?= __('Add Extension Data') ?></legend>
        <?php
            echo $this->Form->input('extension_field_id', ['options' => $extensionFields]);
            echo $this->Form->input('value_int');
            echo $this->Form->input('value_varchar');
            echo $this->Form->input('value_text');
            echo $this->Form->input('value_datetime');
            echo $this->Form->input('value_float');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
