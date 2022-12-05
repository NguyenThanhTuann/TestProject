<section>
         <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right">
                  <!--breadcrumbs-->
                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href=".">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           Tất cả bài viết
                           </strong>  
                           </span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
                  </div>
                  <!--breadcrumbs-->
                  <div class="content_page">
                     <div class="box-title">
                        <div class="title-bar">
                           <h1>Tất cả bài viết</h1>
                        </div>
                     </div>
                     <div class="content_text">
                     <style type="text/css"> 
                           .img-list img{
                              height: 220px;
                           }
                     </style>
                        <ul class="list_ul">
                           <?php 
                           foreach($list_post as $key => $post) {
                           ?>
                           
                           <li class="lists">
                              <div class="img-list">
                                 <a href="<?php echo BASE_URL?>/tintuc/chitiettin/14">
                                 <img height="200px" src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $post['image_post']?>" alt=
                                    "<?php echo $post['title_post']?>" class="img-list-in">
                                 </a>
                              </div>
                              <div class="content-list">
                                 <div class="content-list_inm">
                                    <div class="title-list">
                                       <h3>
                                          <a href="<?php echo BASE_URL?>/tintuc/chitiettin/<?php echo $post['id_post']?>"><?php echo $post['title_post']?></a>
                                       </h3>
                                       
                                    </div>
                                    <div class="content-list-in">
                                       <p><?php echo substr($post['content_post'],0,300)?></p>
                                    </div>
                                    <div class="xt"><a href="<?php echo BASE_URL?>/tintuc/chitiettin/<?php echo $post['id_post']?>">Xem thêm</a></div>
                                 </div>
                              </div>
                              <div class="clear"></div>
                           </li>
                           
                           <?php 
                           }
                           ?>
                        </ul>
                        <div class="clear"></div>
                        <div class="wp_page">
                           <div class="page">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
               <div class="clear"></div>
            </div>
         </div>
      </section>
      <!---End bg_in----->