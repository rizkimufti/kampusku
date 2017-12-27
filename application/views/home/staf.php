
 <div class="container">
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
                  <h6><a href="<?php echo base_url(); ?>">Home</a></h6>
                <h6><span class="page-active">Data Staff </span></h6>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="<?=site_url()?>search" class="search_form" />
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search" />
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
				    <div class="widget-main-title">
				        <h4 class="widget-title"><i class="fa fa-tags"></i> Berita Terbaru</h4>
				    </div> <!-- /.widget-main-title -->
				    
				    <div class="widget-inner">

				    <?php foreach ($berita_baru as $s): ?>
				        <div class="blog-list-post clearfix">
				            <div class="blog-list-thumb">
				                <a href="<?php echo base_url(); ?>content/<?=$s['category']?>/<?=$s['slug']?>">
				                    <img src="<?php echo base_url(); ?>file/blog/<?=$s['img_header']?>" alt="<?=$s['title']?>" />
				                </a>
				            </div>
				            <div class="blog-list-details">
				                <h5 class="blog-list-title">
				                    <a href="<?php echo base_url(); ?>content/<?=$s['category']?>/<?=$s['slug']?>"><?=$s['title']?></a>
				                </h5>
				                <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span></p>
				            </div>
				        </div> 
				    <?php endforeach ?>

				    </div> <!-- /.widget-inner -->
				</div> <!-- /.widget-main -->


            </div> <!-- /.col-md-3 -->

            <div class="col-md-9">
                <div class="row">
                    
                <div id="Grid">

                	 <?php foreach ($kueri as $g): ?>

                	 <div class="col-md-4 mix students" data-cat="3">
                        <div class="gallery-item">
                            <a class="fancybox" rel="gallery1" href="<?=site_url(); ?>file/karyawan/<?php echo $g->foto ;?>">
                                <div class="karyawan-thumb">
                                    <img src="<?=site_url(); ?>file/karyawan/<?php echo $g->foto ;?>" alt="" />
                                </div>
                                <div class="gallery-content">
                                    <h4 class="gallery-title"><?php echo $g->nama_karyawan ;?></h4>
                                </div>
                            </a>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->

                	  <?php endforeach ?>
                        
                    
                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                            <?=$pagination ?>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->