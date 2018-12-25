<?php
return [
    'alipay' => [
        'app_id'         => '2016092300574896',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqph5A+rRdh/1TZyYKLwT+tZnqq9mncJRmJ5A0Goauli7ZmoBKtJZFSYUDTpkgpajYfyl1V4sq/fEqH1yrdAiaKMCj82GYfW92E1ySavdWXOjIboDIfQACaLwbZ+rIHPLnPqPtNsgzIuuxAeULQC+LVi7yRKk+vu19Igv6TQXguOU147IRIjGMMLVfOpSdRU6y4Vmw0wlpUnQo96KQ5YVlGObflUMCY9oVHpaFmVyB0ArzkuNRMnsbux/kE+gsaTPp8NSSnF0ZJS9aAK1YfafZMFgkdRj7zg9+L68cmdHVWNOJUtjmucMrV5TqA6ACKzK2i+ThObMt+IbiUhbxQfmNQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAwFeUsHxrR5ePLrQUXq8vnFFvTGG9P3CC5dnobzvkiIQVHBd79Ke2uSATaaTS+HV/J5OvckJu1KdWmBkuP4bJOzdmjrBHriu/ldM8I2ug76tz8H7B7PHeJv0noOXJrd0wXsXUEkN7qZaQrtuRhXwz8j/v+L0nkqC4cINy8ZBvTkZqJjhjPsyFW2Y9a/lkAu7fgpU2C4HYjKydyPIhRG0YnQn6JKsrMni5LsDOIBEcwihaQVN19ICBqD5hCtKhN3pBKpeCaDTaweTucxT4BvTh5uvn648ZrSPy3RZ5DrKxl9ymvbcOyoIzsZ+UhC/heZcVkd/ksn1DGUqLFBO27lSCxQIDAQABAoIBAB0iZwRgpENg4rBZWKiK8rRD5Y71Uxwz56/3VOzcbp57G1N4/y6s5NGf2TDsZYR7D7qn9TBifbU6b7R0Q/wdZ4fPuXotm333ZHrGV1qqJ+OF3fb0zF0eud7AA+usQuNSGMySPLBThnzGsL27xowopxmvs6LCzCa6r5VjY9rRXPrHDlqGe5Sl1LSatMKsQW5xct4jShYmdFOK9XTy9Xn5+EvMeH/KUORF07UlywkM03eKji/LyHqNGR4ugu+p09A7qKuBR3BoLPhSsXT95LQoNQu7uoxb2Rn0WjFctrTbreEFDUmaDCd/WVIfOgY9FZmZQJX7CSIqvtVTApe6TN1oubUCgYEA7I8tpYdR/UVpvKiTkov5MqlkJniNzKxvhzESxlJ4ie0N1IrT0629YANoGgwsUJZ61fZ4R3RYfcd5meTlzkdQCO5kFfPWs0I4/Ih8lGBPaczVpEcwNRYmO1MHV3jlOP00J8kgn2C+qyKiGJTa3+LM/fMFwx+7gGxURaQNQQKroXcCgYEA0CYlK9rgE51qZzKE1ru22NP6dhjHyA2KjmHPQJ3zkgUkzql5P6zJyk2UlDu24ZC9y9Ho+KVnzEwOrxvmSYlpjuEk1DV0Uo1fuHfhTO4iOjzHKhVqiY/3CLPJcxZLqOnN2uzeSZ6KFPalFAWi1t21/5sLkHUhGYC9OtHRKrQl7KMCgYEA1RF9RsukoKAlxeR8zxE+SlBiQXhyF/j0l2svAuyDX4/h1h+Y/d9OZC2NVXDDdW6kgxV1br6vedLyhxexmWOIBhNamJ9BMcKi+2qf8zDwNlZl04q/NAGYO/Tj9viQVg1SLcetl4AXHKOcJtHkdqWch9udxAtP4jMwkG1b9sNF/a8CgYAArS8Pvm1eAvP2k+Z0oDWO7NlyitATaV/a6Jx41EqXXebpuQlI2LHrM2dZN/x3LTZAtFTyge8dbd3aWdfcw1KRgU/SVL4lCoqWGeWkj12THOF01I79FXezEoqEEj16tg/SN1TdnmNKgCa3MvF9i0jtJL7b4FWUNKPozgfFAMLiywKBgQCDWkKRF+55Z+2H074ozQYxH7X9sbHh4NlWGs+MpPUP64ROfw3W5oB7GzmlPFEU89Az3H7y5MKPgMoV+q9YTI97AaxNdjMjr/S/OwVlSlz7vRRiNAfwbkbc7VH4ytRVo24USqPCaYj8V+fIKd3DyjcLRjRcb1/nbMs8KsQDSX7cCw==',
        'mode' => 'dev',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];