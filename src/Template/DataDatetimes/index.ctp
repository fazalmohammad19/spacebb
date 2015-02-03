<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Data Datetime'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataDatetimes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('value') ?></th>
            <th><?= $this->Paginator->sort('extension_field_id') ?></th>
            <th><?= $this->Paginator->sort('extension_row_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($dataDatetimes as $dataDatetime): ?>
        <tr>
            <td><?= $this->Number->format($dataDatetime->id) ?></td>
            <td><?= h($dataDatetime->value) ?></td>
            <td>
                <?= $dataDatetime->has('extension_field') ? $this->Html->link($dataDatetime->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $dataDatetime->extension_field->id]) : '' ?>
            </td>
            <td>
                <?= $dataDatetime->has('extension_row') ? $this->Html->link($dataDatetime->extension_row->id, ['controller' => 'ExtensionRows', 'action' => 'view', $dataDatetime->extension_row->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $dataDatetime->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataDatetime->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataDatetime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataDatetime->id)]) ?>
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
