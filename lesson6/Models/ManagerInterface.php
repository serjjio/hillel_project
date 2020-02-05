<?php

namespace Models;

interface ManagerInterface
{
    public function getEmployees();
    public function addEmployee(EmployeeInterface $employee);
    public function getCountEmployees(): int;

}