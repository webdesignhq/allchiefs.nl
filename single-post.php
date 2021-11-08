<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
<div id="insights">
    <div class="container-lg">
        <div class="row">
            <p class="post__date"><?php echo get_the_date(); ?></p>
            <h2><?php echo get_field('insight_subtitle'); ?> Red het milieu én je businessmodel</h2>
            <p class="content"><?php echo get_field('insight_content_before'); ?> We kunnen er niet meer omheen. De gevolgen van klimaatverandering zijn de afgelopen maanden pijnlijk zichtbaar geworden met de overstromingen in Limburg en de aanhoudende bosbranden in Canada, California, Siberië en Griekenland. Door de opwarming van de aarde neemt de kans op extreem weer toe. We zullen eraan moeten wennen dat dit soort weersomstandigheden vaker voorkomen en dus normaliseren. Dit is één van de gevolgen van klimaatverandering die we niet meer kunnen terugdraaien: ook niet als we 0 emissies uitstoten in 2050. De gevolgen van klimaatverandering zijn voor bedrijven lastig te vatten, maar het is wel belangrijk om hier op boardroom niveau discussie over te voeren. Zijn je operating- en businessmodel nog relevant voor de toekomst? Kunnen we nog wel het gewenste talent aantrekken? Wat betekent dit voor de ontwikkeling van het bedrijf en winstgevendheid? En hoe kan je commerciële belangen en het milieu met elkaar combineren?</p>
        </div>
    </div>

        <div class="row" id="insight__quote">
            <div class="container-lg">
                <p>"<?php echo get_field('insight_quote'); ?>" ''Het gros van je emissies zit vaak in de supply chain. Start klein, schaal op en creëer draagvlak''</p>
            </div>
        </div>

    <div class="container-lg">
        <div class="row content__after">
                <p><?php echo get_field('insight_content_after'); ?> We kunnen er niet meer omheen. De gevolgen van klimaatverandering zijn de afgelopen maanden pijnlijk zichtbaar geworden met de overstromingen in Limburg en de aanhoudende bosbranden in Canada, California, Siberië en Griekenland. Door de opwarming van de aarde neemt de kans op extreem weer toe. We zullen eraan moeten wennen dat dit soort weersomstandigheden vaker voorkomen en dus normaliseren. Dit is één van de gevolgen van klimaatverandering die we niet meer kunnen terugdraaien: ook niet als we 0 emissies uitstoten in 2050. De gevolgen van klimaatverandering zijn voor bedrijven lastig te vatten, maar het is wel belangrijk om hier op boardroom niveau discussie over te voeren. Zijn je operating- en businessmodel nog relevant voor de toekomst? Kunnen we nog wel het gewenste talent aantrekken? Wat betekent dit voor de ontwikkeling van het bedrijf en winstgevendheid? En hoe kan je commerciële belangen en het milieu met elkaar combineren?</p>
        </div>
    </div>

        <div class="row content__conclusion">
            <div class="container-lg">
                <h2><?php echo get_field('insight_conclusion'); ?> Het resultaat</h2>
                <p><?php echo get_field('insight_conclusion_content'); ?> We kunnen er niet meer omheen. De gevolgen van klimaatverandering zijn de afgelopen maanden pijnlijk zichtbaar geworden met de overstromingen in Limburg en de aanhoudende bosbranden in Canada, California, Siberië en Griekenland. Door de opwarming van de aarde neemt de kans op extreem weer toe. We zullen eraan moeten wennen dat dit soort weersomstandigheden vaker voorkomen en dus normaliseren. Dit is één van de gevolgen van klimaatverandering die we niet meer kunnen terugdraaien: ook niet als we 0 emissies uitstoten in 2050. De gevolgen van klimaatverandering zijn voor bedrijven lastig te vatten, maar het is wel belangrijk om hier op boardroom niveau discussie over te voeren. Zijn je operating- en businessmodel nog relevant voor de toekomst? Kunnen we nog wel het gewenste talent aantrekken? Wat betekent dit voor de ontwikkeling van het bedrijf en winstgevendheid? En hoe kan je commerciële belangen en het milieu met elkaar combineren?</p>
            </div>
        </div>

        <div id="contact__block">
            <div class="header__overlay">
                <div class="container-lg text-center">
                    <p class="contact__block--title">Geïnteresseerd</p>
                    <p class="contact__block--subtitle mt-4">Judith & Margit praten graag met je verder</p>
                    <a href="" class="btn btn-primary mt-4">Plan een afspraak</a>
                </div>
            </div>
        </div>
            
    </div>
</div> 
<?php get_footer(); ?>