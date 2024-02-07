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

    'accepted' => '������� :attribute��',
    'active_url' => ':attribute ����һ����Ч�� URL��',
    'after' => ':attribute ������ :date ֮���һ�����ڡ�',
    'after_or_equal' => ':attribute ������ :date ֮�����ȵ�һ�����ڡ�',
    'alpha' => ':attribute ֻ�ܰ�����ĸ��',
    'alpha_dash' => ':attribute ֻ�ܰ�����ĸ�����֡��̻��ߺ��»��ߡ�',
    'alpha_num' => ':attribute ֻ�ܰ�����ĸ�����֡�',
    'array' => ':attribute ������һ�����顣',
    'before' => ':attribute ������ :date ֮ǰ��һ�����ڡ�',
    'before_or_equal' => ':attribute ������ :date ֮ǰ����ȵ�һ�����ڡ�',
    'between' => [
        'numeric' => ':attribute ������� :min �� :max ֮�䡣',
        'file' => ':attribute ������� :min �� :max ǧ�ֽ�֮�䡣',
        'string' => ':attribute ������� :min �� :max ���ַ�֮�䡣',
        'array' => ':attribute ������� :min �� :max ��֮�䡣',
    ],
    'boolean' => ':attribute �ֶα���Ϊ true �� false��',
    'confirmed' => ':attribute ȷ�ϲ�ƥ�䡣',
    'date' => ':attribute ����һ����Ч�����ڡ�',
    'date_equals' => ':attribute ������� :date��',
    'date_format' => ':attribute ���ʽ :format ��ƥ�䡣',
    'different' => ':attribute �� :other ���벻ͬ��',
    'digits' => ':attribute ������ :digits λ���֡�',
    'digits_between' => ':attribute ������� :min �� :max λ����֮�䡣',
    'dimensions' => ':attribute ������Ч��ͼ��ߴ硣',
    'distinct' => ':attribute �ֶξ����ظ�ֵ��',
    'email' => ':attribute ������һ����Ч�ĵ����ʼ���ַ��',
    'ends_with' => ':attribute ����������֮һ��β: :values��',
    'exists' => '��ѡ�� :attribute ����Ч�ġ�',
    'file' => ':attribute ������һ���ļ���',
    'filled' => ':attribute �ֶα�����һ��ֵ��',
    'gt' => [
        'numeric' => ':attribute ������� :value��',
        'file' => ':attribute ������� :value ǧ�ֽڡ�',
        'string' => ':attribute ������� :value ���ַ���',
        'array' => ':attribute ������� :value �',
    ],
    'gte' => [
        'numeric' => ':attribute ������ڻ���� :value��',
        'file' => ':attribute ������ڻ���� :value ǧ�ֽڡ�',
        'string' => ':attribute ������ڻ���� :value ���ַ���',
        'array' => ':attribute ���������� :value �',
    ],
    'image' => ':attribute ������һ��ͼ��',
    'in' => '��ѡ�� :attribute ����Ч�ġ�',
    'in_array' => ':attribute �ֶβ������� :other �С�',
    'integer' => ':attribute ������һ��������',
    'ip' => ':attribute ������һ����Ч�� IP ��ַ��',
    'ipv4' => ':attribute ������һ����Ч�� IPv4 ��ַ��',
    'ipv6' => ':attribute ������һ����Ч�� IPv6 ��ַ��',
    'json' => ':attribute ������һ����Ч�� JSON �ַ�����',
    'lt' => [
        'numeric' => ':attribute ����С�� :value��',
        'file' => ':attribute ����С�� :value ǧ�ֽڡ�',
        'string' => ':attribute �������� :value ���ַ���',
        'array' => ':attribute �������� :value �',
    ],
    'lte' => [
        'numeric' => ':attribute ����С�ڻ���� :value��',
        'file' => ':attribute ����С�ڻ���� :value ǧ�ֽڡ�',
        'string' => ':attribute ����С�ڻ���� :value ���ַ���',
        'array' => ':attribute ���ܳ��� :value �',
    ],
    'max' => [
        'numeric' => ':attribute ���ܴ��� :max��',
        'file' => ':attribute ���ܴ��� :max ǧ�ֽڡ�',
        'string' => ':attribute ���ܴ��� :max ���ַ���',
        'array' => ':attribute ���ܳ��� :max �',
    ],
    'mimes' => ':attribute �������ļ�����: :values��',
    'mimetypes' => ':attribute �������ļ�����: :values��',
    'min' => [
        'numeric' => ':attribute ��������Ϊ :min��',
        'file' => ':attribute ��������Ϊ :min ǧ�ֽڡ�',
        'string' => ':attribute ��������Ϊ :min ���ַ���',
        'array' => ':attribute ���������� :min �',
    ],
    'not_in' => '��ѡ�� :attribute ����Ч�ġ�',
    'not_regex' => ':attribute ��ʽ��Ч��',
    'numeric' => ':attribute ������һ�����֡�',
    'password' => '���벻��ȷ��',
    'present' => ':attribute �ֶα�����ڡ�',
    'regex' => ':attribute ��ʽ��Ч��',
    'required' => ':attribute �ֶ��Ǳ���ġ�',
    'required_if' => '�� :other �� :value ʱ��:attribute �ֶ��Ǳ���ġ�',
    'required_unless' => '���� :other �� :values �У����� :attribute �ֶ��Ǳ���ġ�',
    'required_with' => '�� :values ����ʱ��:attribute �ֶ��Ǳ���ġ�',
    'required_with_all' => '�� :values ����ʱ��:attribute �ֶ��Ǳ���ġ�',
    'required_without' => '�� :values ������ʱ��:attribute �ֶ��Ǳ���ġ�',
    'required_without_all' => '�� :values ��������ʱ��:attribute �ֶ��Ǳ���ġ�',
    'same' => ':attribute �� :other ����ƥ�䡣',
    'size' => [
        'numeric' => ':attribute ������ :size��',
        'file' => ':attribute ������ :size ǧ�ֽڡ�',
        'string' => ':attribute ������ :size ���ַ���',
        'array' => ':attribute ������� :size �',
    ],
    'starts_with' => ':attribute ����������֮һ��ͷ: :values��',
    'string' => ':attribute ������һ���ַ�����',
    'timezone' => ':attribute ������һ����Ч������',
    'unique' => ':attribute �Ѿ���ռ�á�',
    'uploaded' => ':attribute �ϴ�ʧ�ܡ�',
    'url' => ':attribute ��ʽ��Ч��',
    'uuid' => ':attribute ������һ����Ч�� UUID��',

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
