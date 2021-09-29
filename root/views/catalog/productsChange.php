<?php include ROOT . '/root/views/layouts/header.php' ?>
<div class="main">
    <div class="content">
        <div class="content_inner">
            <form action="#" method="post" class="table-content">
                <div>
                    <span>Номер категории в таблице: <?php echo $category['id']; ?></span>
                </div>
                <div>
                    <span>Название категории</span>
                    <input name="name" type="text" value="<?php echo $category['name']; ?>">
                </div>
                <div>
                    <span>Порядковый номер отображения </span>
                    <input name="sort_order" type="text" value="<?php echo $category['sort_order']; ?>">
                </div>
                <div>
                    <span>Статус показа</span>
                    <input name="status" type="text" value="<?php echo $category['status']; ?>">
                </div>
                <div> <button name="submit" type="submit">Изменить</button></div>
                <a class="icon-keyboard_arrow_left" href="/admin/category/">Назад</a>
            </form>

        </div>
    </div>
</div>

<?php include ROOT . '/root/views/layouts/footer.php' ?>
