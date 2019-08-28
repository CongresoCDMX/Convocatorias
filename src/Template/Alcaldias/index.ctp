<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alcaldia[]|\Cake\Collection\CollectionInterface $alcaldias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Alcaldia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alcaldias index large-9 medium-8 columns content">
    <h3><?= __('Alcaldias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_alcaldias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alcaldia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alcaldias as $alcaldia): ?>
            <tr>
                <td><?= $this->Number->format($alcaldia->id_alcaldias) ?></td>
                <td><?= h($alcaldia->alcaldia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $alcaldia->id_alcaldias]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alcaldia->id_alcaldias]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alcaldia->id_alcaldias], ['confirm' => __('Are you sure you want to delete # {0}?', $alcaldia->id_alcaldias)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
