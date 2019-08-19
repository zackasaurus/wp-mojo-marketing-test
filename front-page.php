<?php get_header();?>

<!-- About -->
<?php $about = get_field('about')?>
<section id="about">
    <?php echo $about['text']?>
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
<!-- Headline 2 -->
<section class="headline-two">
</section>



<!-- Headline 3 -->
<?php $headline_three = get_field('headline_three') ?>
<?php $icon = $headline_three['icon'] ?>

<section class="headline-three">

    <?php if (!empty($icon)): ?>
    <img src="<?php echo $icon['url']; ?>"
        alt="<?php echo $icon['alt']; ?>" />
    <?php endif; ?>

    <h2>Headline Three</h2>
    <p>
        <?php echo $headline_three['blurb']?>
    </p>
    <button>
        <a href="#">
            <?php echo $headline_three['button']?>
        </a>
    </button>
</section>

<?php $headline_four = get_field('headline_four') ?>


<!-- Headline 4 & 5 -->
<div class="column-2">
    <!-- 4 -->
    <section class="headline-four">
        <?php $icon = $headline_four['icon'] ?>
        <?php if (!empty($icon)): ?>
        <img src="<?php echo $icon['url']; ?>"
            alt="<?php echo $icon['alt']; ?>" />
        <?php endif; ?>

        <h2>
            <?php echo $headline_four['title']?>
        </h2>
        <p>
            <?php echo $headline_four['content']?>
        </p>

    </section>
    <!-- 5 -->
    <?php $headline_five = get_field('headline_five') ?>

    <section class="headline-five">
        <?php $icon = $headline_five['icon'] ?>

        <?php if (!empty($icon)): ?>
        <img src="<?php echo $icon['url']; ?>"
            alt="<?php echo $icon['alt']; ?>" />
        <?php endif; ?>

        <h2>
            <?php echo $headline_five['title']?>
        </h2>
        <p>
            <?php echo $headline_five['content']?>
        </p>

    </section>

</div>

<?php get_footer();
