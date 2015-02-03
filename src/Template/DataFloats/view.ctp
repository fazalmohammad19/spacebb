<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Data Float'), ['action' => 'edit', $dataFloat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Data Float'), ['action' => 'delete', $dataFloat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataFloat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Data Floats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Float'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataFloats view large-10 medium-9 columns">
    <h2><?= h($dataFloat->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Extension Field') ?></h6>
            <p><?= $dataFloat->has('extension_field') ? $this->Html->link($dataFloat->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $dataFloat->extension_field->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Extension Row') ?></h6>
            <p><?= $dataFloat->has('extension_row') ? $this->Html->link($dataFloat->extension_row->id, ['controller' => 'ExtensionRows', 'action' => 'view', $dataFloat->extension_row->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($dataFloat->id) ?></p>
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= $this->Number->format($dataFloat->value) ?></p>
        </div>
    </div>
</div>
