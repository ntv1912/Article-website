<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">
  <h2 class="text-center text-success my-3"> QUẢN LÝ BÀI VIẾT </h2>
    <a href=<?= DOMAIN.'/app/views/home/add.php';?> class="btn btn-success">Thêm bài viết</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã bài viết</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
   <?php
        foreach ($articles as $article){?>
            <tr>
            <th scope="row"><?=$article->getID();?></th>
            <td><?=$article->getTitle();?></td>
            <td><?=$article->getContent();?></td>
            <td><?=$article->getCreatedAt();?></td>
            <td><a href=<?=DOMAIN."/app/views/home/edit.php"?> onclick="return confirm('Bạn có chắc chắn muốn sửa bài viết này?')"> 
                <i class="bi bi-pencil-square"></i>
            </a></td>
            <td><a href="?controller=article&action=delete&id=<?php echo $article->getID(); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">
                <i class="bi bi-trash-fill"></i>
            </a></td>
          </tr>
        <?php }?>
  </tbody>
</table>
  </div>
</body>
</html>