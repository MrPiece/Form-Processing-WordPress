<?php get_header() ?>

<main class="books-main">
  <header class="entry-header has-text-align-center">
    <div class="entry-header-inner section-inner medium">
      <h1>This is our great collection of books!</h1>
    </div>
  </header>

  <section class="books-list">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
      <?php
      $writers = get_the_terms( $post->ID, 'writer' );
      $writers_name = [];
      foreach ( $writers as $writer ) {
        $writers_name[] = $writer->name;
      }
      $author = join(', ', $writers_name);
      ?>
        <article class="book-item">
          <div class="book-thumbnail">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
          </div>

          <div class="book-content">
            <h3 class="book-title">
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h3>
            <small class="book-author"><?= $author ?></small>
            <p class="book-excerpt">
              <?php the_excerpt() ?>
            </p>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>

<?php get_footer() ?>