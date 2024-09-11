<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute alanı kabul edilmelidir.',
    'accepted_if' => ':attribute alanı, :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute, :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date tarihine eşit veya daha sonraki bir tarih olmalıdır.',
    'alpha' => ':attribute sadece harf içermelidir.',
    'alpha_dash' => ':attribute sadece harf, rakam, tire ve alt çizgi içermelidir.',
    'alpha_num' => ':attribute sadece harf ve rakam içermelidir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'ascii' => ':attribute sadece tek baytlı alfasayısal karakterler ve semboller içermelidir.',
    'before' => ':attribute, :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihine eşit veya daha önceki bir tarih olmalıdır.',
    'between' => [
        'array' => ':attribute, :min ile :max arasında öğe içermelidir.',
        'file' => ':attribute, :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute, :min ile :max arasında olmalıdır.',
        'string' => ':attribute, :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'can' => ':attribute yetkisiz bir değer içeriyor.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'contains' => ':attribute alanında gerekli bir değer eksik.',
    'current_password' => 'Parola yanlış.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute, :date tarihine eşit bir tarih olmalıdır.',
    'date_format' => ':attribute, :format formatıyla eşleşmelidir.',
    'decimal' => ':attribute :decimal ondalık basamak içermelidir.',
    'declined' => ':attribute reddedilmelidir.',
    'declined_if' => ':attribute, :other :value olduğunda reddedilmelidir.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamak olmalıdır.',
    'digits_between' => ':attribute, :min ile :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahiptir.',
    'distinct' => ':attribute alanı yinelenen bir değere sahiptir.',
    'doesnt_end_with' => ':attribute şu değerlerden biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute şu değerlerden biriyle başlamamalıdır: :values.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şu değerlerden biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersizdir.',
    'exists' => 'Seçilen :attribute geçersizdir.',
    'extensions' => ':attribute şu uzantılardan birine sahip olmalıdır: :values.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanında bir değer olmalıdır.',
    'gt' => [
        'array' => ':attribute alanında :value öğeden fazla olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute, :value değerinden büyük olmalıdır.',
        'string' => ':attribute, :value karakterden uzun olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute alanında :value veya daha fazla öğe olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük veya ona eşit olmalıdır.',
        'numeric' => ':attribute, :value değerinden büyük veya ona eşit olmalıdır.',
        'string' => ':attribute, :value karakterden uzun veya ona eşit olmalıdır.',
    ],
    'hex_color' => ':attribute geçerli bir onaltılık renk kodu olmalıdır.',
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersizdir.',
    'in_array' => ':attribute, :other içinde bulunmalıdır.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'list' => ':attribute bir liste olmalıdır.',
    'lowercase' => ':attribute küçük harflerden oluşmalıdır.',
    'lt' => [
        'array' => ':attribute alanında :value öğeden az olmalıdır.',
        'file' => ':attribute, :value kilobayttan küçük olmalıdır.',
        'numeric' => ':attribute, :value değerinden küçük olmalıdır.',
        'string' => ':attribute, :value karakterden kısa olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute alanında :value öğeden fazla olmamalıdır.',
        'file' => ':attribute, :value kilobayttan küçük veya ona eşit olmalıdır.',
        'numeric' => ':attribute, :value değerinden küçük veya ona eşit olmalıdır.',
        'string' => ':attribute, :value karakterden kısa veya ona eşit olmalıdır.',
    ],
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute alanında en fazla :max öğe olmalıdır.',
        'file' => ':attribute, :max kilobayttan büyük olmamalıdır.',
        'numeric' => ':attribute, :max değerinden büyük olmamalıdır.',
        'string' => ':attribute, :max karakterden uzun olmamalıdır.',
    ],
    'max_digits' => ':attribute, en fazla :max basamak içermelidir.',
    'mimes' => ':attribute, şu dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => ':attribute, şu dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'array' => ':attribute alanında en az :min öğe olmalıdır.',
        'file' => ':attribute, en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute, en az :min olmalıdır.',
        'string' => ':attribute, en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute alanı en az :min basamak içermelidir.',
    'missing' => ':attribute alanı bulunmamalıdır.',
    'missing_if' => ':attribute alanı, :other :value olduğunda bulunmamalıdır.',
    'missing_unless' => ':attribute alanı, :other :value olmadıkça bulunmamalıdır.',
    'missing_with' => ':values mevcut olduğunda :attribute alanı bulunmamalıdır.',
    'missing_with_all' => ':values mevcut olduğunda :attribute alanı bulunmamalıdır.',
    'multiple_of' => ':attribute, :value değerinin katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersizdir.',
    'not_regex' => ':attribute formatı geçersizdir.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute en az bir harf içermelidir.',
        'mixed' => ':attribute en az bir büyük harf ve bir küçük harf içermelidir.',
        'numbers' => ':attribute en az bir sayı içermelidir.',
        'symbols' => ':attribute en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir veri sızıntısında yer almıştır. Lütfen farklı bir :attribute seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'present_if' => ':attribute alanı, :other :value olduğunda mevcut olmalıdır.',
    'present_unless' => ':attribute alanı, :other :value olmadıkça mevcut olmalıdır.',
    'present_with' => ':values mevcut olduğunda :attribute alanı mevcut olmalıdır.',
    'present_with_all' => ':values mevcut olduğunda :attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':attribute alanı, :other :value olduğunda yasaktır.',
    'prohibited_unless' => ':attribute alanı, :other :values içinde olmadıkça yasaktır.',
    'prohibits' => ':attribute alanı, :other alanının mevcut olmasını yasaklar.',
    'regex' => ':attribute formatı geçersizdir.',
    'required' => ':attribute alanı zorunludur.',
    'required_array_keys' => ':attribute alanı şunları içermelidir: :values.',
    'required_if' => ':other :value olduğunda :attribute alanı zorunludur.',
    'required_if_accepted' => ':other kabul edildiğinde :attribute alanı zorunludur.',
    'required_if_declined' => ':other reddedildiğinde :attribute alanı zorunludur.',
    'required_unless' => ':attribute alanı, :other :values içinde olmadıkça zorunludur.',
    'required_with' => ':values mevcut olduğunda :attribute alanı zorunludur.',
    'required_with_all' => ':values mevcut olduğunda :attribute alanı zorunludur.',
    'required_without' => ':values mevcut olmadığında :attribute alanı zorunludur.',
    'required_without_all' => ':values hiçbirisi mevcut olmadığında :attribute alanı zorunludur.',
    'same' => ':attribute alanı ile :other alanı eşleşmelidir.',
    'size' => [
        'array' => ':attribute alanı :size öğe içermelidir.',
        'file' => ':attribute, :size kilobayt olmalıdır.',
        'numeric' => ':attribute :size olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute alanı, şu değerlerden biriyle başlamalıdır: :values.',
    'string' => ':attribute bir metin olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'uppercase' => ':attribute büyük harf olmalıdır.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'ulid' => ':attribute geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
