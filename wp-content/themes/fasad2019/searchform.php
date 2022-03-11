<form action="/js-bootcamp/" method="get">
    <input class="input is-rounded" type="text" name="s" placeholder="Search..." value="<?php the_search_query(); ?>">
    <!-- <input type="hidden" name="post_type" value="post" /> -->
    <div class="wp-block-button">
        <button class="wp-block-button__link" alt="Search">Sök</button>
    </div>
</form>