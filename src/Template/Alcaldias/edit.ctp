<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alcaldia $alcaldia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alcaldia->id_alcaldias],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alcaldia->id_alcaldias)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alcaldias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alcaldias form large-9 medium-8 columns content">
    <?= $this->Form->create($alcaldia) ?>
    <fieldset>
        <legend><?= __('Edit Alcaldia') ?></legend>
        <?php
            echo $this->Form->control('alcaldia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
