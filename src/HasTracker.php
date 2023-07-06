<?php
namespace Heddiyoussouf\Mailtracker;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Casts\Attribute;
trait HasTracker{

    protected function singleView(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->single(),
        );
    }
    protected function multipleView(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->multiple(),
        );
    }
    protected function single():string{
        $generated_id=Crypt::encrypt($this->id);
        return URL::signedRoute('single_view',['id' => $generated_id]);
    }
    protected function multiple():string{
        $generated_id=Crypt::encrypt($this->id);
        return URL::signedRoute('multiple_view',['id' => $generated_id]);
    }


}
