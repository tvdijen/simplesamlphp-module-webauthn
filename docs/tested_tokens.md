The following tokens were tested against the implementation and found to work
=============================================================================

Attestation modes (None, Indirect)
----------------------------------

  * Yubikey 5 NFC
  * Yubikey 5C
  * [Security Key by Yubico](https://support.yubico.com/support/solutions/articles/15000006900-security-key-by-yubico)
  * [Security Key NFC by Yubico](https://support.yubico.com/support/solutions/articles/15000019469-security-key-nfc)
  * [Feitian BioPass FIDO2](https://www.ftsafe.com/Products/FIDO/Bio)
  * [Solo - FIDO2 security key (USB only)](https://solokeys.com/collections/all/products/solo)
  * [Solo Tap - FIDO2 security key (USB + NFC)](https://solokeys.com/collections/all/products/solo-tap)

Attestation mode None
---------------------
  * Android 7 (Samsung Galaxy S6, Fingerprint Sensor) - when requesting indirect/direct, None is delivered instead