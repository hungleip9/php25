 <!DOCTYPE html>
<html lang="en">
  <body>   
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-heading mb-4">Blog Phim</h3>
            <p>Nơi review đánh giá nhận xét chi tiết về phim ảnh qua con mắt của một thính giả</p>
          </div>
          <div class="col-md-4 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">Phim bộ</a></li>
              <li><a href="#">Phim lẻ</a></li>
              <li><a href="#">Phim mới</a></li>
              <li><a href="#">Phim sắp chiếu</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <li><a href="#">Phim hot</a></li>
              <li><a href="#">Xem nhiều nhất tháng</a></li>
              <li><a href="#">Xem nhiều nhất tuần</a></li>
              <li><a href="#">Xem nhiều nhất năm</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
      <div class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
    
 


  </body>
  <script src="xuly/js/jquery-3.3.1.min.js"></script>
  <script src="xuly/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="xuly/js/jquery-ui.js"></script>
  <script src="xuly/js/popper.min.js"></script>
  <script src="xuly/js/bootstrap.min.js"></script>
  <script src="xuly/js/owl.carousel.min.js"></script>
  <script src="xuly/js/jquery.stellar.min.js"></script>
  <script src="xuly/js/jquery.countdown.min.js"></script>
  <script src="xuly/js/jquery.magnific-popup.min.js"></script>
  <script src="xuly/js/bootstrap-datepicker.min.js"></script>
  <script src="xuly/js/aos.js"></script>

  <script src="js/main.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(window).scroll(function(event){
      var pos_body = $('html,body').scrollTop();
      if(pos_body>100){
        $('.back-to-top').addClass('hien-ra');
      }else{
        $('.back-to-top').removeClass('hien-ra');
      }
      
    });
    $('.back-to-top').click(function(){
      $('html, body').animate({scrollTop : 0}, 800);
    });
    });
  </script>
</html>