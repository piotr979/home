<?php

/**
 * Manages customers bookings
 */
class Booking {

  /**
   * Id of the entity
   * @var int
   *
   */

  /**
   * First name of the customer
   *
   * @var string
   */
  private string $first_name;

  /**
   * Last name of the customer
   *
   * @var string
   */
  private string $last_name;

  /**
   * Check in date
   *
   * @var string
   */
  private string $date;

  /**
   * Check in time
   *
   * @var string
   */
  private string $time;

  public function getId() {
    return $this->id;
  }
  public function setFirstName(string $first_name) {
    $this->first_name = $first_name;
  }

  public function getFirstName() {
    return $this->first_name;
  }

  public function setLastName(string $last_name) {
    $this->last_name = $last_name;
  }

  public function getLastName() {
    return $this->last_name;
  }

  /**
   * @return string
   */
  public function getDate(): string {
    return $this->date;
  }

  /**
   * @param string $date
   */
  public function setDate(string $date): void {
    $this->date = $date;
  }

  /**
   * @return string
   */
  public function getTime(): string {
    return $this->time;
  }

  /**
   * @param string $time
   */
  public function setTime(string $time): void {
    $this->time = $time;
  }

  public function insertBooking(PDO $conn): bool {
    $sql = "INSERT INTO bookings (
        first_name,
        last_name,
        date,
        time
    ) VALUES (
        :firstName,
        :lastName,
        :date,
        :time
    )";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':firstName', $this->first_name, PDO::PARAM_STR);
    $stmt->bindValue(':lastName', $this->last_name, PDO::PARAM_STR);
    $stmt->bindValue(':date', $this->date, PDO::PARAM_STR);
    $stmt->bindValue(':time', $this->time, PDO::PARAM_STR);

    if ($stmt->execute()) {
      return true;
    }
    return false;
  }
  public function getAll($conn) {
    $sql = "SELECT * FROM bookings ORDER BY last_name";

    $result = $conn->query($sql);
    if ($result) {
      return $result->fetchAll(PDO::FETCH_CLASS, 'booking');
    } else {
      die("Cannot fetch data");
    }

  }

}
