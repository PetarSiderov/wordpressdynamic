<?php 
$income_feature_image       = get_field('income_feature_image');
$income_section_title       = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1                   = get_field('reason_1_title');
$reason_1_description       = get_field('reason_1_description');
$reason_2                   = get_field('reason_2_title');
$reason_2_description       = get_field('reason_2_description');
?>
<!--BOOST YOUR INCOME -->
<section id="boost-income">
        <div class="container">

            <div class="section-header">

            <!--- If feature exists -->
                <?php if( !empty($income_feature_image)) : ?>  <!-- checking if img exist --> 
                    <img src="<?php echo $income_feature_image['url']; ?>" 
                     alt="<?php echo $income_feature_image['alt']; ?>">  <!-- array of images --> 
                <?php endif; ?>
                <h2><?php echo $income_section_title ?></h2> <!-- Title of this section --> 
                <!-- <?php var_dump($income_section_title) ?>  - adding debbuger php --> 
            </div>
            <!--section-header-->

            <p class="lead">
                <?php echo $income_section_description ?> 
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1?></h3>
                    <p><?php echo $reason_1_description ?>
                    </p>
                </div><!-- col -->
                <div class="col-sm-6">
                    <h3><?php echo $reason_2 ?></h3>
                    <p><?php echo $reason_2_description ?></p>
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <!--Container-->
    </section>