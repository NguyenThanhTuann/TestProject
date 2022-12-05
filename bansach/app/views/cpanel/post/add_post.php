<?php
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value){
            echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<h3 style="text-align: center ;">Thêm bài viết</h3>
<div class="col-md-6">
<form action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Tên bài viết</label>
    <input type="text" name= "title_post" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="email">Hình ảnh bài viết</label>
    <input type="file" name= "image_post" class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Nội dung bài viết</label>
    
    <textarea id="editor" name="content_post" style="resize: none;" rows="5" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Danh mục sản phẩm</label>
    <select class="form-control" name="category_post" id="">
    <?php 
      foreach($category as $key => $cate){
      ?>
    <option value ="<?php echo $cate['id_category_post']?>"><?php echo $cate['title_category_post']?></option>
    <?php 
      }
      ?>
    </select> 
  </div>
  
  <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
</form>

</div>