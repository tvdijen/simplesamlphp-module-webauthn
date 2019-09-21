<?php

namespace SimpleSAML\Module\webauthn\WebAuthn;
class AAGUID {
    const AAGUID_DICTIONARY = [
        '12ded7454bed47d4abaae713f51d6393' => [
            'C' => 'US',
            'O' => 'Feitian Technologies',
            'model' => 'Feitian AllinOne FIDO2 Authenticator',
            'RootPEMs' => [
                0 => 'MIIB2DCCAX6gAwIBAgIQGBUrQbdDrm20FZnDsX2CBTAKBggqhkjOPQQDAjBLMQswCQYDVQQGEwJVUzEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMCAXDTE4MDQwMTAwMDAwMFoYDzIwNDgwMzMxMjM1OTU5WjBLMQswCQYDVQQGEwJVUzEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEsFYEEhiJuqqnMgQjSiivBjV7DGCTf4XBBH/B7uvZsKxXShF0L8uDISWUvcExixRs6gB3oldSrjox6L8T94NOzqNCMEAwHQYDVR0OBBYEFEu9hyYRrRyJzwRYvnDSCIxrFiO3MA8GA1UdEwEB/wQFMAMBAf8wDgYDVR0PAQH/BAQDAgEGMAoGCCqGSM49BAMCA0gAMEUCIDHSb2mbNDAUNXvpPU0oWKeNye0fQ2l9D01AR2+sLZdhAiEAo3wz684IFMVsCCRmuJqxH6FQRESNqezuo1E+KkGxWuM=',
                1 => 'MIIB2DCCAX6gAwIBAgIQFZ97ws2JGPEoa5NI+p8z1jAKBggqhkjOPQQDAjBLMQswCQYDVQQGEwJDTjEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMCAXDTE4MDQwMTAwMDAwMFoYDzIwNDgwMzMxMjM1OTU5WjBLMQswCQYDVQQGEwJDTjEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEnfAKbjvMX1Ey1b6k+WQQdNVMt9JgGWyJ3PvM4BSK5XqTfo++0oAj/4tnwyIL0HFBR9St+ktjqSXDfjiXAurs86NCMEAwHQYDVR0OBBYEFNGhmE2Bf8O5a/YHZ71QEv6QRfFUMA8GA1UdEwEB/wQFMAMBAf8wDgYDVR0PAQH/BAQDAgEGMAoGCCqGSM49BAMCA0gAMEUCIQC3sT1lBjGeF+xKTpzV1KYU2ckahTd4mLJyzYOhaHv4igIgD2JYkfyH5Q4Bpo8rroO0It7oYjF2kgy/eSZ3U9Glaqw=',
                2 => 'MIIBfjCCASWgAwIBAgIBATAKBggqhkjOPQQDAjAXMRUwEwYDVQQDDAxGVCBGSURPIDAyMDAwIBcNMTYwNTAxMDAwMDAwWhgPMjA1MDA1MDEwMDAwMDBaMBcxFTATBgNVBAMMDEZUIEZJRE8gMDIwMDBZMBMGByqGSM49AgEGCCqGSM49AwEHA0IABNBmrRqVOxztTJVN19vtdqcL7tKQeol2nnM2/yYgvksZnr50SKbVgIEkzHQVOu80LVEE3lVheO1HjggxAlT6o4WjYDBeMB0GA1UdDgQWBBRJFWQt1bvG3jM6XgmV/IcjNtO/CzAfBgNVHSMEGDAWgBRJFWQt1bvG3jM6XgmV/IcjNtO/CzAMBgNVHRMEBTADAQH/MA4GA1UdDwEB/wQEAwIBBjAKBggqhkjOPQQDAgNHADBEAiAwfPqgIWIUB+QBBaVGsdHy0s5RMxlkzpSX/zSyTZmUpQIgB2wJ6nZRM8oX/nA43Rh6SJovM2XwCCH//+LirBAbB0M=',
            ],
            'multi' => NULL,
        ],
        '361a308202784583a16f72a527f973e4' => [
            'C' => 'KR',
            'O' => 'eWBM Co., Ltd.',
            'model' => 'eWBM eFA500 FIDO2 Authenticator',
            'RootPEMs' => [
                0 => 'MIICpTCCAkqgAwIBAgIBATAKBggqhkjOPQQDAjCBrzELMAkGA1UEBhMCS1IxETAPBgNVBAgMCFNlb3VsLVNpMRMwEQYDVQQHDApHYW5nbmFtLUd1MRcwFQYDVQQKDA5lV0JNIENvLiwgTHRkLjEiMCAGA1UECwwZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEcMBoGA1UEAwwTZVdCTSBDQSBDZXJ0aWZpY2F0ZTEdMBsGCSqGSIb3DQEJARYOaW5mb0BlLXdibS5jb20wHhcNMTgwNzAyMDUzMTM5WhcNMjMwNzAxMDUzMTM5WjCBrzELMAkGA1UEBhMCS1IxETAPBgNVBAgMCFNlb3VsLVNpMRMwEQYDVQQHDApHYW5nbmFtLUd1MRcwFQYDVQQKDA5lV0JNIENvLiwgTHRkLjEiMCAGA1UECwwZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEcMBoGA1UEAwwTZVdCTSBDQSBDZXJ0aWZpY2F0ZTEdMBsGCSqGSIb3DQEJARYOaW5mb0BlLXdibS5jb20wWTATBgcqhkjOPQIBBggqhkjOPQMBBwNCAAQIfqHisi0oO/eyOqSaDrr9itG2IymBkHnSDGQIIYmT+vqA8AgO81momc2Ld5PGpEN6muE54wPHQjvc/yCih8u2o1UwUzASBgNVHRMBAf8ECDAGAQH/AgEAMB0GA1UdDgQWBBS3J/fxiAv22irdBs98SODhF7kU/jALBgNVHQ8EBAMCAQYwEQYJYIZIAYb4QgEBBAQDAgAHMAoGCCqGSM49BAMCA0kAMEYCIQDc41LFK4LJCBU2VVKIz7Z6sxPhUEkh8nLSLK6IXdkP5wIhAIeKVOZchaVO5aF7fbdXoSrcyy1YYeUePLojcKI9fX84',
            ],
            'multi' => NULL,
        ],
        '833b721aff5f4d00bb2ebdda3ec01e29' => [
            'C' => 'US',
            'O' => 'Feitian Technologies',
            'model' => 'Feitian ePass FIDO2 Authenticator',
            'RootPEMs' => [
                0 => 'MIIB2DCCAX6gAwIBAgIQGBUrQbdDrm20FZnDsX2CBTAKBggqhkjOPQQDAjBLMQswCQYDVQQGEwJVUzEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMCAXDTE4MDQwMTAwMDAwMFoYDzIwNDgwMzMxMjM1OTU5WjBLMQswCQYDVQQGEwJVUzEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEsFYEEhiJuqqnMgQjSiivBjV7DGCTf4XBBH/B7uvZsKxXShF0L8uDISWUvcExixRs6gB3oldSrjox6L8T94NOzqNCMEAwHQYDVR0OBBYEFEu9hyYRrRyJzwRYvnDSCIxrFiO3MA8GA1UdEwEB/wQFMAMBAf8wDgYDVR0PAQH/BAQDAgEGMAoGCCqGSM49BAMCA0gAMEUCIDHSb2mbNDAUNXvpPU0oWKeNye0fQ2l9D01AR2+sLZdhAiEAo3wz684IFMVsCCRmuJqxH6FQRESNqezuo1E+KkGxWuM=',
                1 => 'MIIB2DCCAX6gAwIBAgIQFZ97ws2JGPEoa5NI+p8z1jAKBggqhkjOPQQDAjBLMQswCQYDVQQGEwJDTjEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMCAXDTE4MDQwMTAwMDAwMFoYDzIwNDgwMzMxMjM1OTU5WjBLMQswCQYDVQQGEwJDTjEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEnfAKbjvMX1Ey1b6k+WQQdNVMt9JgGWyJ3PvM4BSK5XqTfo++0oAj/4tnwyIL0HFBR9St+ktjqSXDfjiXAurs86NCMEAwHQYDVR0OBBYEFNGhmE2Bf8O5a/YHZ71QEv6QRfFUMA8GA1UdEwEB/wQFMAMBAf8wDgYDVR0PAQH/BAQDAgEGMAoGCCqGSM49BAMCA0gAMEUCIQC3sT1lBjGeF+xKTpzV1KYU2ckahTd4mLJyzYOhaHv4igIgD2JYkfyH5Q4Bpo8rroO0It7oYjF2kgy/eSZ3U9Glaqw=',
                2 => 'MIIBfjCCASWgAwIBAgIBATAKBggqhkjOPQQDAjAXMRUwEwYDVQQDDAxGVCBGSURPIDAyMDAwIBcNMTYwNTAxMDAwMDAwWhgPMjA1MDA1MDEwMDAwMDBaMBcxFTATBgNVBAMMDEZUIEZJRE8gMDIwMDBZMBMGByqGSM49AgEGCCqGSM49AwEHA0IABNBmrRqVOxztTJVN19vtdqcL7tKQeol2nnM2/yYgvksZnr50SKbVgIEkzHQVOu80LVEE3lVheO1HjggxAlT6o4WjYDBeMB0GA1UdDgQWBBRJFWQt1bvG3jM6XgmV/IcjNtO/CzAfBgNVHSMEGDAWgBRJFWQt1bvG3jM6XgmV/IcjNtO/CzAMBgNVHRMEBTADAQH/MA4GA1UdDwEB/wQEAwIBBjAKBggqhkjOPQQDAgNHADBEAiAwfPqgIWIUB+QBBaVGsdHy0s5RMxlkzpSX/zSyTZmUpQIgB2wJ6nZRM8oX/nA43Rh6SJovM2XwCCH//+LirBAbB0M=',
            ],
            'multi' => NULL,
        ],
        '87dbc5a14c944dc88a4797d800fd1f3c' => [
            'C' => 'KR',
            'O' => 'eWBM Co., Ltd.',
            'model' => 'eWBM eFA320 FIDO2 Authenticator',
            'RootPEMs' => [
                0 => 'MIICpTCCAkqgAwIBAgIBATAKBggqhkjOPQQDAjCBrzELMAkGA1UEBhMCS1IxETAPBgNVBAgMCFNlb3VsLVNpMRMwEQYDVQQHDApHYW5nbmFtLUd1MRcwFQYDVQQKDA5lV0JNIENvLiwgTHRkLjEiMCAGA1UECwwZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEcMBoGA1UEAwwTZVdCTSBDQSBDZXJ0aWZpY2F0ZTEdMBsGCSqGSIb3DQEJARYOaW5mb0BlLXdibS5jb20wHhcNMTgwNzAyMDUzMTM5WhcNMjMwNzAxMDUzMTM5WjCBrzELMAkGA1UEBhMCS1IxETAPBgNVBAgMCFNlb3VsLVNpMRMwEQYDVQQHDApHYW5nbmFtLUd1MRcwFQYDVQQKDA5lV0JNIENvLiwgTHRkLjEiMCAGA1UECwwZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEcMBoGA1UEAwwTZVdCTSBDQSBDZXJ0aWZpY2F0ZTEdMBsGCSqGSIb3DQEJARYOaW5mb0BlLXdibS5jb20wWTATBgcqhkjOPQIBBggqhkjOPQMBBwNCAAQIfqHisi0oO/eyOqSaDrr9itG2IymBkHnSDGQIIYmT+vqA8AgO81momc2Ld5PGpEN6muE54wPHQjvc/yCih8u2o1UwUzASBgNVHRMBAf8ECDAGAQH/AgEAMB0GA1UdDgQWBBS3J/fxiAv22irdBs98SODhF7kU/jALBgNVHQ8EBAMCAQYwEQYJYIZIAYb4QgEBBAQDAgAHMAoGCCqGSM49BAMCA0kAMEYCIQDc41LFK4LJCBU2VVKIz7Z6sxPhUEkh8nLSLK6IXdkP5wIhAIeKVOZchaVO5aF7fbdXoSrcyy1YYeUePLojcKI9fX84',
            ],
            'multi' => NULL,
        ],
        '95442b2ef15e4defb270efb106facb4e' => [
            'C' => 'KR',
            'O' => 'eWBM Co., Ltd.',
            'model' => 'eWBM eFA310 FIDO2 Authenticator',
            'RootPEMs' => [
                0 => 'MIICpTCCAkqgAwIBAgIBATAKBggqhkjOPQQDAjCBrzELMAkGA1UEBhMCS1IxETAPBgNVBAgMCFNlb3VsLVNpMRMwEQYDVQQHDApHYW5nbmFtLUd1MRcwFQYDVQQKDA5lV0JNIENvLiwgTHRkLjEiMCAGA1UECwwZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEcMBoGA1UEAwwTZVdCTSBDQSBDZXJ0aWZpY2F0ZTEdMBsGCSqGSIb3DQEJARYOaW5mb0BlLXdibS5jb20wHhcNMTgwNzAyMDUzMTM5WhcNMjMwNzAxMDUzMTM5WjCBrzELMAkGA1UEBhMCS1IxETAPBgNVBAgMCFNlb3VsLVNpMRMwEQYDVQQHDApHYW5nbmFtLUd1MRcwFQYDVQQKDA5lV0JNIENvLiwgTHRkLjEiMCAGA1UECwwZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEcMBoGA1UEAwwTZVdCTSBDQSBDZXJ0aWZpY2F0ZTEdMBsGCSqGSIb3DQEJARYOaW5mb0BlLXdibS5jb20wWTATBgcqhkjOPQIBBggqhkjOPQMBBwNCAAQIfqHisi0oO/eyOqSaDrr9itG2IymBkHnSDGQIIYmT+vqA8AgO81momc2Ld5PGpEN6muE54wPHQjvc/yCih8u2o1UwUzASBgNVHRMBAf8ECDAGAQH/AgEAMB0GA1UdDgQWBBS3J/fxiAv22irdBs98SODhF7kU/jALBgNVHQ8EBAMCAQYwEQYJYIZIAYb4QgEBBAQDAgAHMAoGCCqGSM49BAMCA0kAMEYCIQDc41LFK4LJCBU2VVKIz7Z6sxPhUEkh8nLSLK6IXdkP5wIhAIeKVOZchaVO5aF7fbdXoSrcyy1YYeUePLojcKI9fX84',
            ],
            'multi' => NULL,
        ],
        '9F77E279A6E24D58B70031E5943C6A98' => [
            'C' => 'CA',
            'O' => 'HYPERSECU',
            'model' => 'Hyper FIDO Pro',
            'RootPEMs' => [
                0 => 'MIIBxzCCAWygAwIBAgICEAswCgYIKoZIzj0EAwIwOjELMAkGA1UEBhMCQ0ExEjAQBgNVBAoMCUhZUEVSU0VDVTEXMBUGA1UEAwwOSFlQRVJGSURPIDAyMDAwIBcNMTgwMTAxMDAwMDAwWhgPMjA0NzEyMzEyMzU5NTlaMDoxCzAJBgNVBAYTAkNBMRIwEAYDVQQKDAlIWVBFUlNFQ1UxFzAVBgNVBAMMDkhZUEVSRklETyAwMjAwMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAErKUI1G0S7a6IOLlmHipLlBuxTYjsEESQvzQh3dB7dvxxWWm7kWL91rq6S7ayZG0gZPR+zYqdFzwAYDcG4+aX66NgMF4wHQYDVR0OBBYEFLZYcfMMwkQAGbt3ryzZFPFypmsIMB8GA1UdIwQYMBaAFLZYcfMMwkQAGbt3ryzZFPFypmsIMAwGA1UdEwQFMAMBAf8wDgYDVR0PAQH/BAQDAgEGMAoGCCqGSM49BAMCA0kAMEYCIQCG2/ppMGt7pkcRie5YIohS3uDPIrmiRcTjqDclKVWg0gIhANcPNDZHE2/zZ+uB5ThG9OZus+xSb4knkrbAyXKX2zm/',
            ],
            'multi' => NULL,
        ],
        'aeb6569cf8fb4950ac6024ca2bbe2e52' => [
            'C' => 'US',
            'O' => 'HID Global',
            'model' => 'HID Crescendo C2300',
            'RootPEMs' => [
                0 => 'MIIDCTCCAq+gAwIBAgIQQAFqUNSe5SWAILs8H2DS1DAKBggqhkjOPQQDAjBrMQswCQYDVQQGEwJVUzETMBEGA1UEChMKSElEIEdsb2JhbDEiMCAGA1UECxMZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEjMCEGA1UEAxMaRklETyBBdHRlc3RhdGlvbiBSb290IENBIDEwHhcNMTkwNDI0MTkzMTEyWhcNNDQwNDI3MTkzMTEyWjBmMQswCQYDVQQGEwJVUzETMBEGA1UEChMKSElEIEdsb2JhbDEiMCAGA1UECxMZQXV0aGVudGljYXRvciBBdHRlc3RhdGlvbjEeMBwGA1UEAxMVRklETyBBdHRlc3RhdGlvbiBDQSAxMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEGhSML7cupCxTBCzsrcipwgPoz3dvT3rBn1zakDzBg6Uc3HdGKJrVbrD+yXF6Y4ZqksUU7rbRivqOOzKxcJvPFqOCATgwggE0MBIGA1UdEwEB/wQIMAYBAf8CAQAwDgYDVR0PAQH/BAQDAgGGMIGEBggrBgEFBQcBAQR4MHYwLgYIKwYBBQUHMAGGImh0dHA6Ly9oaWQuZmlkby5vY3NwLmlkZW50cnVzdC5jb20wRAYIKwYBBQUHMAKGOGh0dHA6Ly92YWxpZGF0aW9uLmlkZW50cnVzdC5jb20vcm9vdHMvSElERklET1Jvb3RjYTEucDdjMB8GA1UdIwQYMBaAFB2m3iwWSYHvWTHbJiHAyKDp+CSjMEcGA1UdHwRAMD4wPKA6oDiGNmh0dHA6Ly92YWxpZGF0aW9uLmlkZW50cnVzdC5jb20vY3JsL0hJREZJRE9Sb290Y2ExLmNybDAdBgNVHQ4EFgQU38bQANW9dyVBkWl59BlNLD09e/QwCgYIKoZIzj0EAwIDSAAwRQIhAIUq7zvpedfZRHtGrvJJz82R99D+Sr7bV7yrHDfBs8v6AiBaIW50j8WGVR1XHXaImNKllmRyNlk9klX8gTknOEtD8g==',
            ],
            'multi' => NULL,
        ],
        'd41f5a69b8174144a13c9ebd6d9254d6' => [
            'C' => 'SE',
            'O' => 'ATKeyCA00',
            'model' => 'AuthenTrend FIDO2 Authenticator',
            'RootPEMs' => [
                0 => 'MIIBzDCCAXGgAwIBAgIBATAKBggqhkjOPQQDAjBiMQswCQYDVQQGEwJTRTESMBAGA1UECgwJQVRLZXlDQTAwMSIwIAYDVQQLDBlBdXRoZW50aWNhdG9yIEF0dGVzdGF0aW9uMRswGQYDVQQDExJBdXRoZW50cmVuZCBDQSAwMDAwIBcNMTYwMjI2MDgxMTA2WhgPMjA1MDAyMjUwODExMDZaMGIxCzAJBgNVBAYTAlNFMRIwEAYDVQQKDAlBVEtleUNBMDAxIjAgBgNVBAsMGUF1dGhlbnRpY2F0b3IgQXR0ZXN0YXRpb24xGzAZBgNVBAMTEkF1dGhlbnRyZW5kIENBIDAwMDBZMBMGByqGSM49AgEGCCqGSM49AwEHA0IABAJcWqeCxga9KJbFO2TZdjcgrtZAgfi8TXKu+v5lcR5ceb5GJYxyoCjhueESL3ddmMIkpGyhsEEtfFUyBwsyFVCjFjAUMBIGA1UdEwEB/wQIMAYBAQECAQAwCgYIKoZIzj0EAwIDSQAwRgIhAMqIc/Qtr+jZbnrJB7g7W8r/DHmDe+IyFvzwpzdSrxEXAiEAtXcixZznhcDzlnIqFqkIJRGmvL9Yr6lVoP1ZkDeqmjk=',
            ],
            'multi' => NULL,
        ],
        'ee041bce25e54cdb8f86897fd6418464' => [
            'C' => 'US',
            'O' => 'Feitian Technologies',
            'model' => 'Feitian ePass FIDO2-NFC Authenticator',
            'RootPEMs' => [
                  0 => 'MIIB2DCCAX6gAwIBAgIQGBUrQbdDrm20FZnDsX2CBTAKBggqhkjOPQQDAjBLMQswCQYDVQQGEwJVUzEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMCAXDTE4MDQwMTAwMDAwMFoYDzIwNDgwMzMxMjM1OTU5WjBLMQswCQYDVQQGEwJVUzEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEsFYEEhiJuqqnMgQjSiivBjV7DGCTf4XBBH/B7uvZsKxXShF0L8uDISWUvcExixRs6gB3oldSrjox6L8T94NOzqNCMEAwHQYDVR0OBBYEFEu9hyYRrRyJzwRYvnDSCIxrFiO3MA8GA1UdEwEB/wQFMAMBAf8wDgYDVR0PAQH/BAQDAgEGMAoGCCqGSM49BAMCA0gAMEUCIDHSb2mbNDAUNXvpPU0oWKeNye0fQ2l9D01AR2+sLZdhAiEAo3wz684IFMVsCCRmuJqxH6FQRESNqezuo1E+KkGxWuM=',
                  1 => 'MIIB2DCCAX6gAwIBAgIQFZ97ws2JGPEoa5NI+p8z1jAKBggqhkjOPQQDAjBLMQswCQYDVQQGEwJDTjEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMCAXDTE4MDQwMTAwMDAwMFoYDzIwNDgwMzMxMjM1OTU5WjBLMQswCQYDVQQGEwJDTjEdMBsGA1UECgwURmVpdGlhbiBUZWNobm9sb2dpZXMxHTAbBgNVBAMMFEZlaXRpYW4gRklETyBSb290IENBMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEnfAKbjvMX1Ey1b6k+WQQdNVMt9JgGWyJ3PvM4BSK5XqTfo++0oAj/4tnwyIL0HFBR9St+ktjqSXDfjiXAurs86NCMEAwHQYDVR0OBBYEFNGhmE2Bf8O5a/YHZ71QEv6QRfFUMA8GA1UdEwEB/wQFMAMBAf8wDgYDVR0PAQH/BAQDAgEGMAoGCCqGSM49BAMCA0gAMEUCIQC3sT1lBjGeF+xKTpzV1KYU2ckahTd4mLJyzYOhaHv4igIgD2JYkfyH5Q4Bpo8rroO0It7oYjF2kgy/eSZ3U9Glaqw=',
                  2 => 'MIIBfjCCASWgAwIBAgIBATAKBggqhkjOPQQDAjAXMRUwEwYDVQQDDAxGVCBGSURPIDAyMDAwIBcNMTYwNTAxMDAwMDAwWhgPMjA1MDA1MDEwMDAwMDBaMBcxFTATBgNVBAMMDEZUIEZJRE8gMDIwMDBZMBMGByqGSM49AgEGCCqGSM49AwEHA0IABNBmrRqVOxztTJVN19vtdqcL7tKQeol2nnM2/yYgvksZnr50SKbVgIEkzHQVOu80LVEE3lVheO1HjggxAlT6o4WjYDBeMB0GA1UdDgQWBBRJFWQt1bvG3jM6XgmV/IcjNtO/CzAfBgNVHSMEGDAWgBRJFWQt1bvG3jM6XgmV/IcjNtO/CzAMBgNVHRMEBTADAQH/MA4GA1UdDwEB/wQEAwIBBjAKBggqhkjOPQQDAgNHADBEAiAwfPqgIWIUB+QBBaVGsdHy0s5RMxlkzpSX/zSyTZmUpQIgB2wJ6nZRM8oX/nA43Rh6SJovM2XwCCH//+LirBAbB0M=',
            ],
            'multi' => NULL,
        ],
        'fa2b99dc9e3942578f924a30d23c4118' => [
            'C' => 'SE',
            'O' => 'Yubico AB',
            'model' => 'YubiKey 5 NFC',
            'RootPEMs' => [
                0 => 'MIIDHjCCAgagAwIBAgIEG0BT9zANBgkqhkiG9w0BAQsFADAuMSwwKgYDVQQDEyNZdWJpY28gVTJGIFJvb3QgQ0EgU2VyaWFsIDQ1NzIwMDYzMTAgFw0xNDA4MDEwMDAwMDBaGA8yMDUwMDkwNDAwMDAwMFowLjEsMCoGA1UEAxMjWXViaWNvIFUyRiBSb290IENBIFNlcmlhbCA0NTcyMDA2MzEwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC/jwYuhBVlqaiYWEMsrWFisgJ+PtM91eSrpI4TK7U53mwCIawSDHy8vUmk5N2KAj9abvT9NP5SMS1hQi3usxoYGonXQgfO6ZXyUA9a+KAkqdFnBnlyugSeCOep8EdZFfsaRFtMjkwz5Gcz2Py4vIYvCdMHPtwaz0bVuzneueIEz6TnQjE63Rdt2zbwnebwTG5ZybeWSwbzy+BJ34ZHcUhPAY89yJQXuE0IzMZFcEBbPNRbWECRKgjq//qT9nmDOFVlSRCt2wiqPSzluwn+v+suQEBsUjTGMEd25tKXXTkNW21wIWbxeSyUoTXwLvGS6xlwQSgNpk2qXYwf8iXg7VWZAgMBAAGjQjBAMB0GA1UdDgQWBBQgIvz0bNGJhjgpToksyKpP9xv9oDAPBgNVHRMECDAGAQH/AgEAMA4GA1UdDwEB/wQEAwIBBjANBgkqhkiG9w0BAQsFAAOCAQEAjvjuOMDSa+JXFCLyBKsycXtBVZsJ4Ue3LbaEsPY4MYN/hIQ5ZM5p7EjfcnMG4CtYkNsfNHc0AhBLdq45rnT87q/6O3vUEtNMafbhU6kthX7Y+9XFN9NpmYxr+ekVY5xOxi8h9JDIgoMP4VB1uS0aunL1IGqrNooL9mmFnL2kLVVee6/VR6C5+KSTCMCWppMuJIZII2v9o4dkoZ8Y7QRjQlLfYzd3qGtKbw7xaF1UsG/5xUb/Btwb2X2g4InpiB/yt/3CpQXpiWX/K4mBvUKiGn05ZsqeY1gx4g0xLBqcU9psmyPzK+Vsgw2jeRQ5JlKDyqE0hebfC1tvFu0CCrJFcw==',
            ],
            'multi' => NULL,
        ],
        'cb69481e8ff7403993ec0a2729a154a8' => [
            'C' => 'SE',
            'O' => 'Yubico AB',
            'model' => 'YubiKey 5C/5C Nano/5 Nano',
            'RootPEMs' => [
                0 => 'MIIDHjCCAgagAwIBAgIEG0BT9zANBgkqhkiG9w0BAQsFADAuMSwwKgYDVQQDEyNZdWJpY28gVTJGIFJvb3QgQ0EgU2VyaWFsIDQ1NzIwMDYzMTAgFw0xNDA4MDEwMDAwMDBaGA8yMDUwMDkwNDAwMDAwMFowLjEsMCoGA1UEAxMjWXViaWNvIFUyRiBSb290IENBIFNlcmlhbCA0NTcyMDA2MzEwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC/jwYuhBVlqaiYWEMsrWFisgJ+PtM91eSrpI4TK7U53mwCIawSDHy8vUmk5N2KAj9abvT9NP5SMS1hQi3usxoYGonXQgfO6ZXyUA9a+KAkqdFnBnlyugSeCOep8EdZFfsaRFtMjkwz5Gcz2Py4vIYvCdMHPtwaz0bVuzneueIEz6TnQjE63Rdt2zbwnebwTG5ZybeWSwbzy+BJ34ZHcUhPAY89yJQXuE0IzMZFcEBbPNRbWECRKgjq//qT9nmDOFVlSRCt2wiqPSzluwn+v+suQEBsUjTGMEd25tKXXTkNW21wIWbxeSyUoTXwLvGS6xlwQSgNpk2qXYwf8iXg7VWZAgMBAAGjQjBAMB0GA1UdDgQWBBQgIvz0bNGJhjgpToksyKpP9xv9oDAPBgNVHRMECDAGAQH/AgEAMA4GA1UdDwEB/wQEAwIBBjANBgkqhkiG9w0BAQsFAAOCAQEAjvjuOMDSa+JXFCLyBKsycXtBVZsJ4Ue3LbaEsPY4MYN/hIQ5ZM5p7EjfcnMG4CtYkNsfNHc0AhBLdq45rnT87q/6O3vUEtNMafbhU6kthX7Y+9XFN9NpmYxr+ekVY5xOxi8h9JDIgoMP4VB1uS0aunL1IGqrNooL9mmFnL2kLVVee6/VR6C5+KSTCMCWppMuJIZII2v9o4dkoZ8Y7QRjQlLfYzd3qGtKbw7xaF1UsG/5xUb/Btwb2X2g4InpiB/yt/3CpQXpiWX/K4mBvUKiGn05ZsqeY1gx4g0xLBqcU9psmyPzK+Vsgw2jeRQ5JlKDyqE0hebfC1tvFu0CCrJFcw==',
            ],
            'multi' => NULL,
        ],
        'c5ef55ffad9a4b9fb580adebafe026d0' => [
            'C' => 'SE',
            'O' => 'Yubico AB',
            'model' => 'YubiKey 5Ci',
            'RootPEMs' => [
                0 => 'MIIDHjCCAgagAwIBAgIEG0BT9zANBgkqhkiG9w0BAQsFADAuMSwwKgYDVQQDEyNZdWJpY28gVTJGIFJvb3QgQ0EgU2VyaWFsIDQ1NzIwMDYzMTAgFw0xNDA4MDEwMDAwMDBaGA8yMDUwMDkwNDAwMDAwMFowLjEsMCoGA1UEAxMjWXViaWNvIFUyRiBSb290IENBIFNlcmlhbCA0NTcyMDA2MzEwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC/jwYuhBVlqaiYWEMsrWFisgJ+PtM91eSrpI4TK7U53mwCIawSDHy8vUmk5N2KAj9abvT9NP5SMS1hQi3usxoYGonXQgfO6ZXyUA9a+KAkqdFnBnlyugSeCOep8EdZFfsaRFtMjkwz5Gcz2Py4vIYvCdMHPtwaz0bVuzneueIEz6TnQjE63Rdt2zbwnebwTG5ZybeWSwbzy+BJ34ZHcUhPAY89yJQXuE0IzMZFcEBbPNRbWECRKgjq//qT9nmDOFVlSRCt2wiqPSzluwn+v+suQEBsUjTGMEd25tKXXTkNW21wIWbxeSyUoTXwLvGS6xlwQSgNpk2qXYwf8iXg7VWZAgMBAAGjQjBAMB0GA1UdDgQWBBQgIvz0bNGJhjgpToksyKpP9xv9oDAPBgNVHRMECDAGAQH/AgEAMA4GA1UdDwEB/wQEAwIBBjANBgkqhkiG9w0BAQsFAAOCAQEAjvjuOMDSa+JXFCLyBKsycXtBVZsJ4Ue3LbaEsPY4MYN/hIQ5ZM5p7EjfcnMG4CtYkNsfNHc0AhBLdq45rnT87q/6O3vUEtNMafbhU6kthX7Y+9XFN9NpmYxr+ekVY5xOxi8h9JDIgoMP4VB1uS0aunL1IGqrNooL9mmFnL2kLVVee6/VR6C5+KSTCMCWppMuJIZII2v9o4dkoZ8Y7QRjQlLfYzd3qGtKbw7xaF1UsG/5xUb/Btwb2X2g4InpiB/yt/3CpQXpiWX/K4mBvUKiGn05ZsqeY1gx4g0xLBqcU9psmyPzK+Vsgw2jeRQ5JlKDyqE0hebfC1tvFu0CCrJFcw==',
            ],
            'multi' => NULL,
        ],
        '6028b017b1d44c02b4b3afcdafc96bb2' => [
            'C' => 'US',
            'O' => 'Microsoft Corporation',
            'model' => 'Windows Hello software authenticator',
            'multi' => NULL,
        ],
        '6e96969ea5cf4aad9b56305fe6c82795' => [
            'C' => 'US',
            'O' => 'Microsoft Corporation',
            'model' => 'Windows Hello VBS software authenticator',
            'multi' => NULL,
        ],
        '08987058cadc4b81b6e130de50dcbe96' => [
            'C' => 'US',
            'O' => 'Microsoft Corporation',
            'model' => 'Windows Hello hardware authenticator',
            'multi' => NULL,
        ],
        '9ddd1817af5a4672a2b93e3dd95000a9' => [
            'C' => 'US',
            'O' => 'Microsoft Corporation',
            'model' => 'Windows Hello VBS hardware authenticator',
            'multi' => NULL,
        ],
    ];
}
