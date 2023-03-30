<?php
require_once 'User.php';
class Task {
  private string $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdated;
  private DateTime $dateDone;
  private int $priority;
  private bool $isDone = false;
  private Users $user;
  private array $comment;
  function __construct($user, $description, $priority)
  {
    $this->description = $description;
    $this->priority = $priority;
    $this->user = $user;
    $this->dateCreated = new DateTime();
  }
  public function getUser(): User
  {
    return $this->user;
  }
  public function setUser($user)
  {
      return $this->user = $user;
  }
  public function getDescription(): string
  {
    return $this->description;
  }  
  public function setDescription(string $task, int $priority): void
  {
    $this->description = $task;
    $this->priority = $priority;
    $this->dateUpdated = new DateTime();
  }
  public function setDateUpdate(): DateTime
  {
      return $this->dateUpdated = new DateTime();
  }
  public function getDateUpdate(): DateTime
  {
        return $this->dateUpdated;
  }
  public function setDateDone(): DateTime
  {
        return $this->dateDone = new DateTime();
  }
  public function getDateDone(): DateTime
  {
        return $this->dateDone;
  }
  /**
   * Get the value of priority
   */ 
  public function getPriority(): int
  {
    return $this->priority;
  }
  public function setPriority($priority): int
  {
      return $this->priority = $priority;
  }
  public function markAsDone(): void
  {
        $this->isDone = $this->setIsDone();
        $this->dateUpdated;
        $this->dateDone = new DateTime();
  }

    /**
     * @return array
     */
    public function getComment(): array
    {
        return $this->comment;
    }

    /**
     * @param array $comment
     */
    public function setComment(Comment $text): void
    {
        $this->comment[] = $text;
    }
    public function getIsDone(): bool
    {
        return $this->isDone;
    }
    /**
     * @param bool $isDone
     */
     private function setIsDone(): void
    {
        $this->isDone = true;
    }
}