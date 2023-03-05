<?php

require_once '../includes/init.php';

require_once '../includes/header.php';

$db = new Database(
  DB_HOST,
  DB_NAME,
  DB_USER,
  DB_PASS);
$book = new Booking();
$bookings = [];
$bookings = $book->getAll($db->getConection());
echo '<pre>';
foreach($bookings as $booking) {
    var_dump($booking);
}
echo '</pre>';
?>

<section>

  <table>
    <thead>
      <tr>
        <td>Id</td>
        <td>First name</td>
        <td>Last name</td>
        <td>Booking timer</td>
      </tr>
    </thead>
    <tbody>

      <?php foreach( $bookings as $booking): ?>
        <tr>
          <td><?= $booking->getFirstName() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</section>
