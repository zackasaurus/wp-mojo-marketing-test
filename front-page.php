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

<!-- Headline One -->
<section class="headline-one">
    <h2>Headline</h2>
    <p>Something here</p>
    <div class="toggle-menu">
        <div class="toggle-menu__nav">
            <div class="tab-container">Tab one</div>
            <div class="tab-container">Tab two</div>
            <div class="tab-container">Tab three</div>
            <div class="tab-container">Tab four</div>
            <div class="tab-container">Tab five</div>

        </div>
        Something here
    </div>
    <button>Something here</button>
</section>


<?php get_footer();
