<section class="section home-schedule">
    <div class="container">
        <?php if ($title = get_field('sch_title', 'options')): ?>
            <h2 class="home-schedule__title title">
                <?php echo $title; ?>
            </h2>
        <?php endif; ?>
        <?php if ($calendars = get_field('salons', 'options')): ?>
            <div class="home-schedule-items">
                <?php foreach ($calendars as $calendar): ?>
                    <?php if ($calendar['salon__name']): ?>
                        <div class="home-schedule-item">
                            <?php if ($title = $calendar['salon__name']): ?>
                                <div class="home-schedule-item__subtitle">
                                    <?php echo $title; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($lists = $calendar['arbeitstage']): ?>
                                <ul class="home-schedule__lists">
                                    <?php foreach ($lists as $list): ?>
                                        <li class="home-schedule__item">
                                            <span>
                                                <?php echo $list['day']; ?>
                                            </span>
                                            <span>
                                                <?php echo $list['arbeitszeiten']; ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <?php if ($detaile = $calendar['zusatzliche_informationen']): ?>
                                <div class="home-schedule__item-detaile">
                                    <?php echo $detaile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>