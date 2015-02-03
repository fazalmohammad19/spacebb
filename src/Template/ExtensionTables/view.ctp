<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Extension Table'), ['action' => 'edit', $extensionTable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Extension Table'), ['action' => 'delete', $extensionTable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensionTable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Extension Tables'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Table'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['controller' => 'ExtensionFields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['controller' => 'ExtensionFields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extension Rows'), ['controller' => 'ExtensionRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Row'), ['controller' => 'ExtensionRows', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="extensionTables view large-10 medium-9 columns">
    <h2><?= h($extensionTable->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($extensionTable->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($extensionTable->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Ext For') ?></h6>
            <?= $this->Text->autoParagraph(h($extensionTable->ext_for)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ExtensionFields') ?></h4>
    <?php if (!empty($extensionTable->extension_fields)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Extension Table Id') ?></th>
            <th><?= __('Field') ?></th>
            <th><?= __('Type') ?></th>
            <th><?= __('Last Row') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionTable->extension_fields as $extensionFields): ?>
        <tr>
            <td><?= h($extensionFields->id) ?></td>
            <td><?= h($extensionFields->extension_table_id) ?></td>
            <td><?= h($extensionFields->field) ?></td>
            <td><?= h($extensionFields->type) ?></td>
            <td><?= h($extensionFields->last_row) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ExtensionFields', 'action' => 'view', $extensionFields->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ExtensionFields', 'action' => 'edit', $extensionFields->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ExtensionFields', 'action' => 'delete', $extensionFields->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensionFields->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ExtensionRows') ?></h4>
    <?php if (!empty($extensionTable->extension_rows)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Extension Table Id') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionTable->extension_rows as $extensionRows): ?>
        <tr>
            <td><?= h($extensionRows->id) ?></td>
            <td><?= h($extensionRows->extension_table_id) ?></td>
            <td><?= h($extensionRows->created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ExtensionRows', 'action' => 'view', $extensionRows->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ExtensionRows', 'action' => 'edit', $extensionRows->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ExtensionRows', 'action' => 'delete', $extensionRows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensionRows->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
