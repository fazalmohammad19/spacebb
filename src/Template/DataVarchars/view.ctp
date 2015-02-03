<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Data Varchar'), ['action' => 'edit', $dataVarchar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Data Varchar'), ['action' => 'delete', $dataVarchar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataVarchar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Data Varchars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Varchar'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataVarchars view large-10 medium-9 columns">
    <h2><?= h($dataVarchar->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= h($dataVarchar->value) ?></p>
            <h6 class="subheader"><?= __('Extension Field') ?></h6>
            <p><?= $dataVarchar->has('extension_field') ? $this->Html->link($dataVarchar->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $dataVarchar->extension_field->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Extension Row') ?></h6>
            <p><?= $dataVarchar->has('extension_row') ? $this->Html->link($dataVarchar->extension_row->id, ['controller' => 'ExtensionRows', 'action' => 'view', $dataVarchar->extension_row->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($dataVarchar->id) ?></p>
        </div>
    </div>
</div>
