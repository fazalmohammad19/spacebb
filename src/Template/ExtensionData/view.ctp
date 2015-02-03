<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Extension Data'), ['action' => 'edit', $extensionData->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Extension Data'), ['action' => 'delete', $extensionData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extensionData->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Extension Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extension Data'), ['action' => 'add']) ?> </li>
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
<div class="extensionData view large-10 medium-9 columns">
    <h2><?= h($extensionData->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Extension Field') ?></h6>
            <p><?= $extensionData->has('extension_field') ? $this->Html->link($extensionData->extension_field->id, ['controller' => 'ExtensionFields', 'action' => 'view', $extensionData->extension_field->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Value Varchar') ?></h6>
            <p><?= h($extensionData->value_varchar) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($extensionData->id) ?></p>
            <h6 class="subheader"><?= __('Value Int') ?></h6>
            <p><?= $this->Number->format($extensionData->value_int) ?></p>
            <h6 class="subheader"><?= __('Value Float') ?></h6>
            <p><?= $this->Number->format($extensionData->value_float) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Value Datetime') ?></h6>
            <p><?= h($extensionData->value_datetime) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Value Text') ?></h6>
            <?= $this->Text->autoParagraph(h($extensionData->value_text)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related DataDatetimes') ?></h4>
    <?php if (!empty($extensionData->data_datetimes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Data Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionData->data_datetimes as $dataDatetimes): ?>
        <tr>
            <td><?= h($dataDatetimes->id) ?></td>
            <td><?= h($dataDatetimes->value) ?></td>
            <td><?= h($dataDatetimes->extension_data_id) ?></td>

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
    <?php if (!empty($extensionData->data_floats)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Data Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionData->data_floats as $dataFloats): ?>
        <tr>
            <td><?= h($dataFloats->id) ?></td>
            <td><?= h($dataFloats->value) ?></td>
            <td><?= h($dataFloats->extension_data_id) ?></td>

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
    <?php if (!empty($extensionData->data_ints)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Data Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionData->data_ints as $dataInts): ?>
        <tr>
            <td><?= h($dataInts->id) ?></td>
            <td><?= h($dataInts->value) ?></td>
            <td><?= h($dataInts->extension_data_id) ?></td>

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
    <?php if (!empty($extensionData->data_texts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Data Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionData->data_texts as $dataTexts): ?>
        <tr>
            <td><?= h($dataTexts->id) ?></td>
            <td><?= h($dataTexts->value) ?></td>
            <td><?= h($dataTexts->extension_data_id) ?></td>

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
    <?php if (!empty($extensionData->data_varchars)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Value') ?></th>
            <th><?= __('Extension Data Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($extensionData->data_varchars as $dataVarchars): ?>
        <tr>
            <td><?= h($dataVarchars->id) ?></td>
            <td><?= h($dataVarchars->value) ?></td>
            <td><?= h($dataVarchars->extension_data_id) ?></td>

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
