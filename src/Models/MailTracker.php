<?php
namespace Heddiyoussouf\Mailtracker\Models;
use Illuminate\Database\Eloquent\Model;
class MailTracker extends Model{
 protected $fillable=[
    "mail_id",
    "ip",
    "user_agent",
 ];
 protected $hidden=[
    "updated_at"
 ];

 /**
  * Get the user that owns the MailTracker
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function email()
 {
     return $this->belongsTo(Mail::class, 'mail_id');
 }
}
