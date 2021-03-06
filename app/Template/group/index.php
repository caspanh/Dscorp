<section id="main">
    <div class="page-header">
        <ul>
            <li><i class="fa fa-user fa-fw"></i><?= $this->url->link(t('All users'), 'user', 'index') ?></li>
            <li><i class="fa fa-user-plus fa-fw"></i><?= $this->url->link(t('New group'), 'group', 'create') ?></li>
        </ul>
    </div>
    <?php if ($paginator->isEmpty()): ?>
        <p class="alert"><?= t('There is no group.') ?></p>
    <?php else: ?>
        <table class="table-small table-fixed">
            <tr>
                <th class="column-5"><?= $paginator->order(t('Id'), 'id') ?></th>
                <th class="column-20"><?= $paginator->order(t('External Id'), 'external_id') ?></th>
                <th><?= $paginator->order(t('Name'), 'name') ?></th>
                <th class="column-5"><?= t('Actions') ?></th>
            </tr>
            <?php foreach ($paginator->getCollection() as $group): ?>
            <tr>
                <td>
                <div class="cambiocolor">
                    #<?= $group['id'] ?>
                </div>
                </td>
                <td>
                <div class="cambiocolor">
                    <?= $this->e($group['external_id']) ?>
                </div>
                </td>
                <td>
                <div class="cambiocolor">
                    <?= $this->e($group['name']) ?>
                </div>
                </td>
                <td>
                    <div class="dropdown">
                    <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa facog fa-fw"></i><i class="fa fafacaret-down"></i></a>1
                    <ul>
                    <div class="cambiocolor">
                        <li><?= $this->url->link(t('Add group member'), 'group', 'associate', array('group_id' => $group['id'])) ?></li>
                        <li><?= $this->url->link(t('Members'), 'group', 'users', array('group_id' => $group['id'])) ?></li>
                        <li><?= $this->url->link(t('Edit'), 'group', 'edit', array('group_id' => $group['id'])) ?></li>
                        <li><?= $this->url->link(t('Remove'), 'group', 'confirm', array('group_id' => $group['id'])) ?></li>
                    </div>
                    </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
        </table>

        <?= $paginator ?>
    <?php endif ?>
</section>
