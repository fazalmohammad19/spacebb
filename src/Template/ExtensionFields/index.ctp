<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Extension Field'), ['action' => 'add']) ?></li>
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
<div class="extensionFields index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('extension_table_id') ?></th>
            <th><?= $this->Paginator->sort('field') ?></th>
            <th><?= $this->Paginator->sort('last_row') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($extensionFields as $extensionField): ?>
        <tr>
            <td><?= $this->Number->format($extensionField->id) ?></td>
            <td>
                <?= $extensionField->has('extension_table') ? $this->Html->link($extensionField->extension_table->name, ['controller' => 'ExtensionTables', 'action' => 'view', $extensionField->extension_table->id]) : '' ?>
            </td>
            <td><?= h($extensionField->field) ?></td>
            <td><?= $this->Number->format($extensionField->last_row) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $extensionField->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $extensionField->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $extensionField->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensionField->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
