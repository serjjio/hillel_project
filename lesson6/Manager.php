<?php


class Manager implements EmployeeInterface, ManagerInterface
{
    public $salary;
    public $name;
    private static $count_worker;
    public $date;
    public $position;
    public $employees;

    /**
     * Manager constructor.
     * @param string $date
     * @param int $salary
     * @param string $name
     * @throws Exception
     */
    public function __construct(string $date, int $salary, string $name)
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

    public function getSalary(): int
    {
        // TODO: Implement getSalery() method.
        $diff_year = $this->date->diff(new DateTime(date('Y-m-d')));
        $salary = floor($this->salary*pow(1.05, $diff_year->format('%Y')));
        return self::$count_worker ? $salary*pow(1.02, self::$count_worker) : $salary;
    }

    public function getPosition(): string
    {
        // TODO: Implement getPosition() method.
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public static function getCountWorker()
    {
        return self::$count_worker;
    }



    public function getStartDate(): DateTimeInterface
    {
        // TODO: Implement getStartDate() method.
        return $this->date;
    }

    public function getEmployees()
    {
        // TODO: Implement getEmployees() method.
        return $this->employees;
    }

    public function addEmployee(EmployeeInterface $employee)
    {
        // TODO: Implement addEmployee() method.
        $this->employees[] = $employee;
        self::$count_worker++;
    }

    public function getCountEmployees(): int
    {
        // TODO: Implement getCountEmployees() method.
        return self::$count_worker;
    }
}