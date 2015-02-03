<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Data Int'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataInts index large-10 medium-9 columns">
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
    <?php foreach ($dataInts as $dataInt): ?>
        <tr>
            <td><?= $this->Number->format($dataInt->id) ?></td>
            <td><?= $this->Number->format($dataInt->value) ?></td>
            <td>
                <?= $dataInt->has('extension_field') ? $this->Html->link($dataInt->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $dataInt->extension_field->id]) : '' ?>
            </td>
            <td>
                <?= $dataInt->has('extension_row') ? $this->Html->link($dataInt->extension_row->id, ['controller' => 'ExtensionRows', 'action' => 'view', $dataInt->extension_row->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $dataInt->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataInt->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataInt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataInt->id)]) ?>
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
