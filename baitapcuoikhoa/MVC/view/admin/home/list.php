 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Film - Admin</title>
    <?php 
      require_once "view/public/header.php";
    ?>
    
    <style type="text/css">
      .bg-light,.content1{
        background-color: rgba(0,0,0,0.9)!important;
      }
      p,span,a,h2{
        color: white!important;
        font-weight:bold;
      }
      hr{
        background-color: white !important;
      }
      .text-right a{
        color: black !important;

      }
      .back-to-top{
        width: 60px;
        height: 60px;
        line-height: 60px;
        font-size: 25px;
        text-align: center;
        background-color: white;
        opacity: 0.2;
        border-radius: 50%;
        color: black;
        position: fixed;
        bottom: 40px;
        right: 35px;
        z-index: 99;
        box-shadow: 0 0 15px gray;
        transition: 0.3s ease;

      }
      .back-to-top i{

      }
      .back-to-top:hover{
        background-color: #488BDD;
        color: white;
        opacity: 0.9;
        transition: 0.3s ease;
      }
      .back-to-top.hien-ra{
        visibility: visible;
        opacity: 1;
      }

    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="index.html" class="text-black h2 mb-0">Blog Film - Admin</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
               
                
                <li><a href="UserAdmin">Trang Chủ</a></li>
                <li><a href="QuanLyBaiViet">Quản lý bài viết</a></li>
                <li><a href="QuanLyThanhVien">Quản lý thành viên</a></li>
                <li><a href="AddBaiViet">Thêm bài viết</a></li>
                <li><a href="index.php?c=auth&mod=admin&act=logout">Đăng Xuất</a></li>
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2">
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient wow bounceInLeft" style="background-image: url('http://khoavanhue.husc.edu.vn/wp-content/uploads/2016/11/toi-thay-hoa-vang.jpg');">
              
              <div class="text">
                <h2>Blog phim viết lên những bài viết chất lượng</h2>
                
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient wow bounceInLeft" style="background-image: url('https://i.ytimg.com/vi/0VC6euBtKkk/maxresdefault.jpg');">
              
              <div class="text">
                <h2>Nơi tham khảo về phim ảnh</h2>
                
              </div>
            </a>
          </div>
          <div class="col-md-4 matbiec">
            <a href="single.html" class="h-entry img-5 h-100 gradient wow bounceInUp" style="background-image: url('https://upload.wikimedia.org/wikipedia/vi/4/42/%C3%81p_ph%C3%ADch_phim_M%E1%BA%AFt_bi%E1%BA%BFc.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">Đam mê</span>
                  <span class="post-category bg-primary">Nhiệt huyết</span>
                </div>
                <h2>Blog Phim</h2>
                
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient wow bounceInRight" style="background-image: url('https://cdnmedia.thethaovanhoa.vn/Upload/WZtxtaIgQJQXiXghN1ELQ/files/2018/09/Immortal_Character_Thay-Ninh.jpg');">
              
              <div class="text">
                <h2>Cùng khám phá giá trị của môn nghệ thuật thứ 7</h2>
                
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient wow bounceInRight" style="background-image: url('https://static.yeah1.com/uploads/editors/49/2019/12/30/CJN9MiNUezYGkyh7Vju0H4ylJbwnudPn6DgBl94s.png');">
              
              <div class="text">
                <h2>Cảnh báo có spoiler phim</h2>
                
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section content1">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Phim Hay</h2>
          </div>
        </div>
        <?php foreach ($categories as $category) { ?>
        <div class="row">
          <div class="col-lg-12 mb-12">
            <div class="entry2" style="text-align: center;">
              <a href="index.php?c=home&mod=admin&act=detail&id=<?php echo $category['id']?>&slug=<?php echo $category['slug']?>"><img style="width: 50%;" src="<?php echo $category['file'];?>" alt="Image" class="img-fluid rounded wow bounceInRight"></a>
              <div class="excerpt wow bounceInLeft">
              <span class="post-category text-white bg-secondary mb-3"><?php echo $category['daoDien']; ?></span>
            
              <h2><a href="single.html"><?php echo $category['name']; ?></a></h2>
            
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"></figure>
                <span class="d-inline-block mt-1" >By <a href="#"><?php echo $category['tacGia']; ?></a></span>
                <span>&nbsp;-&nbsp; <?php echo $category['created_at'] ?></span>
              </div>
              
                <p><?php echo $category['description']; ?></p>
                <a style="border-radius: 10px; margin-bottom: 20px;" href="index.php?c=home&mod=admin&act=edit&id=<?php echo $category['id']?>&slug=<?php echo $category['slug']?>" class="btn btn-success">Edit</a>
                <a style="border-radius: 10px; margin-bottom: 20px;" href="index.php?c=home&mod=admin&act=delete&id=<?php echo $category['id']?>" class="btn btn-danger">Delete</a>
                <hr>
              </div>
            </div>
          </div>          
        </div>
        <?php } ?>
        <div class="row text-center pt-5">
          <div class="col-md-12">
            <div class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section">
      <div class="container">

        <div class="row align-items-stretch retro-layout">
          
          <div class="col-md-5 order-md-2">
            <a href="single.html" class="hentry img-1 h-100 gradient wow bounceInRight" style="background-image: url('https://static.yeah1.com/uploads/editors/49/2019/12/30/CJN9MiNUezYGkyh7Vju0H4ylJbwnudPn6DgBl94s.png');">
              <span class="post-category text-white bg-danger">Đam mê</span>
              <div class="text">
                <h2>Top Phim Việt Hay</h2>
                
              </div>
            </a>
          </div>

          <div class="col-md-7">
            
            <a href="single.html" class="hentry img-2 v-height mb30 gradient wow bounceInLeft" style="background-image: url('http://khoavanhue.husc.edu.vn/wp-content/uploads/2016/11/toi-thay-hoa-vang.jpg');">
              <span class="post-category text-white bg-success">Nhiệt huyết</span>
              <div class="text text-sm">
                <h2>Top Phim Việt Hay</h2>
                
              </div>
            </a>
            
            <div class="two-col d-block d-md-flex">
              <a href="single.html" class="hentry v-height img-2 gradient wow bounceInUp" style="background-image: url('https://i.ytimg.com/vi/0VC6euBtKkk/maxresdefault.jpg');">
                <span class="post-category text-white bg-primary">Tận tâm</span>
                <div class="text text-sm">
                  <h2>Top Phim Việt Hay</h2>
                  
                </div>
              </a>
              <a href="single.html" class="hentry v-height img-2 ml-auto gradient wow bounceInUp" style="background-image: url('https://upload.wikimedia.org/wikipedia/vi/4/42/%C3%81p_ph%C3%ADch_phim_M%E1%BA%AFt_bi%E1%BA%BFc.jpg');">
                <span class="post-category text-white bg-warning">Tầm nhìn</span>
                <div class="text text-sm">
                  <h2>Top Phim Việt Hay</h2>
                  
                </div>
              </a>
            </div>  
            
          </div>
        </div>

      </div>
    </div>
    </div>

    

    <?php 
      require_once "view/public/footer.php";
    ?>
    
  </div>
  
  
  


  </body>
</html>