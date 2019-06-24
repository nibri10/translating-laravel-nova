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

    'accepted'             => ':attribute deve ser aceito.',
    'active_url'           => ':attribute não é uma URL válida.',
    'after'                => ':attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => ':attribute deve ser uma data posterior ou igual a :date.',
    'alpha'                => ':attribute deve conter somente letras.',
    'alpha_dash'           => ':attribute deve conter letras, números e traços.',
    'alpha_num'            => ':attribute deve conter somente letras e números.',
    'array'                => ':attribute deve ser um array.',
    'before'               => ':attribute deve ser uma data anterior a :date.',
    'before_or_equal'      => ':attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => ':attribute deve estar entre :min e :max.',
        'file'    => ':attribute deve estar entre :min e :max kilobytes.',
        'string'  => ':attribute deve estar entre :min e :max caracteres.',
        'array'   => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => ':attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de :attribute não confere.',
    'date'                 => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não confere com o formato :format.',
    'different' => 'O :attribute and :other must be different.',
    'digits' => 'O :attribute devem ser :digits digits.',
    'digits_between' => 'O :attribute devem estar entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O :attribute campo tem um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values',
    'exists'               => ':attribute selecionado é inválido.',
    'file'                 => ':attribute precisa ser um arquivo.',
    'filled'               => ':attribute é um campo obrigatório.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'O :attribute deve ser maior que :value kilobytes.',
        'string' => 'O :attribute deve ser maior que :value caracteres.',
        'array' => 'O :attribute deve ter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior ou igual :value.',
        'file' => 'O :attribute deve ser maior ou igua :value kilobytes.',
        'string' => 'O :attribute deve ser maior ou igua :value characters.',
        'array' => 'O :attribute deve ter :value itens ou mais.',
    ],
    'image'                => ':attribute deve ser uma imagem.',
    'in'                   => ':attribute é inválido.',
    'in_array'             => ':attribute campo não existe em :other.',
    'integer'              => ':attribute deve ser um inteiro.',
    'ip'                   => ':attribute deve ser um endereço IP válido.',
    'ipv4' => 'The :attribute deve ser um válido IPv4 endereço.',
    'ipv6' => 'The :attribute deve ser um válido IPv6 endereço.',
    'json'                 => ':attribute deve ser um JSON válido.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'The :attribute deve ser menor que :value kilobytes.',
        'string' => 'The :attribute deve ser menor que :value caracteres.',
        'array' => 'The :attribute deve ser menor que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor ou igual :value.',
        'file' => 'O :attribute deve ser menor ou igual :value kilobytes.',
        'string' => 'O :attribute deve ser menor ou igual :value caracteres.',
        'array' => 'O :attribute não deve ter mais do que :value itens.',
    ],
    'max'                  => [
        'numeric' => ':attribute não deve ser maior que :max.',
        'file'    => ':attribute não deve ter mais que :max kilobytes.',
        'string'  => ':attribute não deve ter mais que :max caracteres.',
        'array'   => ':attribute não pode ter mais que :max itens.',
    ],
    'mimes'                => ':attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => ':attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute deve ser no mínimo :min.',
        'file'    => ':attribute deve ter no mínimo :min kilobytes.',
        'string'  => ':attribute deve ter no mínimo :min caracteres.',
        'array'   => ':attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => ':attribute selecionado é inválido.',
    'not_regex' => 'O :attribute o formato é inválido.',
    'numeric'              => ':attribute deve ser um número.',
    'present'              => ':attribute deve estar presente.',
    'regex'                => 'formato de :attribute é inválido.',
    'required'             => 'campo :attribute é obrigatório.',
    'required_if'          => 'campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => ':attribute é necessário a menos que :other esteja em :values.',
    'required_with'        => 'campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'campo :attribute é obrigatório quando :values estão presentes.',
    'required_without'     => 'campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'campo :attribute é obrigatório quando nenhum destes estão presentes: :values.',
    'same'                 => ':attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => ':attribute deve ser :size.',
        'file'    => ':attribute deve ter :size kilobytes.',
        'string'  => ':attribute deve ter :size caracteres.',
        'array'   => ':attribute deve conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes: :values',
    'string' => 'O :attribute deve ser um Texto.',
    'timezone'             => ':attribute deve ser uma timezone válida.',
    'unique'               => ':attribute já está em uso.',
    'uploaded'             => ':attribute falhou no upload.',
    'url'                  => 'O formato de :attribute é inválido.',
    'uuid' => 'O :attribute deve ser um UUID válido.',

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
