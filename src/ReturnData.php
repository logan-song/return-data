<?php

namespace LoganSong\ReturnData;

use Illuminate\Support\Facades\Facade;

class ReturnData extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'return-data';
  }
}
