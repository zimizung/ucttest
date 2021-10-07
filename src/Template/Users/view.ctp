<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Security Questions'), ['controller' => 'SecurityQuestions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Security Question'), ['controller' => 'SecurityQuestions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organisations'), ['controller' => 'Organisations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organisation'), ['controller' => 'Organisations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Security Question') ?></th>
            <td><?= $user->has('security_question') ? $this->Html->link($user->security_question->name, ['controller' => 'SecurityQuestions', 'action' => 'view', $user->security_question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Security Question Answer') ?></th>
            <td><?= h($user->security_question_answer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reset Password Yn') ?></th>
            <td><?= h($user->reset_password_yn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Passwordexpiredyn') ?></th>
            <td><?= h($user->passwordexpiredyn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($user->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($user->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Login') ?></th>
            <td><?= h($user->last_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($user->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Passwordexpired') ?></th>
            <td><?= h($user->passwordexpired) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $user->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Organisations') ?></h4>
        <?php if (!empty($user->organisations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Profile Number') ?></th>
                <th scope="col"><?= __('Organisation Type Id') ?></th>
                <th scope="col"><?= __('Registration Type Id') ?></th>
                <th scope="col"><?= __('Organisation Type Other') ?></th>
                <th scope="col"><?= __('Registration Type Other') ?></th>
                <th scope="col"><?= __('Registration No') ?></th>
                <th scope="col"><?= __('Year Registered') ?></th>
                <th scope="col"><?= __('Ceo Name') ?></th>
                <th scope="col"><?= __('Ceo Surname') ?></th>
                <th scope="col"><?= __('Ceo Telephone') ?></th>
                <th scope="col"><?= __('Ceo Email') ?></th>
                <th scope="col"><?= __('Verified') ?></th>
                <th scope="col"><?= __('Verified Date') ?></th>
                <th scope="col"><?= __('Verified By') ?></th>
                <th scope="col"><?= __('Verify Comments') ?></th>
                <th scope="col"><?= __('Expiry Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Date Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->organisations as $organisations): ?>
            <tr>
                <td><?= h($organisations->id) ?></td>
                <td><?= h($organisations->name) ?></td>
                <td><?= h($organisations->user_id) ?></td>
                <td><?= h($organisations->profile_number) ?></td>
                <td><?= h($organisations->organisation_type_id) ?></td>
                <td><?= h($organisations->registration_type_id) ?></td>
                <td><?= h($organisations->organisation_type_other) ?></td>
                <td><?= h($organisations->registration_type_other) ?></td>
                <td><?= h($organisations->registration_no) ?></td>
                <td><?= h($organisations->year_registered) ?></td>
                <td><?= h($organisations->ceo_name) ?></td>
                <td><?= h($organisations->ceo_surname) ?></td>
                <td><?= h($organisations->ceo_telephone) ?></td>
                <td><?= h($organisations->ceo_email) ?></td>
                <td><?= h($organisations->verified) ?></td>
                <td><?= h($organisations->verified_date) ?></td>
                <td><?= h($organisations->verified_by) ?></td>
                <td><?= h($organisations->verify_comments) ?></td>
                <td><?= h($organisations->expiry_date) ?></td>
                <td><?= h($organisations->created) ?></td>
                <td><?= h($organisations->modified) ?></td>
                <td><?= h($organisations->created_by) ?></td>
                <td><?= h($organisations->modified_by) ?></td>
                <td><?= h($organisations->deleted) ?></td>
                <td><?= h($organisations->date_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Organisations', 'action' => 'view', $organisations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Organisations', 'action' => 'edit', $organisations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organisations', 'action' => 'delete', $organisations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organisations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
