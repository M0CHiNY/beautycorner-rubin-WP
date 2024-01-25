<?php get_header(); ?>

<section class="section subhead">
    <div class="container">
        <h1 class="subhead__title">Form & Farbe</h1>
    </div>
</section>

<section class="section beauty-block">
    <div class="container">
        <img class="beauty-block__icon" src="images/details/brow.svg" alt="brow" />
        <h2 class="beauty-block__title title"><?php the_title(); ?></h2>
        <div class="beauty-block__wrap">
            <div class="beauty-block__sidebar">
                <div class="beauty-block__first">
                    <h3 class="beauty-block__caption">Angebot</h3>
                    <ul class="beauty-block__list">
                        <li>
                            <h4>Henna Brauen</h4>
                            mit Brauen Styling
                        </li>
                    </ul>
                </div>
                <img class="beauty-block__img" src="images/content/beauty-sidebar.png" alt="beauty" />
                <div class="beauty-block__text-down">Vorher | Nachher</div>
            </div>
            <div class="beauty-block__content">
                <div class="beauty-block__content-box">
                    <h3 class="beauty-block__content-title">
                        Ausdrucksstarke Brauen im perfekten Farbton
                    </h3>
                    <div class="beauty-block__text">
                        <p>
                            Imperium Henna ist ein Augenbrauenfärbungsprodukt, das von
                            Experten für Fachleute entwickelt wurde. Basierend auf
                            reinen Henna-Blättern und den besten Farbstoffen für die
                            Haarfärbung.
                        </p>
                        <p>
                            Reines Henna ist grün und zeigt eine rote Farbe. Daher ist
                            Augenbrauen-Henna nicht 100% natürlich, da dem Henna immer
                            Farbstoff zugesetzt wird, um eine braune/ashige Farbe zu
                            erzeugen.
                        </p>
                        <p>
                            Imperium Henna enthält keine aggressiven Chemikalien wie
                            Ammoniak, Blei oder Wasserstoffperoxid und ist nicht
                            schädlich für Ihre Haut.
                        </p>
                        <p>
                            Die Hennafarbe bleibt bis zu 14 Tage auf der Haut (je nach
                            Hauttyp und Nachbehandlung der Augenbrauen). Die
                            Sichtbarkeit in den Brauenhaaren kann bis zu 8 Wochen
                            dauern. So können Sie Ihre getönten Augenbrauen länger
                            geniessen und Make-up ist unnötig.
                        </p>
                    </div>
                    <div class="beauty-block__video" style="position: relative; padding-bottom: 56.25%; height: 0">
                        <iframe style="
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                    " src="https://www.youtube.com/embed/rYfAXQ8u8HE?si=wfF2ELM93TBAbraK" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <ul class="beauty-block__list beauty-block__list--content">
                        <li>mit Brauen Styling</li>
                    </ul>

                    <div class="beauty-block__link-box">
                        <a class="beauty-block__link" href="#">Zur Preisliste</a>
                        <a class="beauty-block__link" href="#">Zum Termin</a>
                        <a class="beauty-block__link beauty-block__link--pdf" href="#">weitere Informationen</a>
                    </div>
                </div>
                <img class="beauty-block__content-img" src="images/content/beauty-content.jpg" alt="beauty" />
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>