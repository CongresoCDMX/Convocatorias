<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ParlamentoJuvenil[]|\Cake\Collection\CollectionInterface $parlamentoJuvenil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parlamento Juvenil'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parlamentoJuvenil index large-9 medium-8 columns content">
    <h3><?= __('Parlamento Juvenil') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_materno') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parlamentoJuvenil as $parlamentoJuvenil): ?>
            <tr>
                <td><?= $this->Number->format($parlamentoJuvenil->id) ?></td>
                <td><?= h($parlamentoJuvenil->nombre) ?></td>
                <td><?= h($parlamentoJuvenil->apellido_paterno) ?></td>
                <td><?= h($parlamentoJuvenil->apellido_materno) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parlamentoJuvenil->id]) ?>


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
