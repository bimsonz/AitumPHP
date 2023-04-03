<?php

namespace App\Enum;

enum StateType: int
{
  case DECIMAL = 1;
  case STRING = 2;
  case BOOL = 3;
  case STRING_LIST = 4;

  public static function fromId(int $id): self
  {
    return match($id)
    {
      1 => self::DECIMAL,
      2 => self::STRING,
      3 => self::BOOL,
      4 => self::STRING_LIST,
    };
  }
}