<?php

namespace Controllers;

final class Request
{
    private $data;

    /**
     * Request constructor.
     * @param array $managers
     */
    public function __construct(array $managers)
    {
        for ($i = 0; $i < count($managers); $i++){
            $this->data[] = ['name' => $managers[$i]->getName(), 'salary' => $managers[$i]->getSalary(), 'count_employees' => $managers[$i]->getCountEmployees()];
        }

    }

    public function getHtml()
    {
        foreach ($this->data as $data) {
            echo "<html><body>Менеджер " .$data['name'] . ': Зарплата: '. $data['salary'] . " Количество подчиненных: " .$data['count_employees'] . PHP_EOL . "</body></html></br>";
        }
    }
    public function getJson(){
        echo json_encode($this->data);
    }

    public function getXml(){
        $xml = new \SimpleXMLElement('<values/>');
        array_walk_recursive($this->data, [$xml, 'addChild']);
        echo $xml->asXML();

    }

}