<?php

namespace App\Services;

use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\NumberParseException;

class PhoneNumberValidator
{
    protected $phoneNumberUtil;

    public function __construct()
    {
        $this->phoneNumberUtil = PhoneNumberUtil::getInstance();
    }

    public function validatePhoneNumber($phoneNumber, $countryCode)
    {
        try {
            $parsedPhoneNumber = $this->phoneNumberUtil->parse($phoneNumber, $countryCode);
            $e164PhoneNumber = $this->phoneNumberUtil->format($parsedPhoneNumber, PhoneNumberFormat::E164);
            return $e164PhoneNumber;
        } catch (NumberParseException $e) {
            return $phoneNumber;
        }
    }
}

