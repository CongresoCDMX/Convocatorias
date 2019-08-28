<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MeritoJuvenil[]|\Cake\Collection\CollectionInterface $meritoJuvenil
 */
?>
<div class="meritoJuvenil index large-12 medium-12 columns content">
    <h3><?= __('Merito Juvenil') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>            
                <th scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_materno') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('correo_electronico') ?></th>               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meritoJuvenil as $meritoJuvenil): ?>
            <tr>
                <td><?= $this->Number->format($meritoJuvenil->id) ?></td>            
                <td><?= h($meritoJuvenil->nombres) ?></td>
                <td><?= h($meritoJuvenil->apellido_paterno) ?></td>
                <td><?= h($meritoJuvenil->apellido_materno) ?></td>              
                <td><?= h($meritoJuvenil->correo_electronico) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $meritoJuvenil->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $meritoJuvenil->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $meritoJuvenil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meritoJuvenil->id)]) ?>
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
