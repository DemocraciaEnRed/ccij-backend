<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet[]|\Cake\Collection\CollectionInterface $tweets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('New Tweet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stances'), ['controller' => 'Stances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stance'), ['controller' => 'Stances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tweets index large-9 medium-8 columns content">
    <h3><?= __('Tweets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('text') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stance_id') ?></th>
                <th scope="col" class="actions" width="200"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tweets as $tweet): ?>
            <tr>
                <td><?= $this->Number->format($tweet->id) ?></td>
                <td><?= h($tweet->text) ?></td>
                <td><?= $tweet->has('stance') ? $this->Html->link($tweet->stance->name, ['controller' => 'Stances', 'action' => 'view', $tweet->stance->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tweet->id]) ?>
                    <?= $this->Html->link('<span data-tooltip aria-haspopup="true" class="has-tip" title="Editar"><i class="material-icons">edit</i></span>', ['action' => 'edit', $tweet->id]) ?>
                    <?= $this->Form->postLink('<span data-tooltip aria-haspopup="true" class="has-tip" title="Eliminar"><i class="material-icons">delete</i></span>', ['action' => 'delete', $tweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
			<?= $this->Paginator->first('<i class="material-icons">arrow_back_ios</i>', ['escape' => false, 'title' => '??ltima p??gina']) ?>
			<?= $this->Paginator->numbers() ?>
			<?= $this->Paginator->last('<i class="material-icons">arrow_forward_ios</i>', ['escape' => false, 'title' => 'Primera p??gina']) ?>
		</ul>
		<p><?= $this->Paginator->counter(['format' => __('P??gina {{page}} de {{pages}}')]) ?></p>
    </div>
</div>
