<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Extension Field'), ['action' => 'edit', $extensionField->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Extension Field'), ['action' => 'delete', $extensionField->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensionField->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Extension Fields'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Field'), ['action' => 'add']) ?> </li>
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
<div class="extensionFields view large-10 medium-9 columns">
    <h2><?= h($extensionField->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Extension Table') ?></h6>
            <p><?= $extensionField->has('extension_table') ? $this->Html->link($extensionField->extension_table->name, ['controller' => 'ExtensionTables', 'action' => 'view', $extensionField->extension_table->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Field') ?></h6>
            <p><?= h($extensionField->field) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($extensionField->id) ?></p>
            <h6 class="subheader"><?= __('Last Row') ?></h6>
            <p><?= $this->Number->format($extensionField->last_row) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Type') ?></h6>
            <?= $this->Text->autoParagraph(h($extensionField->type)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related DataDatetimes') ?></h4>
    <?php if (!empty($extensionField->data_datetimes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Field Id') ?></th>
            <th><?= __('Extension Row Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionField->data_datetimes as $dataDatetimes): ?>
        <tr>
            <td><?= h($dataDatetimes->id) ?></td>
            <td><?= h($dataDatetimes->value) ?></td>
            <td><?= h($dataDatetimes->extension_field_id) ?></td>
            <td><?= h($dataDatetimes->extension_row_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'DataDatetimes', 'action' => 'view', $dataDatetimes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'DataDatetimes', 'action' => 'edit', $dataDatetimes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DataDatetimes', 'action' => 'delete', $dataDatetimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataDatetimes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related DataFloats') ?></h4>
    <?php if (!empty($extensionField->data_floats)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Field Id') ?></th>
            <th><?= __('Extension Row Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionField->data_floats as $dataFloats): ?>
        <tr>
            <td><?= h($dataFloats->id) ?></td>
            <td><?= h($dataFloats->value) ?></td>
            <td><?= h($dataFloats->extension_field_id) ?></td>
            <td><?= h($dataFloats->extension_row_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'DataFloats', 'action' => 'view', $dataFloats->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'DataFloats', 'action' => 'edit', $dataFloats->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DataFloats', 'action' => 'delete', $dataFloats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataFloats->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related DataInts') ?></h4>
    <?php if (!empty($extensionField->data_ints)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Field Id') ?></th>
            <th><?= __('Extension Row Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionField->data_ints as $dataInts): ?>
        <tr>
            <td><?= h($dataInts->id) ?></td>
            <td><?= h($dataInts->value) ?></td>
            <td><?= h($dataInts->extension_field_id) ?></td>
            <td><?= h($dataInts->extension_row_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'DataInts', 'action' => 'view', $dataInts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'DataInts', 'action' => 'edit', $dataInts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DataInts', 'action' => 'delete', $dataInts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataInts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related DataTexts') ?></h4>
    <?php if (!empty($extensionField->data_texts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Field Id') ?></th>
            <th><?= __('Extension Row Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionField->data_texts as $dataTexts): ?>
        <tr>
            <td><?= h($dataTexts->id) ?></td>
            <td><?= h($dataTexts->value) ?></td>
            <td><?= h($dataTexts->extension_field_id) ?></td>
            <td><?= h($dataTexts->extension_row_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'DataTexts', 'action' => 'view', $dataTexts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'DataTexts', 'action' => 'edit', $dataTexts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DataTexts', 'action' => 'delete', $dataTexts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataTexts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related DataVarchars') ?></h4>
    <?php if (!empty($extensionField->data_varchars)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Field Id') ?></th>
            <th><?= __('Extension Row Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionField->data_varchars as $dataVarchars): ?>
        <tr>
            <td><?= h($dataVarchars->id) ?></td>
            <td><?= h($dataVarchars->value) ?></td>
            <td><?= h($dataVarchars->extension_field_id) ?></td>
            <td><?= h($dataVarchars->extension_row_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'DataVarchars', 'action' => 'view', $dataVarchars->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'DataVarchars', 'action' => 'edit', $dataVarchars->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DataVarchars', 'action' => 'delete', $dataVarchars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataVarchars->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
