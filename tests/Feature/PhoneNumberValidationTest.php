<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\PhoneNumberValidator;

class PhoneNumberValidationTest extends TestCase
{
    public function testPhoneNumberValidation()
    {
        $validator = new PhoneNumberValidator();

        $testData = [
            ["phone" => "97455200000", "country" => "AE"],
            ["phone" => "0557570000", "country" => "AE"],
            ["phone" => "971568080000", "country" => "AE"],
            ["phone" => "971501180000", "country" => "AE"],
            ["phone" => "4542680000", "country" => "AE"],
            ["phone" => "447581120000", "country" => "AE"],
            ["phone" => "971569250000", "country" => "AE"],
            ["phone" => "447477010000", "country" => "GB"],
            ["phone" => "353879850000", "country" => "GB"],
            ["phone" => "15083380000", "country" => "GB"],
            ["phone" => "34917250000", "country" => "GB"],
            ["phone" => "0031322000", "country" => "GB"],
            ["phone" => "0015133910000", "country" => "GB"],
            ["phone" => "971585350000", "country" => "GB"],
            ["phone" => "15146250000", "country" => "GB"],
            ["phone" => "340626660000", "country" => "GB"],
            ["phone" => "17869080000", "country" => "GB"],
            ["phone" => "351965590000", "country" => "GB"],
            ["phone" => "18065770000", "country" => "GB"],
            ["phone" => "33661990000", "country" => "GB"],
            ["phone" => "44447976710000", "country" => "GB"],
            ["phone" => "18589970000", "country" => "GB"],
            ["phone" => "442036840000", "country" => "GB"],
            ["phone" => "905317050000", "country" => "GB"],
            ["phone" => "4407800780000", "country" => "GB"],
            ["phone" => "554896660000", "country" => "GB"],
            ["phone" => "0046705590000", "country" => "GB"],
            ["phone" => "447842190000", "country" => "GB"],
            ["phone" => "4474970000", "country" => "GB"],
            ["phone" => "27845050000", "country" => "GB"],
            ["phone" => "4407900600000", "country" => "GB"],
            ["phone" => "0016144930000", "country" => "GB"],
            ["phone" => "60193310000", "country" => "GB"],
            ["phone" => "0007922920000", "country" => "GB"],
            ["phone" => "14802550000", "country" => "GB"],
            ["phone" => "310681900000", "country" => "GB"],
            ["phone" => "004795460000", "country" => "GB"],
            ["phone" => "8282269110000", "country" => "GB"],
            ["phone" => "46702590000", "country" => "GB"],
            ["phone" => "490034675690000", "country" => "GB"],
            ["phone" => "34690260000", "country" => "GB"],
            ["phone" => "0046708460000", "country" => "GB"],
            ["phone" => "13137010000", "country" => "GB"],
            ["phone" => "822035640000", "country" => "GB"],
            ["phone" => "000442010000", "country" => "GB"],
            ["phone" => "43006603770000", "country" => "GB"],
            ["phone" => "35056000000", "country" => "GB"],
            ["phone" => "4407483220000", "country" => "GB"],
            ["phone" => "32475910000", "country" => "GB"],
            ["phone" => "0166630000", "country" => "GB"],
            ["phone" => "320032497660230", "country" => "GB"],
            ["phone" => "0014158470000", "country" => "GB"],
            ["phone" => "19298100000", "country" => "GB"],
            ["phone" => "18521050000", "country" => "GB"],
            ["phone" => "442036840000", "country" => "GB"],
            ["phone" => "49353874710758", "country" => "GB"],
            ["phone" => "0093631000", "country" => "GB"],
            ["phone" => "16463020000", "country" => "GB"],
            ["phone" => "34935500000", "country" => "GB"],
            ["phone" => "8602031240000", "country" => "GB"],
            ["phone" => "15082690000", "country" => "GB"],
            ["phone" => "971553380000", "country" => "GB"],
            ["phone" => "14803000000", "country" => "GB"],
            ["phone" => "64274590000", "country" => "GB"],
            ["phone" => "41791060000", "country" => "GB"],
            ["phone" => "12064730000", "country" => "GB"],
            ["phone" => "79178220000", "country" => "RU"],
            ["phone" => "9032970000", "country" => "RU"],
            ["phone" => "5549260000", "country" => "RU"],
            ["phone" => "79109810000", "country" => "RU"],
            ["phone" => "01080100000", "country" => "RU"],
            ["phone" => "90533930000", "country" => "RU"],
            ["phone" => "79994420000", "country" => "RU"],
            ["phone" => "53497000", "country" => "RU"],
            ["phone" => "89247380000", "country" => "RU"],
            ["phone" => "9817580000", "country" => "RU"],
            ["phone" => "681015000", "country" => "RU"],
            ["phone" => "0521333000", "country" => "SA"],
            ["phone" => "0504718000", "country" => "SA"],
            ["phone" => "0555940000", "country" => "SA"],
            ["phone" => "0568505000", "country" => "SA"],
            ["phone" => "0798611000", "country" => "SA"],
            ["phone" => "99940000", "country" => "SA"],
            ["phone" => "442036840000", "country" => "SA"],
            ["phone" => "99940000", "country" => "SA"],
            ["phone" => "1041760000", "country" => "SA"],
            ["phone" => "558830000", "country" => "SA"],
            ["phone" => "4983418040000", "country" => "SI"],
            ["phone" => "3519010000", "country" => "SI"],
            ["phone" => "33608570000", "country" => "SI"],
            ["phone" => "31611120000", "country" => "SI"],
            ["phone" => "36202400000", "country" => "SI"],
            ["phone" => "905394550000", "country" => "UZ"],
            ["phone" => "79104860000", "country" => "UZ"],
            ["phone" => "12025940000", "country" => "UZ"],
            ["phone" => "5316730000", "country" => "UZ"],
            ["phone" => "931830000", "country" => "UZ"],
            ["phone" => "998931830000", "country" => "UZ"],
            ["phone" => "992927780000", "country" => "UZ"],
            ["phone" => "1111110000", "country" => "UZ"],
            ["phone" => "22271000", "country" => "UZ"],
            ["phone" => "998770000", "country" => "UZ"],
            ["phone" => "0014074010000", "country" => "UZ"],
            ["phone" => "79097910000", "country" => "UZ"],
            ["phone" => "971509040000", "country" => "UZ"],
            ["phone" => "13054640000", "country" => "UZ"],
            ["phone" => "0014074010000", "country" => "UZ"],
            ["phone" => "913550000", "country" => "UZ"],
            ["phone" => "821099060000", "country" => "UZ"],
            ["phone" => "0014074010000", "country" => "UZ"],
            ["phone" => "998597000", "country" => "UZ"],
            ["phone" => "998934430000", "country" => "UZ"],
            ["phone" => "359048000", "country" => "UZ"],
            ["phone" => "1234000", "country" => "UZ"],
            ["phone" => "0014074010000", "country" => "UZ"],
            ["phone" => "544906000", "country" => "UZ"],
            ["phone" => "971568920000", "country" => "UZ"],
            ["phone" => "77755050000", "country" => "UZ"],
            ["phone" => "79031300000", "country" => "UZ"]
        ];

        foreach ($testData as $data) {
            $validatedPhoneNumber = $validator->validatePhoneNumber($data['phone'], $data['country']);
            echo "Original: " . $data['phone'] . ", Validated: " . $validatedPhoneNumber . PHP_EOL;
        }
    }
}

