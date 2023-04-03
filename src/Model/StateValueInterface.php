<?php

namespace App\Model;

interface StateValueInterface {

  public function getType();

  public function getValue();
}