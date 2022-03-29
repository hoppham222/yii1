<?php

namespace app\models;
use yii\base\Model;

class Hello extends Model {
  public $username;
  public $website;
  public $email;

  public function setUser($user, $website, $email) {
      $this->username = $user;
      $this->website = $website;
      $this->email =$email;
  }

  public function getUser() {
      return $this->username.'<br/>'.$this->website.'<br/>'.$this->email;
  }
}