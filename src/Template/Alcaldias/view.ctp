<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alcaldia $alcaldia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alcaldia'), ['action' => 'edit', $alcaldia->id_alcaldias]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alcaldia'), ['action' => 'delete', $alcaldia->id_alcaldias], ['confirm' => __('Are you sure you want to delete # {0}?', $alcaldia->id_alcaldias)]) ?> </li>
        <li><?= $this->Html->link(__('List Alcaldias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alcaldia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alcaldias view large-9 medium-8 columns content">
    <h3><?= h($alcaldia->id_alcaldias) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Alcaldia') ?></th>
            <td><?= h($alcaldia->alcaldia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Alcaldias') ?></th>
            <td><?= $this->Number->format($alcaldia->id_alcaldias) ?></td>
        </tr>
    </table>
</div>
