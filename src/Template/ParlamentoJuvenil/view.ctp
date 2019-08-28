<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ParlamentoJuvenil $parlamentoJuvenil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Parlamento Juvenil'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="parlamentoJuvenil view large-9 medium-8 columns content">
    <h3><?= h($parlamentoJuvenil->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($parlamentoJuvenil->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Paterno') ?></th>
            <td><?= h($parlamentoJuvenil->apellido_paterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Materno') ?></th>
            <td><?= h($parlamentoJuvenil->apellido_materno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alcaldia') ?></th>
            <td><?= h($parlamentoJuvenil->alcaldia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo Electronico') ?></th>
            <td><?= h($parlamentoJuvenil->correo_electronico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Telefonico') ?></th>
            <td><?= h($parlamentoJuvenil->numero_telefonico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cual Sociedad') ?></th>
            <td><?= h($parlamentoJuvenil->cual_sociedad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institucion') ?></th>
            <td><?= h($parlamentoJuvenil->institucion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ejer Cuales') ?></th>
            <td><?= h($parlamentoJuvenil->ejer_cuales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gp1') ?></th>
            <td><?= h($parlamentoJuvenil->gp1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gp2') ?></th>
            <td><?= h($parlamentoJuvenil->gp2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gp3') ?></th>
            <td><?= h($parlamentoJuvenil->gp3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Com1') ?></th>
            <td><?= h($parlamentoJuvenil->com1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Com2') ?></th>
            <td><?= h($parlamentoJuvenil->com2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Com3') ?></th>
            <td><?= h($parlamentoJuvenil->com3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dis Cual') ?></th>
            <td><?= h($parlamentoJuvenil->dis_cual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parlamentoJuvenil->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= $this->Number->format($parlamentoJuvenil->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Residente') ?></th>
            <td><?= $parlamentoJuvenil->residente ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Originario') ?></th>
            <td><?= $parlamentoJuvenil->originario ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sociedad Civil') ?></th>
            <td><?= $parlamentoJuvenil->sociedad_civil ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estudiante') ?></th>
            <td><?= $parlamentoJuvenil->estudiante ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secundaria') ?></th>
            <td><?= $parlamentoJuvenil->secundaria ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medio Superior') ?></th>
            <td><?= $parlamentoJuvenil->medio_superior ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Superior') ?></th>
            <td><?= $parlamentoJuvenil->superior ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ejercicios') ?></th>
            <td><?= $parlamentoJuvenil->ejercicios ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discapacidad') ?></th>
            <td><?= $parlamentoJuvenil->discapacidad ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivos') ?></h4>
        <?= $this->Text->autoParagraph(h($parlamentoJuvenil->motivos)); ?>
    </div>
</div>
