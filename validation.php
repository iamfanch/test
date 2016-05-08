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
    'accepted'             => ':attribute должен быть принят.',
    'active_url'           => ':attribute не является валидным URL.',
    'after'                => ':attribute должен быть датой после :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, цифры и тире.',
    'alpha_num'            => ':attribute может сожержать только буквы и цифры.',
    'array'                => ':attribute должен быть массивом.',
    'before'               => ':attribute должен быть датой до :date.',
    'between'              => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file'    => ':attribute должен быть между :min и :max килобайтами.',
        'string'  => ':attribute должен быть между :min и :max символами.',
        'array'   => ':attribute должен содержать между :min и :max элементами.',
    ],
    'boolean'              => ':attribute поле должно быть true или false.',
    'confirmed'            => ':attribute поддтверждение не совпадает.',
    'date'                 => ':attribute не правильная дата.',
    'date_format'          => ':attribute не соответствует формату :format.',
    'different'            => ':attribute и :other должны быть различны.',
    'digits'               => ':attribute должен содержать :digits цифр.',
    'digits_between'       => ':attribute должен быть от :min до :max цифр.',
    'email'                => ':attribute должен быть валидным e-mail адресом.',
    'exists'               => 'Выбранный :attribute является недействительным.',
    'filled'               => ':attribute обяхательно для заполнения.',
    'image'                => ':attribute должно быть изображением',
    'in'                   => ':attribute является недействительным',
    'integer'              => ':attribute должен быть числом',
    'ip'                   => ':attribute должен быть валидным IP',
    'json'                 => ':attribute должен бить валидной JSON строкой',
    'max' => [
		'numeric' => ':attribute должен быть больше :max.',
		'file' => ':attribute должен быть больше :max КБ.',
		'string' => ':attribute должен быть больше :max символов.',
		'array' => ' :attribute должен содержать :max полей.',
	],
	'mimes' => ':attribute должен быть файлом типа: :values.',
	'min' => [
	'numeric' => ':attribute должен быть меньше :min.',
	'file' => ':attribute должен быть меньше :min КБ.',
	'string' => ':attribute должен быть меньше :min символов.',
	'array' => ':attribute должен содержать меньше :min items.',
	],
	'not_in' => ' :attribute не существует.',
	'numeric' => ':attribute должен быть числом.',
	'regex' => ':attribute имеет не правильный формат.',
	'required' => ':attribute обязательно для заполнения.',
	'required_if' => ':attribute обязательно для заполнения, когда :other имеет значение :value.',
	'required_unless' => ':attribute не требуется, если :other имеет значение :values.',
	'required_with' => ':attribute обязательно для заполнения, когда :values существует.',
	'required_with_all' => ':attribute поле обязательно для заполнения, когда :values существует.',
	'required_without' => ':attribute поле обязательно для заполения, когда :values не существует.',
	'required_without_all' => ':attribute поле обязательно для заполнения, когда одно из значений :values существует.',
	'same' => ':attribute и :other должны совпадать.',
	'size' => [
	'numeric' => ':attribute должен занимать :size.',
	'file' => ':attribute должен занимать :size КБ.',
	'string' => ':attribute должен занимать :size символов.',
	'array' => ':attribute должен содержать :size полей.',
	],
	'string' => ':attribute должно быть строкой.',
	'timezone' => ':attribute должен соответствовать зоне.',
	'unique' => ':attribute уже используется.',
	'url' => ':attribute имеет неправильный формат.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
