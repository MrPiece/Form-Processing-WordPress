<?php
/**
 * Template Name: Custom Table
 * Template Post Type: page
 */
get_header();
?>

<?php 
  global $wpdb;

  $query = 'SELECT `id`, `full_name`, `email`, `appointment_time` FROM wp_custom_table';
  $dbResponse = $wpdb->get_results($query);
?>

<div style="padding: 0px 100px; min-height: 70vh">
  <table style="border-collapse: collapse; background: white;">
    <thead>
      <tr>
        <th style="padding: 10px">Client id</th>
        <th style="padding: 10px">Client full name</th>
        <th style="padding: 10px">Client email</th>
        <th style="padding: 10px">Client appointment time</th>
      </tr>
    </thead>
    <tbody>
      <?php if ( count($dbResponse) > 0 ): ?>
        <?php foreach($dbResponse as $client): ?>
          <tr>
            <td style="padding: 10px"><?= $client->id ?></td>
            <td style="padding: 10px"><?= $client->full_name ?></td>
            <td style="padding: 10px"><?= $client->email ?></td>
            <td style="padding: 10px"><?= $client->appointment_time ?></td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
    </tbody>
  </table>
</div>

<?php get_footer(); ?>