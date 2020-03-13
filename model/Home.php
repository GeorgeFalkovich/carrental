<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 08/01/2020
 * Time: 20:55
 */

class HomeModel extends Model {

    public function Index() {
        $query = "SELECT company_id, company_name FROM car_company;";
        $this->query($query);
        $car_companies = $this->resultSet();
        return $car_companies;
    }
}