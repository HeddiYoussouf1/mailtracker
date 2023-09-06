<?php
namespace Heddiyoussouf\Mailtracker\Http\Controllers;
use Illuminate\Routing\Controller;
use Heddiyoussouf\Mailtracker\Models\Mail;
use Heddiyoussouf\Mailtracker\Models\MailTracker;
use Illuminate\Support\Facades\Crypt;
class MailTrackerController extends Controller
{

    public function multiple_view($id)
    {
        $decrypted_id=Crypt::decrypt($id);
        $email=Mail::find($decrypted_id);

        MailTracker::create(
                [
                    "mail_id"=>$decrypted_id,
                    "ip"=>request()->ip(),
                    "user_agent"=>request()->userAgent(),
                ]
        );
        return response()->file(public_path(config("mailtracker.image")));

    }
    public function single_view($id)
    {
        $id=Crypt::decrypt($id);

        $email=Mail::whereId($id)->whereDoesntHave("mail_views")->first();
         if(!is_null($email)){
            MailTracker::create(
                [
                    "mail_id"=>$id,
                    "ip"=>request()->ip(),
                    "user_agent"=>request()->userAgent(),
                ]
            );


         }
         return response()->file(public_path(config("mailtracker.image")));

    }
}
