<?php include ROOT . '/root/views/layouts/header.php' ?>
<div class="main">
    <div class="content">
        <div class="content_inner">
            <div class="table-content">
                <table>
                    <a href="/admin/product/add/" class="icon-plus1 table-add_new">Добавить новый товар</a>
                    <caption>
                        <span>Товары</span>
                    </caption>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
<!--                        <th>#Категории</th>-->
<!--                        <th>Статус</th>-->
<!--                        <th>Описание</th>-->
                        <th>Цена</th>
<!--                        <th>Хит продаж</th>-->
<!--                        <th>Новый</th>-->
<!--                        <th>Рекомендованный</th>-->
                        <th>Изображение</th>
<!--                        <th>Отображение</th>-->
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?php echo $product['idProduct']; ?></td>
                            <td><?php echo $product['name']; ?></td>
<!--                            <td>--><?php //echo $product['idCategory']; ?><!--</td>-->
<!--                            <td>--><?php //if ($product['status'] == 1) {
//                                    echo 'В наличии';
//                                } else {
//                                    echo 'Под заказ';
//                                }; ?><!--</td>-->
<!--                            <td>--><?php //echo $product['description']; ?><!--</td>-->
                            <td><?php echo $product['price']; ?></td>
<!--                            <td>--><?php //echo $product['topsales']; ?><!--</td>-->
<!--                            <td>--><?php //echo $product['new']; ?><!--</td>-->
<!--                            <td>--><?php //echo $product['recomendet']; ?><!--</td>-->
                            <td><?php echo $product['image']; ?></td>
<!--                            <td>--><?php //echo $product['avaliability']; ?><!--</td>-->
                            <td class="change">
                                <a class="icon-pencil" href="/admin/product/change/<?php echo $product['idProduct']; ?>"></a>
                                <a class="icon-close" href="/admin/product/delete/<?php echo $product['idProduct']; ?>"></a>
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
