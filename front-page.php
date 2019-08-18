<?php get_header();?>

<!-- About -->
<?php $about = get_field('about')?>
<section id="about">
    <?php echo $about['text']?>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae nesciunt excepturi ducimus sunt mollitia in? Commodi
    ipsam alias distinctio eum facere architecto officiis recusandae, quos voluptatum expedita suscipit magni, adipisci
    at velit et ratione fugit sunt culpa ex aut? Pariatur?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae accusamus vero itaque? Tenetur recusandae
    corporis vitae quae eius! Accusamus laborum rem numquam suscipit repellat? Assumenda explicabo quis optio numquam
    eos sequi earum recusandae, enim, porro autem excepturi, a voluptatibus tempore!

    Test
</section>

<?php $headline_one = get_field('headline_one') ?>

<?php $toggle_menu = get_sub_field('toggle_menu')?>
<!-- Headline One -->
<section class="headline-one">
    <h2>
        <?php echo $headline_one['title']?>
    </h2>
    <p>
        <?php echo $headline_one['blurb']?>
    </p>


    <!-- LOOP -->
    <?php  if (have_rows('headline_one')): ?>
    <?php while (have_rows('headline_one')): the_row(); ?>
    <div class="toggle-menu">
        <!-- Navigation -->
        <div class="toggle-menu__nav">
            <?php if (have_rows('toggle_menu')): $counter = 0;?>
            <?php while (have_rows('toggle_menu')): the_row(); ?>

            <?php $title = get_sub_field('title'); ?>

            <!-- Check if first element -->
            <?php if ($counter == 0):?>
            <!-- Active -->
            <div class="tab-container tab-container--active">
                <?php echo $title ?>
            </div>
            <!-- Inactive -->
            <?php else:?>
            <div class="tab-container">
                <?php echo $title ?>
            </div>

            <?php  endif; ?>

            <?php $counter++; endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- Content -->
        <?php if (have_rows('toggle_menu')): $counter = 0;?>
        <?php while (have_rows('toggle_menu')): the_row(); ?>

        <?php $title = get_sub_field('title'); ?>
        <?php $content = get_sub_field('content'); ?>
        <?php $icon = get_sub_field('icon'); ?>

        <?php if ($counter == 0):?>
        <div class="toggle-menu__content toggle-menu__content--active">
            <div class="left-icon">
                <!-- <img  src="/images/meter.svg"
                alt=""> -->

                <?php if (!empty($icon)): ?>


                <img src="<?php echo $icon['url']; ?>"
                    alt="<?php echo $icon['alt']; ?>" />

                <?php endif; ?>



            </div>
            <div class="right-content">
                <h3><?php echo $title?>
                </h3>
                <p><?php echo $content?>
                </p>
            </div>
        </div>
        <?php else:?>
        <div class="toggle-menu__content">
            <div class="left-icon">
                <?php if (!empty($icon)): ?>


                <img src="<?php echo $icon['url']; ?>"
                    alt="<?php echo $icon['alt']; ?>" />

                <?php endif; ?>
            </div>
            <div class="right-content">
                <h3><?php echo $title?>
                </h3>
                <p><?php echo $content?>
                </p>
            </div>
        </div>

        <?php  endif; ?>



        <?php $counter++; endwhile; ?>
        <?php endif; ?>

    </div>
    <?php endwhile; ?>
    <?php endif;?>

    <button>
        <a href="#">Something here</a>
    </button>
</section>


<?php get_footer();
