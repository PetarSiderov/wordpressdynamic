 <?php
$optin_text = get_post_meta( 9, 'optin_text', true);
$button_optn_text = get_post_meta(9 , 'button_optn_text', true);
 ?>
 <!--OPT IN SECTION-->
 <section id="optin">
        <div class="container">
            <div class="row">

                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text ?></p>
                </div>
                <!--col-->

                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                       <?php echo $button_optn_text ?>
                    </button>
                </div>

            </div>
        </div>
        <!--Container-->
</section>