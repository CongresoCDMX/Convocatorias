<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MeritoJuvenil $meritoJuvenil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Merito Juvenil'), ['action' => 'edit', $meritoJuvenil->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Merito Juvenil'), ['action' => 'delete', $meritoJuvenil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meritoJuvenil->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Merito Juvenil'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merito Juvenil'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="meritoJuvenil view large-9 medium-8 columns content">
    <h3><?= h($meritoJuvenil->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($meritoJuvenil->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Paterno') ?></th>
            <td><?= h($meritoJuvenil->apellido_paterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Materno') ?></th>
            <td><?= h($meritoJuvenil->apellido_materno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alcaldia') ?></th>
            <td><?= h($meritoJuvenil->alcaldia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colonia') ?></th>
            <td><?= h($meritoJuvenil->colonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calle') ?></th>
            <td><?= h($meritoJuvenil->calle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Postal') ?></th>
            <td><?= h($meritoJuvenil->codigo_postal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Casa') ?></th>
            <td><?= h($meritoJuvenil->telefono_casa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($meritoJuvenil->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Otro') ?></th>
            <td><?= h($meritoJuvenil->otro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo Electronico') ?></th>
            <td><?= h($meritoJuvenil->correo_electronico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($meritoJuvenil->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= $this->Number->format($meritoJuvenil->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($meritoJuvenil->fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Individual') ?></th>
            <td><?= $meritoJuvenil->individual ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colectiva') ?></th>
            <td><?= $meritoJuvenil->colectiva ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Residente') ?></th>
            <td><?= $meritoJuvenil->residente ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Originario') ?></th>
            <td><?= $meritoJuvenil->originario ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option1') ?></th>
            <td><?= $meritoJuvenil->option1 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option2') ?></th>
            <td><?= $meritoJuvenil->option2 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option3') ?></th>
            <td><?= $meritoJuvenil->option3 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option4') ?></th>
            <td><?= $meritoJuvenil->option4 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option5') ?></th>
            <td><?= $meritoJuvenil->option5 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option6') ?></th>
            <td><?= $meritoJuvenil->option6 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option7') ?></th>
            <td><?= $meritoJuvenil->option7 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option8') ?></th>
            <td><?= $meritoJuvenil->option8 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc1') ?></th>
            <td><?= $meritoJuvenil->doc1 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc2') ?></th>
            <td><?= $meritoJuvenil->doc2 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc3') ?></th>
            <td><?= $meritoJuvenil->doc3 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc4') ?></th>
            <td><?= $meritoJuvenil->doc4 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc5') ?></th>
            <td><?= $meritoJuvenil->doc5 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc6') ?></th>
            <td><?= $meritoJuvenil->doc6 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc7') ?></th>
            <td><?= $meritoJuvenil->doc7 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc8') ?></th>
            <td><?= $meritoJuvenil->doc8 ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
