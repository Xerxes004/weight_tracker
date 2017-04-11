<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
  protected $table = 'runs';

  public function mph() {
    return round(($this->dist_mi / $this->dur_hrs()), 2);
  }

  public function dur_hrs() {
    return round(($this->dur_min/60 + $this->dur_sec/(3600)), 2);
  }

  public function dur_mins() {
    return round(($this->dur_min + $this->dur_sec/60), 2);
  }

  public function dur_sec() {
    return ($this->dur_min * 60 + $this->dur_sec);
  }
}
