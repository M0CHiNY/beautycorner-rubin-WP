<section class="section home-serteficates">
    <div class="container">
        <?php if ($title = get_field('block6-title', get_the_ID())): ?>
            <h2 class="home-serteficates__title title">
                <?php echo $title; ?>
            </h2>
        <?php endif; ?>
        <?php if ($subtitle = get_field('block6-subtitle', get_the_ID())): ?>
            <div class="home-serteficates__subtitle">
                <?php echo $subtitle; ?>
            </div>
        <?php endif; ?>
        <?php if ($content = get_field('block6-generaltext', get_the_ID())): ?>
            <div class="home-serteficates_content">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
        <div class="home-serteficates-maps">
            <div class="home-serteficates-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d674.8479900107769!2d9.37132!3d47.4238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b1f983ed97429%3A0xf892762662e1bfa8!2sBeauty%20Corner%20Rubin!5e0!3m2!1sde!2sch!4v1706003954309!5m2!1sde!2sch"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="home-serteficates-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d5419.619300531766!2d9.5140099!3d47.2203067!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x479b3a8583d72595%3A0xfd3d3e97bf8404b9!2sB%C3%BChl%2048%209487%20Gamprin%20Liechtenstein!3m2!1d47.220306699999995!2d9.5140099!5e0!3m2!1suk!2sua!4v1706003897738!5m2!1suk!2sua"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>