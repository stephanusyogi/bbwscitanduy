
  <!-- Section Footer -->
  <footer class="section-footer mt-4">
      <div class="container-fluid footer py-4">
          <div class="d-flex justify-content-between flex-wrap">
              <div>
                  <small class="mb-0">Kementerian Pekerjaan Umum dan Perumahan Rakyat Direktorat Jendral Sumber Daya Air</small>
                  <h2>Balai Besar Wilayah Sungai Citanduy</h2>
                  <p class="mt-4">Jl. Prof. Dr. Ir. H. Sutami No.1 Banjar Jawa Barat 46300</p>
              </div>
              <div>
                  <h5>HUBUNGI KAMI</h5>
                  <div class="mt-4">
                      <p class="mb-0">SISDA Telp/Faxs : (0265) 745020</p>
                      <p class="mb-0">Sekretaris Telp/Faxs : (0265) 741686</p>
                      <p class="mb-0">E-mail : bbws.citanduy@yahoo.com</p>
                  </div>
              </div>
              <div>
                  <h5>MEDIA SOSIAL</h5>
                  <div class="d-flex sosmed mt-4">
                      <a href="#" target="_blank" class="ml-2"><i class="fab fa-twitter-square"></i></a>
                      <a href="https://www.facebook.com/profile.php?id=100068922141390" target="_blank"  class="ml-2"><i class="fab fa-facebook-square"></i></a>
                      <a href="https://www.youtube.com/channel/UCnJWpir37dLy3bfe9o4C9Eg" target="_blank" class="ml-2"><i class="fab fa-youtube-square"></i></a>
                      <a href="https://instagram.com/pupr_sda_citanduy?igshid=YmMyMTA2M2Y=" target="_blank" class="ml-2"><i class="fab fa-instagram-square"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="bottom-footer text-center">
          <small class="mb-0">Hak Cipta 2022 Kementerian PUPR Ditjen SDA BBWS Citanduy,. All Rights Reserved</small>
      </div>
  </footer>

  <!-- Back To Top  -->
  <script>
    var btn = $('#btn-backtop');
    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
  </script>
  <!-- NavBar Sticky -->
  <script>
    $(window).scroll(function(){
        if($(this).scrollTop() > document.getElementById("topbar").scrollTop){
            $('nav').addClass('fixed-top')
        } else{
            $('nav').removeClass('fixed-top')
        }
    });
  </script>
  <script>
  $(function() {
    AOS.init();
  });
  </script>
  <!-- LESS -->
  <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
  <!-- Bootstrap -->
  <script src="<?= base_url("assets/vendor/bootstrap-4.6.1/js/bootstrap.js") ?>"></script>
  </body>
</html>