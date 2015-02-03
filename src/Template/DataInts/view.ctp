<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Data Int'), ['action' => 'edit', $dataInt->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Data Int'), ['action' => 'delete', $dataInt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataInt->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Data Ints'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Int'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataInts view large-10 medium-9 columns">
    <h2><?= h($dataInt->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Extension Field') ?></h6>
            <p><?= $dataInt->has('extension_field') ? $this->Html->link($dataInt->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $dataInt->extension_field->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Extension Row') ?></h6>
            <p><?= $dataInt->has('extension_row') ? $this->Html->link($dataInt->extension_row->id, ['controller' => 'ExtensionRows', 'action' => 'view', $dataInt->extension_row->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($dataInt->id) ?></p>
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= $this->Number->format($dataInt->value) ?></p>
        </div>
    </div>
</div>
