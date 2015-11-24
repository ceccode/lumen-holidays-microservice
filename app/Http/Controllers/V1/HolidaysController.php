<?php

namespace App\Http\Controllers\V1;

use Laravel\Lumen\Routing\Controller as BaseController;
use Palmabit\Holidays\Holidays;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;

class HolidaysController extends BaseController
{

    use Helpers;

    /**
     * @param $country
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function get($country, $year)
    {
        return (new Holidays(intval($year)))
                    ->setCountry($country)
                    ->all();
    }

}
