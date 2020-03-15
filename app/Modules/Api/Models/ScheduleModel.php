<?php

namespace App\Modules\Api\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleModel extends Model {

  protected $table = "schedules";

  const CREATED_AT = 'createdAt';
  const UPDATED_AT = 'updatedAt';
  public static $LIST_TIMEZONE = array(
	  '-12:00' => 'GMT-12:00', '-11:30' => 'GMT-11:30',  '-11:00' => 'GMT-11:00',  '-10:30' => 'GMT-10:30',  '-10:00' => 'GMT-10:00',
	  '-09:30' => 'GMT-09:30', '-09:00' => 'GMT-09:00',  '-08:30' => 'GMT-08:30',  '-08:00' => 'GMT-08:00',  '-07:30' => 'GMT-07:30',
	  '-07:00' => 'GMT-07:00', '-06:30' => 'GMT-06:30',  '-06:00' => 'GMT-06:00',  '-05:30' => 'GMT-05:30',
	  '-05:00' => 'GMT-05:00', '-04:30' => 'GMT-04:30',  '-04:00' => 'GMT-04:00',  '-03:30' => 'GMT-03:30',
	  '-03:00' => 'GMT-03:00', '-02:30' => 'GMT-02:30',  '-02:00' => 'GMT-02:00',  '-01:30' => 'GMT-01:30',
	  '-01:00' => 'GMT-01:00', '-00:30' => 'GMT-00:30',
	  '+00:00' => 'GMT+00:00',
	  '+00:30' => 'GMT+00:30', '+01:00' => 'GMT+01:00', '+01:30' => 'GMT+01:30', '+02:00' => 'GMT+02:00',
	  '+02:30' => 'GMT+02:30', '+03:00' => 'GMT+03:00', '+03:30' => 'GMT+03:30', '+04:00' => 'GMT+04:00',
	  '+04:30' => 'GMT+04:30', '+05:00' => 'GMT+05:00', '+05:30' => 'GMT+05:30', '+06:00' => 'GMT+06:00',
	  '+06:30' => 'GMT+06:30', '+07:00' => 'GMT+07:00', '+07:30' => 'GMT+07:30', '+08:00' => 'GMT+08:00',
	  '+08:30' => 'GMT+08:30', '+09:00' => 'GMT+09:00', '+09:30' => 'GMT+09:30', '+10:00' => 'GMT+10:00',
	  '+10:30' => 'GMT+10:30', '+11:00' => 'GMT+11:00', '+11:30' => 'GMT+11:30', '+12:00' => 'GMT+12:00',
	  '+12:30' => 'GMT+12:30', '+13:00' => 'GMT+13:00', '+13:30' => 'GMT+13:30', '+14:00' => 'GMT+14:00',
  );
  
  public function user(){
      return $this->belongsTo(UserModel::class, 'modelId');
  }

}
