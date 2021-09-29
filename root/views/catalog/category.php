<?php include ROOT . '/root/views/layouts/header.php' ?>
<div class="main">
    <div class="content">
        <div class="content_inner">
            <div class="table-content">
                <table>
                    <a href="/admin/category/add/" class="icon-plus1 table-add_new">Добавить новую категорию</a>
                    <caption>
                        <span>Категории</span>
                    </caption>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Порядок</th>
                        <th>Статус</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            <td><?php echo $category['id']; ?></td>
                            <td><?php echo $category['name']; ?></td>
                            <td><?php echo $category['sort_order']; ?></td>
                            <td><?php if ($category['status'] == 1) {
                                    echo 'Отобр';
                                } else {
                                    echo 'Не отобр';
                                }; ?></td>
                            <td class="change">
                                <a class="icon-pencil" href="/admin/category/change/<?php echo $category['id']; ?>"></a>
                                <a class="icon-close" href="/admin/category/delete/<?php echo $category['id']; ?>"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <p><b>#</b> - порядковый номер категории в базе данных (неизменяемый)</p>
                <p><b>Название</b> - название категории</p>
                <p><b>Порядок</b> - порядок сортировки категории (от 0)</p>
                <p><b>Статус</b> - статус отображения категории</p>
            </div>
        </div>
    </div>
    <?php include ROOT . '/root/views/layouts/footer.php' ?>

