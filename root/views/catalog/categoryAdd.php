<?php include ROOT . '/root/views/layouts/header.php' ?>
    <div class="main">
        <div class="content">
            <div class="content_inner">
                <form action="#" method="post" class="table-content">
                    <div>
                        <span>Название категории</span>
                        <input name="name" type="text" value="">
                    </div>
                    <div>
                        <span>Порядковый номер отображения </span>
                        <input name="sort_order" type="text" value="">
                    </div>
                    <div>
                        <span>Статус показа</span>
                        <input name="status" type="text" value="">
                    </div>
                    <div> <button name="submit" type="submit">Добавить</button></div>
                    <a class="icon-keyboard_arrow_left" href="/admin/category/">Назад</a>
                </form>

            </div>
        </div>
    </div>

<?php include ROOT . '/root/views/layouts/footer.php' ?>