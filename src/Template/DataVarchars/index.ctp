<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Data Varchar'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataVarchars index large-10 medium-9 columns">
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
    <?php foreach ($dataVarchars as $dataVarchar): ?>
        <tr>
            <td><?= $this->Number->format($dataVarchar->id) ?></td>
            <td><?= h($dataVarchar->value) ?></td>
            <td>
                <?= $dataVarchar->has('extension_field') ? $this->Html->link($dataVarchar->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $dataVarchar->extension_field->id]) : '' ?>
            </td>
            <td>
                <?= $dataVarchar->has('extension_row') ? $this->Html->link($dataVarchar->extension_row->id, ['controller' => 'ExtensionRows', 'action' => 'view', $dataVarchar->extension_row->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $dataVarchar->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataVarchar->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataVarchar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataVarchar->id)]) ?>
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
