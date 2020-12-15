<?php

namespace XAdam;

class TrCitizenNumberVerification
{
    const API_URL = 'https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL';
    private static $client = null;

    public static function verify($citizen_number, $birth_year, $name, $surname)
    {
        if (!TrCitizenNumberValidation::validate($citizen_number)) {
            return false;
        }

        if ($birth_year < 1900 || $birth_year > date('Y')) {
            return false;
        }

        if (static::$client === null) {
            static::$client = new \SoapClient(static::API_URL);
        }

        $response = static::$client->TCKimlikNoDogrula([
            'TCKimlikNo' => $citizen_number,
            'Ad' => tr_strtoupper($name),
            'Soyad' => tr_strtoupper($surname),
            'DogumYili' => $birth_year
        ]);

        return $response->TCKimlikNoDogrulaResult;
    }
}
