<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Data Float'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dataFloats index large-10 medium-9 columns">
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
    <?php foreach ($dataFloats as $dataFloat): ?>
        <tr>
            <td><?= $this->Number->format($dataFloat->id) ?></td>
            <td><?= $this->Number->format($dataFloat->value) ?></td>
            <td>
                <?= $dataFloat->has('extension_field') ? $this->Html->link($dataFloat->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $dataFloat->extension_field->id]) : '' ?>
            </td>
            <td>
                <?= $dataFloat->has('extension_row') ? $this->Html->link($dataFloat->extension_row->id, ['controller' => 'ExtensionRows', 'action' => 'view', $dataFloat->extension_row->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $dataFloat->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataFloat->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataFloat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataFloat->id)]) ?>
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
