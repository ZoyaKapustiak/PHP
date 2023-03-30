<?php
class Users {
  private string $userName;
  private ?int $age;
  function __construct(string $userName, ?int $age)
  {
    $this->userName = $userName;
    $this->age = $age;
  }
  function getUserName(): string
  {
    return $this->userName ?? 'unknown';
  }
  function setUserName(): string
    {
        return $this->userName;
    }
  /**
   * Get the value of age
   */ 
  public function getAge(): int
  {
    return $this->age ?? 'unknown';
  }
  /**
   * Set the value of age
   *
   * @return  self
   */ 
  public function setAge($age): int
  {
    $this->age = $age;

    return $this;
  }
}