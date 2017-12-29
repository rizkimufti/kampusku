    <!-- begin The Footer -->
    <footer class="site-footer">



        <div class="container">
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text"><?=strip_tags($footer) ?>.</p>
                    </div> <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <ul class="footer-nav">
                          <a href="panel">Login</a>

                            <li <?php if($uri1==null){ } ?> >
                                    <a href='<?php echo site_url(''); ?>'>Home</a></li>
                                    <?php foreach ($menu_foot as $m): ?>
                                        <li>
                                        <a href="<?php echo site_url(''); ?>pages/<?=$m['content_id']?>"><?=$m['menu_name']?></a>
                                        </li>

                                    <?php endforeach ?>

                                    <!-- Start of LiveChat (www.livechatinc.com) code -->
                                    <script type="text/javascript">
                                    window.__lc = window.__lc || {};
                                    window.__lc.license = 9372155;
                                    (function() {
                                      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                                      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
                                    })();
                                    </script>
                                    <!-- End of LiveChat code -->

                        </ul>

                    </div> <!-- /.col-md-7 -->
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="<?php echo base_url();?>assets/themes/home/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/themes/home/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/themes/home/js/custom.js"></script>

</body>
</html>
