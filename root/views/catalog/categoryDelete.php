<?php include ROOT . '/root/views/layouts/header.php' ?>

<div class="main">
    <div class="content">
        <div class="content_inner">
            <form action="#" method="post" class="table-content">
                <div>
                    <span>Вы действительно удалить категорию №<?php echo $categoryId;?> ?</span>
                </div>
                <div> <button name="submit" type="submit">Удалить</button></div>
                <a class="icon-keyboard_arrow_left" href="/admin/category/">Назад</a>
            </form>
        </div>
    </div>
</div>
<?php include ROOT . '/root/views/layouts/footer.php' ?>
