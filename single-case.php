<?php
/* Template Name: Case */

get_header();
?>
<div id="intro">
    <div class="row">
        <div class="container-lg">
            <h2 class="post__subtitle">Post-COVID-19 Capaciteitsplanner DicaPlan</h2>
            <span><?php echo the_excerpt(); ?></span>
        </div>
    </div>
</div>
<div id="team" class="my-5">
            <div class="container-lg">
                <div class="row">
                    <div class="col-6">
                        <h3>Het team</h3>
                        <div class="team__member"></div>
                        <div class="team__member"></div>
                        <div class="team__member"></div>
                    </div>
                    <div class="col-6">
                        <h3>Expertisegebieden</h3>
                        <div class="expertise__area"></div>
                        <div class="expertise__area"></div>
                    </div>
                </div>
            </div>
</div>

<div id="quote" class="my-5">
    <div class="container-lg">
        <p>“Margit en Judith hebben in een korte tijd een zeer waardevolle planner voor ons ontwikkeld. Hun brede kennis, flexibiliteit, toegankelijkheid en kritische houding hebben ervoor gezorgd dat we een relevante tool tot onze beschikking hebben, die voldoet aan de wensen van de eindgebruikers en duurzaam is voor de toekomst.”</p>
    </div>
</div>

<div id="content__1" class="my-5 case__content">
    <div class="container-lg">
        <span>1. <h2>Uitdaging</h2></span>
        <p>Door de uitbraak van COVID-19 in Nederland vindt er vertraging in diagnostiek en/of uitstel van behandelingen plaats in de zorg. De zorg die nu wordt uitgesteld, leidt over een paar maanden tot een extra hoeveelheid benodigde zorg en heeft een directe weerslag op IC-, OK- en opnamecapaciteit in de ziekenhuizen. Om de reguliere zorg weer op te starten, is het noodzakelijk om inzichtelijk te maken wat de benodigde capaciteit is.DicaPlan is een digitale tool die de huidige achterstand in IC-, OK- en opnamecapaciteit van ziekenhuizen met betrekking tot uitgestelde reguliere zorg inzichtelijk maakt. In deze editie van Allchiefs Klantcase laten we zien hoe onze Data experts Margit & Judithsamen met DICA dit project hebben doorlopen.</p>
    </div>
</div>

<div id="content__2" class="my-5 case__content">
    <div class="container-lg">
        <span>2. <h2>Aanpak</h2></span>
        <p>Door de uitbraak van COVID-19 in Nederland vindt er vertraging in diagnostiek en/of uitstel van behandelingen plaats in de zorg. De zorg die nu wordt uitgesteld, leidt over een paar maanden tot een extra hoeveelheid benodigde zorg en heeft een directe weerslag op IC-, OK- en opnamecapaciteit in de ziekenhuizen. Om de reguliere zorg weer op te starten, is het noodzakelijk om inzichtelijk te maken wat de benodigde capaciteit is.DicaPlan is een digitale tool die de huidige achterstand in IC-, OK- en opnamecapaciteit van ziekenhuizen met betrekking tot uitgestelde reguliere zorg inzichtelijk maakt. In deze editie van Allchiefs Klantcase laten we zien hoe onze Data experts Margit & Judithsamen met DICA dit project hebben doorlopen.</p>
    </div>
</div>

<div id="content__3" class="my-5 case__content">
    <div class="container-lg">
        <span>3. <h2>Resultaat</h2></span>
        <p>Het resultaat is een interactieve capaciteitsplanner met duidelijke functies voor haar gebruikers. Dit stelt hen in staat om onderbouwde beslissingen te nemen met betrekking tot het opstarten en inplannen van reguliere zorg op verschillende niveaus. De capaciteitsplanner is gebruiksvriendelijk en dankzij de handleiding kan de doelgroep deze zelfstandig gebruiken. De planner kan in de toekomst gemakkelijk worden uitgebreid voor extra toepassingen en is daarmee een duurzame oplossing. Zie onderaan deze pagina het dashboard van de Non COVID-19 capaciteitsplanner.</p>
    </div>
</div>

<div id="contact__block">
    <div class="header__overlay">
        <div class="container-lg text-center">
            <p class="contact__block--title">Geïnteresseerd</p>
            <p class="contact__block--subtitle">Judith & Margit praten graag met je verder</p>
            <a href="" class="btn btn-primary">Plan een afspraak</a>
        </div>
    </div>
</div>

<div id="related_cases">
        <h2>Lees meer ...</h2>

            <div class="case__slider">
            <?php
                    $related_query = new WP_Query(array(
                        'post_type' => 'case',
                        'category__in' => wp_get_post_categories(get_the_ID()),
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                    ));

                    while ($related_query->have_posts()) : $related_query->the_post();
                    global $post;
                ?>
                    <div class="case__slide p-5 ps-0">
                        <?php echo get_the_post_thumbnail();?>
                        <span><p>Case study</p></span>
                        <h4><?php echo get_the_title(); ?></h4>
                    </div>
                <?php endwhile; 
                    wp_reset_query();
                ?>
            </div>
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                
            </div>
</div>
<?php
get_footer();

?>