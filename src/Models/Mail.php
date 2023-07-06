<?php
namespace Heddiyoussouf\Mailtracker\Models;
use Illuminate\Database\Eloquent\Model;
use Stancl\VirtualColumn\VirtualColumn;
use Heddiyoussouf\Mailtracker\HasTracker;
class Mail extends Model{
use VirtualColumn,HasTracker;
protected $guarded=[];
 protected $hidden=[
    "updated_at",
    "content"
 ];
 protected $appends = ['single_view',"multiple_view"];
 public static function getCustomColumns(): array
 {
     return [
         'id',
         'subject',
         'email_id',
     ];
 }
 public static function getDataColumn(): string
    {
        return 'content';
    }

    /**
     * Get all of the views for the Email
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mail_views()
    {
        return $this->hasMany(MailTracker::class);
    }


}
