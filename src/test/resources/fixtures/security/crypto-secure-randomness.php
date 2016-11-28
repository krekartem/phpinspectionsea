<?php

class CryptoSecureRandomness
{
    public function missingSecondParameters() {
        $x = <error descr="Use 2nd parameter for determining if the algorithm used was cryptographically strong">openssl_random_pseudo_bytes</error> (32);
        if ($x === false) {
            return false;
        }

        $x = <error descr="Please provide 2nd parameter implicitly as default value has changed between PHP versions">mcrypt_create_iv</error> (32);
        if ($x === false) {
            return false;
        }

        return $x;
    }

    public function missingResultsVerification()
    {
        $x = <error descr="The IV generated can be false, please add necessary checks">openssl_random_pseudo_bytes</error> (32, $isCryptoStrong);

        $x = <error descr="The IV generated can be false, please add necessary checks">mcrypt_create_iv</error> (32, MCRYPT_DEV_URANDOM);

        return $x;
    }
}