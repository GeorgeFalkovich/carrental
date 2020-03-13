<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 17/01/2020
 * Time: 16:16
 */

class SubmitModel extends Model
{
    public function Index() {
        $to = "gfalk85@gmail.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);

        //Get array of fields
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        array_pop($post);
        array_pop($post);
        array_pop($post);

        // Check there is no empty fileds
      foreach ($post as $key => $field) {
       if ($field == "") {
           Messages::setMsg('Please Fill All Filelds!', 'error');
           return;
       }
      }

$sql = "INSERT INTO car_rental (
rental_fromdate,
rental_todate,
model_name,
rental_fullname,
rental_age,
rental_phone,
rental_email,
rental_driver_fullname,
rental_driver_age)
VALUES
(:from, :to, :model, :name, :age, :phone, :email, :other_driver_name, :other_driver_age)";

      $this->query($sql);
      $this->bind(':from', $post['from_date']);
      $this->bind(':to', $post['to_date']);
      $this->bind(':model', $post['model_name']);
      $this->bind(':name', $post['fname']. " " . $post['lname']);
      $this->bind(':age', $post['age']);
      $this->bind(':phone', $post['phone_number']);
      $this->bind(':email', $post['email']);
      $this->bind(':other_driver_name', $post['o_name']);
      $this->bind(':other_driver_age', $post['o_number']);
      $this->execute();
        if($this->lastInsertId()){
            Messages::setMsg("Submitted! Check your email for details", "Success");
            return;
        }

    }

}