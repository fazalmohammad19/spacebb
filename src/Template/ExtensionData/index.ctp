<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Extension Data'), ['action' => 'add']) ?></li>
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
<div class="extensionData index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('extension_field_id') ?></th>
            <th><?= $this->Paginator->sort('value_int') ?></th>
            <th><?= $this->Paginator->sort('value_varchar') ?></th>
            <th><?= $this->Paginator->sort('value_datetime') ?></th>
            <th><?= $this->Paginator->sort('value_float') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($extensionData as $extensionData): ?>
        <tr>
            <td><?= $this->Number->format($extensionData->id) ?></td>
            <td>
                <?= $extensionData->has('extension_field') ? $this->Html->link($extensionData->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $extensionData->extension_field->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($extensionData->value_int) ?></td>
            <td><?= h($extensionData->value_varchar) ?></td>
            <td><?= h($extensionData->value_datetime) ?></td>
            <td><?= $this->Number->format($extensionData->value_float) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $extensionData->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $extensionData->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $extensionData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensionData->id)]) ?>
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
