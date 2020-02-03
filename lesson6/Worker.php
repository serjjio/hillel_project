<?php


class Worker implements EmployeeInterface
{
    public $salary;
    public $name;
    public $position;
    public $date;

    /**
     * Worker constructor.
     * @param string $date
     * @param $salary
     * @param $name
     */
    public function __construct(string $date, $salary, $name)
    {
        $this->salary = $salary;
        $this->name = $name;
        $this->date = new DateTime($date);
    }


    public function getName(): string
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }


    public function getSalary(): int
    {
        // TODO: Implement getSalery() method.
        $diff_year = $this->date->diff(new DateTime(date('Y-m-d')));
        return floor($this->salary*pow(1.05, $diff_year->format('%Y')));
    }

    public function getPosition(): string
    {
        // TODO: Implement getPosition() method.
        return $this->position;
    }

    public function getStartDate(): DateTimeInterface
    {
        // TODO: Implement getStartDate() method.
        return $this->date;
    }
}