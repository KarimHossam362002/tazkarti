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

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما :other يكون :value.',
    'active_url' => 'حقل :attribute يجب أن يحتوي على عنوان URL صالح.',
    'after' => 'يجب أن يكون حقل :attribute تاريخًا بعد تاريخ :date.',
    'after_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا بعد أو يساوي تاريخ :date.',
    'alpha' => 'يجب أن يحتوي حقل :attribute فقط على أحرف.',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute فقط على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute فقط على أحرف وأرقام.',
    'array' => 'يجب أن يكون حقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي حقل :attribute فقط على أحرف أبجدية وأرقام أحادية البايت ورموز.',
    'before' => 'يجب أن يكون حقل :attribute تاريخًا قبل تاريخ :date.',
    'before_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا قبل أو يساوي تاريخ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على بين :min و :max عنصرًا.',
        'file' => 'يجب أن يكون حقل :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute بين :min و :max.',
        'string' => 'يجب أن يكون حقل :attribute بين :min و :max حرفًا.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خاطئًا.',
    'can' => 'حقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون حقل :attribute تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون حقل :attribute تاريخًا يساوي :date.',
    'date_format' => 'يجب أن يتطابق حقل :attribute مع الشكل :format.',
    'decimal' => 'يجب أن يحتوي حقل :attribute على :decimal أماكن عشرية.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute عندما :other يكون :value.',
    'different' => 'يجب أن يكون حقل :attribute و :other مختلفين.',
    'digits' => 'يجب أن يحتوي حقل :attribute على :digits أرقام.',
    'digits_between' => 'يجب أن يحتوي حقل :attribute على بين :min و :max أرقام.',
    'dimensions' => 'حقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'يجب أن لا ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب أن لا يبدأ حقل :attribute بأحد القيم التالية: :values.',
    'email' => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صالح.',
    'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'enum' => ':attribute المحدد غير صالح.',
    'exists' => ':attribute المحدد غير صالح.',
    'file' => 'يجب أن يكون حقل :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حقل :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون حقل :attribute أكبر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :value عنصر أو أكثر.',
        'file' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value حرفًا.',
    ],
    'image' => 'يجب أن يكون حقل :attribute صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'يجب أن يحتوي حقل :attribute على قيمة موجودة في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صالح.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صالح.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صالح.',
    'json' => 'يجب أن يكون حقل :attribute سلسلة JSON صالحة.',
    'lowercase' => 'يجب أن يكون حقل :attribute في حالة صغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصر.',
        'file' => 'يجب أن يكون حقل :attribute أصغر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أصغر من :value.',
        'string' => 'يجب أن يكون حقل :attribute أصغر من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حقل :attribute أصغر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أصغر من أو يساوي :value.',
        'string' => 'يجب أن يكون حقل :attribute أصغر من أو يساوي :value حرفًا.',
    ],
    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالح.',
    'max' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max عنصر.',
        'file' => 'يجب ألا يكون حقل :attribute أكبر من :max كيلوبايت.',
        'numeric' => 'يجب ألا يكون حقل :attribute أكبر من :max.',
        'string' => 'يجب ألا يكون حقل :attribute أكبر من :max حرفًا.',
    ],
    'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max رقمًا.',
    'mimes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عنصر.',
        'file' => 'يجب أن يكون حقل :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute على الأقل :min.',
        'string' => 'يجب أن يكون حقل :attribute على الأقل :min حرفًا.',
    ],
    'min_digits' => 'يجب أن يحتوي حقل :attribute على الأقل على :min أرقام.',
    'missing' => 'يجب أن يكون حقل :attribute مفقودًا.',
    'missing_if' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون حقل :attribute مفقودًا ما لم يكن :other هو :value.',
    'missing_with' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :values موجودًا.',
    'missing_with_all' => 'يجب أن يكون حقل :attribute مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفًا للقيمة :value.',
'not_in' => ':attribute المحدد غير صالح.',
'not_regex' => 'تنسيق حقل :attribute غير صالح.',
'numeric' => 'يجب أن يكون حقل :attribute رقمًا.',
'password' => [
    'letters' => 'يجب أن يحتوي حقل :attribute على الأقل على حرف واحد.',
    'mixed' => 'يجب أن يحتوي حقل :attribute على الأقل على حرف كبير وحرف صغير ورقم ورمز واحد على الأقل.',
    'numbers' => 'يجب أن يحتوي حقل :attribute على الأقل على رقم واحد.',
    'symbols' => 'يجب أن يحتوي حقل :attribute على الأقل على رمز واحد.',
    'uncompromised' => 'يظهر حقل :attribute المعطى في تسرب بيانات. الرجاء اختيار :attribute مختلفًا.',
],
'present' => 'يجب أن يكون حقل :attribute موجودًا.',
'prohibited' => 'حقل :attribute ممنوع.',
'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other هو :value.',
'prohibited_unless' => 'حقل :attribute ممنوع ما لم يكن :other في :values.',
'prohibits' => 'حقل :attribute يمنع وجود :other.',
'regex' => 'تنسيق حقل :attribute غير صالح.',
'required' => 'حقل :attribute مطلوب.',
'required_array_keys' => 'يجب أن يحتوي حقل :attribute على إدخالات للمفاتيح: :values.',
'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
'required_with' => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
'required_without' => 'حقل :attribute مطلوب عندما لا تكون :values موجودة.',
'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون :values موجودة.',
'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
'size' => [
    'array' => 'يجب أن يحتوي حقل :attribute على :size عنصر.',
    'file' => 'يجب أن يكون حقل :attribute :size كيلوبايت.',
    'numeric' => 'يجب أن يكون حقل :attribute :size.',
    'string' => 'يجب أن يكون حقل :attribute :size حرف.',
],
'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',
'string' => 'يجب أن يكون حقل :attribute سلسلة نصية.',
'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',
'unique' => 'تم اتخاذ :attribute بالفعل.',
'uploaded' => 'فشل في تحميل :attribute.',
'uppercase' => 'يجب أن يكون حقل :attribute بحروف كبيرة.',
'url' => 'يجب أن يكون حقل :attribute عنوان URL صالح.',
'ulid' => 'يجب أن يكون حقل :attribute ULID صالح.',
'uuid' => 'يجب أن يكون حقل :attribute UUID صالح.',
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
