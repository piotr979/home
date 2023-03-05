<?php

require_once "../includes/init.php";
require_once '../includes/header.php';


$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

  $booking = new Booking();
  $db = new Database(
          DB_HOST,
          DB_NAME,
          DB_USER,
          DB_PASS);

    if (isset($_POST)) {

      $booking->setFirstName($_POST['firstName']);
      $booking->setLastName($_POST['lastName']);
      $booking->setDate($_POST['checkInDate']);
      $booking->setTime($_POST['checkInTime']);
      if ($booking->insertBooking($db->getConection())) {
          $message = 'Booking inserted';
      };
    }
};

?>

<section class="booking-form">
    <?= $message; ?>
  <form method="POST">
    <label for="firstName">First name</label>
    <input name="firstName">

    <label for="lastName">Last name</label>
    <input name="lastName" >

    <label for="checkIn">Check in</label>
    <input name="checkInDate" type="date">
    <input name="checkInTime" type="time">
    <button name="submit">Submit</button>
  </form>
</section>

<?php
require_once '../includes/footer.php';
