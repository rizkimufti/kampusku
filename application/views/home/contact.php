<!-- Being Page Title -->
<div class="container">
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
               <h6><a href="<?php echo base_url(); ?>">Home</a></h6>
                <h6><span class="page-active">Contact</span></h6>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="row">
     <div class="col-md-12">
        <?=$sukses ?>
    </div>
</div>
</div>


 <div class="container">
        <div class="row">

            <div class="col-md-5">

                <div class="contact-map">
                    <div class="contact-heading">
                        <h3>Alamat</h3>
                        <?=$teks_kontak ?>
                    </div>
                    <br />
                    <div class="google-map-canvas" id="map-canvas">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.224658573025!2d110.40704021449814!3d-6.982793994955567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec52229d7%3A0xc791d6abc9236c7!2sUniversitas+Dian+Nuswantoro!5e0!3m2!1sid!2sid!4v1514336401082" width="320" height="275" frameborder="0" style="border:0" allowfullscreen=""></iframe>                    </div>
                </div>
            </div> <!-- /.col-md-5 -->

            <div class="col-md-7">
                <div class="contact-page-content">
                    <div class="contact-heading">
                        <h3>Hubungi Kami</h3>
                    </div>

                    <form action="<?=base_url();?>pages/contact-us/send" method="POST">
                    <div class="contact-form clearfix">
                        <p class="full-row">
                            <span class="contact-label">
                                <label>Nama Lengkap:</label>
                            </span>
                            <input type="text" id="fullname" name="fullname" placeholder="Nama"  required/>
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label>Email :</label>
                            </span>
                            <input type="text" id="email" name="email" placeholder="Email" required/>
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label>Website:</label>
                            </span>
                            <input type="text" id="website" name="website" placeholder="Website *Bila Ada" />
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label>Pesan :</label>
                            </span>
                            <textarea name="message" id="message" rows="6" placeholder="Pesan" required></textarea>
                        </p>
                        <p class="full-row">
                            <input class="mainBtn" type="submit" name="" value="Kirim Pesan" />
                        </p>
                    </div>
                </form>
                </div>
            </div> <!-- /.col-md-7 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
