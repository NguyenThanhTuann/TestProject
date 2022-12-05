<section>
         <div class="bg_in">
            <div class="content_page cart_page">
               <div class="breadcrumbs">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo BASE_URL  ?>">
                        <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                        <strong itemprop="name">
                        Giỏ hàng
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </div>
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Giỏ hàng của bạn</h1>
                  </div>
               </div>
               <?php
                  if(!empty($_GET['msg'])){
                     $msg = unserialize(urldecode($_GET['msg']));
                     foreach ($msg as $key => $value){
                           echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
                     }
                  }
               ?>
               <div class="content_text">
                  <div class="container_table">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <tr class="tr tr_first">
                              <th >Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                             
                              <th >Giá</th>
                              <th style="width:100px;">Số lượng</th>
                              <th>Thành tiền</th>
                              <th style="width:50px; text-align:center;"></th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php 
                                 if(isset($_SESSION['shopping_cart'])){
                                    ?>
                           <form action='<?php echo BASE_URL ?>/giohang/updategiohang' method="POST">
                                 <?php 
                                
                                    $total = 0;
                                 foreach($_SESSION['shopping_cart'] as $key => $value)  {
                                    $subtotal = $value['product_quantity']*$value ['product_price'];
                                    $total += $subtotal;
                                 ?>
                              <tr class="tr">
                                 <td data-th="Hình ảnh">
                                    <div class="col_table_image col_table_hidden-xs"><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['product_image'] ?>" alt="<?php echo $value['product_title'] ?>" class="img-responsive"/></div>
                                 </td>
                                 <td data-th="Sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin"><?php echo $value['product_title'] ?></h4>
                                    </div>
                                 </td>
                                
                                 <td data-th="Giá"><span class="color_red font_money"><?php echo number_format( $value['product_price'],0,',','.').'đ' ?></span></td>
                                 
                                 <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft">

                                          <input type="number" min="1" class="inputsoluong" name="qty[<?php echo $value['product_id'] ?>]"  value="<?php echo $value['product_quantity'] ?>"></div>
                                      
                                    </div>
                                    <div class="clear"></div>
                                 </td>
                                 <td data-th="Thành tiền" class="text_center"><span class="color_red font_money">
                                    <?php echo number_format( $subtotal,0,',','.').'đ' ?></span></td>
                                 <td class="actions aligncenter">
                                    <button type="submit" style="box-shadow: none"; value="<?php echo $value['product_id'] ?>" name="delete_cart" class="btn btn-sm btn-warning">Xóa</button> 
                                    <button type="submit" style="box-shadow: none"; value="<?php echo $value['product_id'] ?>" name="update_cart" class="btn btn-sm btn-primary">Cập nhật</button> 
                                 </td>
                                 
                              </tr>
                              
                              <?php
                                
                              }
                              ?>
                           </form>
                           <tr>
                              <td colspan="7" class="textright_text">
                                 <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>: 
                                    <span class="text_price color_red"><?php echo number_format( $total,0,',','.').'đ' ?></span>
                                 </div>
                              </td>
                           </tr>
                           <?php
                                
                              }else{
                              ?>
                              <tr>
                              <td colspan="7" >
                                 <div class="sum_price_all">
                                    <span class="text_price">Giỏ hàng trống</span> 
                                    
                                 </div>
                              </td>
                           </tr>
                              <?php
                              }
                              ?>
                        </tbody>
                        <tfoot>
                           <tr class="tr_last">
                              <td colspan="7">
                                 <a href="<?php echo BASE_URL ?>" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                 <div class="clear"></div>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  
               </div>
            </div>
         </div>
      </section>
      <div class="clear"></div>