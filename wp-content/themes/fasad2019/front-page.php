<?php
get_header();
?>
        <div class="frontpage_container">
            <div class="frontpage_container-item frontpage_container-item--news">
                <?= latestPost('aktiviteter'); ?>
            </div>
<?php
            // Introduction
            while( have_rows('introduction') ): the_row();
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
?>
                
                <div class="frontpage_container-item frontpage_container-item--member">
                    <a class="link" href="<?= $link['url'] ?>" <?= ($link['target'] ? 'target="' . $link['target'] . '"' : '') ?>>
                        <div class="inner">
                            <h1 class="title"><?= $title ?></h1>
                            <hr class="line">
                            <p class="text"><?= $text ?></p>
                        </div>
                    </a>
                </div>
<?php
            endwhile;   

            // Next meeting
            // while( have_rows('next_meting') ): the_row();
            //     $text = get_sub_field('text');
            //     $link = get_sub_field('link');
?>
                <!-- <div class="frontpage_container-item frontpage_container-item--agenda">
                    <a class="link" href="<?= $link['url'] ?>" <?= ($link['target'] ? 'target="' . $link['target'] . '"' : '') ?>>
                        <p class="text"><?= $text ?></p>
                        <hr class="line">
                    </a>
                </div> -->
<?php
            // endwhile;  
?>
            <!-- News -->
            <div class="frontpage_container-item frontpage_container-item--news">
                <?= latestPost('debatt'); ?>
            </div>
<?php
            // Let us know
            while( have_rows('let_us_know') ): the_row();
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
?>
                <div class="frontpage_container-item frontpage_container-item--notice">
                    <a class="link" href="<?= $link['url'] ?>" <?= ($link['target'] ? 'target="' . $link['target'] . '"' : '') ?>>
                        <div class="inner">
                            <h2 class="title"><?= $title ?></h2>
                            <hr class="line">
                            <p class="text"><?= $text ?></p>
                        </div>
                    </a>
                </div>
<?php
            endwhile;

            // Manifest
            while( have_rows('manifest') ): the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $link = get_sub_field('link');
?>
                <div class="frontpage_container-item frontpage_container-item--manifest">
                    <a class="link" href="<?= $link['url'] ?>" <?= ($link['target'] ? 'target="' . $link['target'] . '"' : '') ?>>
                        <div class="news-title-overlay"></div>
                        <h2 class="title"><?= $title?></h2>
                        <?php if($image['sizes']['fasad_frontpage']) : ?>
                            <img class="image" src="<?= $image['sizes']['fasad_frontpage'] ?>" alt="<?= $image['description'] ?>">
                        <?php endif; ?>
                    </a>
                </div>
<?php
            endwhile;  

            // Member
            while( have_rows('member') ): the_row();
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
?>
                <div class="frontpage_container-item frontpage_container-item--member">
                    <a class="link" href="<?= $link['url'] ?>" <?= ($link['target'] ? 'target="' . $link['target'] . '"' : '') ?>>
                        <div class="inner">
                            <h2 class="title"><?= $title ?></h2>
                            <hr class="line">
                            <p class="text"><?= $text ?></p>
                        </div>
                    </a>
                </div>
<?php
            endwhile;
?>
        </div>
<?php
get_footer();