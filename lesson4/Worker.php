<?php


namespace Worker;


class Worker
{
    private $name;
    private $age;
    private $salary;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param integer $age
     */
    public function setAge(int $age): void
    {
        if ($this->checkAge($age)){
            $this->age = $age;
        }
    }

    /**
     * @return integer
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param integer $salary
     */
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return boolean
     */
    private function checkAge(int $age): bool
    {
        return ($age >=1 && $age <= 100) ? true : false;
    }

}

//create object
$worker1 = new Worker();
$worker1->setName("Иван");
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName("Вася");
$worker2->setAge(26);
$worker2->setSalary(2000);

//show sum of ages and salaries
echo 'Сумма зарплат: ' . ($worker1->getSalary() + $worker2->getSalary()) . PHP_EOL;
echo 'Сумма возрастов: ' . ($worker1->getAge() + $worker2->getAge()) . PHP_EOL;

//show names snd ages of workers
showWorker($worker1);
showWorker($worker2);


//function for show name and age of object
/**
 * @param Worker $worker
 * @return mixed
 */
function showWorker(Worker $worker)
{
    echo 'Имя: ' . $worker->getName() . ' Возраст: ' . $worker->getAge() . PHP_EOL;
}

