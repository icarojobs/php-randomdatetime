if (!function_exists('randomDate')) {
    /**
     * Method to generate random dates
     * @return string
     */
    function randomDate()
    {
        $fake_day = mt_rand(1,30);
        if ($fake_day < 10) $fake_day = "0".$fake_day;

        $fake_month = mt_rand(1,12);
        if ($fake_month < 10) $fake_month = "0".$fake_month;

        $fake_year = (string) mt_rand(2017, 2018);

        $fake_hour = mt_rand(1, 23);
        if ($fake_hour < 10) $fake_hour = "0".$fake_hour;

        $fake_minute = mt_rand(1, 59);
        if ($fake_minute < 10) $fake_minute = "0".$fake_minute;

        $data_gerada = date("Y-m-d H:i:s", strtotime("{$fake_year}-{$fake_month}-{$fake_day} {$fake_hour}:{$fake_minute}:01"));

        return $data_gerada;
    }
}
