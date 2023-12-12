<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
    | メッセージです。サイズルールのようにいくつかのバリデーションを
    | 持っているものもあります。メッセージはご自由に調整してください。
    |
    */

    'accepted'             => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url'           => ':attributeが有効なURLではありません。',
    'after'                => ':attributeには、:dateより後の日付を指定してくださいね！',
    'after_or_equal'       => ':attributeには、:date以降の日付を指定してくださいね！',
    'alpha'                => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash'           => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます。',
    'alpha_num'            => ':attributeはアルファベット数字がご利用できます。',
    'array'                => ':attributeは配列でなくてはなりません。',
    'before'               => ':attributeには、:dateより前の日付をご利用ください。',
    'before_or_equal'      => ':attributeには、:date以前の日付をご利用ください。',
    'between'              => [
        'numeric' => ':attributeは、:minから:maxの間で指定してくださいね！',
        'file'    => ':attributeは、:min kBから、:max kBの間で指定してくださいね！',
        'string'  => ':attributeは、:min文字から、:max文字の間で指定してくださいね！',
        'array'   => ':attributeは、:min個から:max個の間で指定してくださいね！',
    ],
    'boolean'              => ':attributeは、trueかfalseを指定してくださいね！',
    'confirmed'            => ':attributeと、確認フィールドとが、一致していません。',
    'current_password'     => 'パスワードが正しくありません。',
    'date'                 => ':attributeには有効な日付を指定してくださいね！',
    'date_equals'          => ':attributeには、:dateと同じ日付けを指定してくださいね！',
    'date_format'          => ':attributeは:format形式で指定してくださいね！',
    'different'            => ':attributeと:otherには、異なった内容を指定してくださいね！',
    'digits'               => ':attributeは:digits桁で指定してくださいね！',
    'digits_between'       => ':attributeは:min桁から:max桁の間で指定してくださいね！',
    'dimensions'           => ':attributeの図形サイズが正しくありません。',
    'distinct'             => ':attributeには異なった値を指定してくださいね！',
    'email'                => ':attributeには、有効なメールアドレスを指定してくださいね！',
    'ends_with'            => ':attributeには、:valuesのどれかで終わる値を指定してくださいね！',
    'exists'               => '選択された:attributeは正しくありません。',
    'file'                 => ':attributeにはファイルを指定してくださいね！',
    'filled'               => ':attributeに値を指定してくださいね！',
    'gt'                   => [
        'numeric' => ':attributeには、:valueより大きな値を指定してくださいね！',
        'file'    => ':attributeには、:value kBより大きなファイルを指定してくださいね！',
        'string'  => ':attributeは、:value文字より長く指定してくださいね！',
        'array'   => ':attributeには、:value個より多くのアイテムを指定してくださいね！',
    ],
    'gte'                  => [
        'numeric' => ':attributeには、:value以上の値を指定してくださいね！',
        'file'    => ':attributeには、:value kB以上のファイルを指定してくださいね！',
        'string'  => ':attributeは、:value文字以上で指定してくださいね！',
        'array'   => ':attributeには、:value個以上のアイテムを指定してくださいね！',
    ],
    'image'                => ':attributeには画像ファイルを指定してくださいね！',
    'in'                   => '選択された:attributeは正しくありません。',
    'in_array'             => ':attributeには:otherの値を指定してくださいね！',
    'integer'              => ':attributeは整数で指定してくださいね！',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してくださいね！',
    'ipv4'                 => ':attributeには、有効なIPv4アドレスを指定してくださいね！',
    'ipv6'                 => ':attributeには、有効なIPv6アドレスを指定してくださいね！',
    'json'                 => ':attributeには、有効なJSON文字列を指定してくださいね！',
    'lt'                   => [
        'numeric' => ':attributeには、:valueより小さな値を指定してくださいね！',
        'file'    => ':attributeには、:value kBより小さなファイルを指定してくださいね！',
        'string'  => ':attributeは、:value文字より短く指定してくださいね！',
        'array'   => ':attributeには、:value個より少ないアイテムを指定してくださいね！',
    ],
    'lte'                  => [
        'numeric' => ':attributeには、:value以下の値を指定してくださいね！',
        'file'    => ':attributeには、:value kB以下のファイルを指定してくださいね！',
        'string'  => ':attributeは、:value文字以下で指定してくださいね！',
        'array'   => ':attributeには、:value個以下のアイテムを指定してくださいね！',
    ],
    'max'                  => [
        'numeric' => ':attributeには、:max以下の数字を指定してくださいね！',
        'file'    => ':attributeには、:max kB以下のファイルを指定してくださいね！',
        'string'  => ':attributeは、:max文字以下で指定してくださいね！',
        'array'   => ':attributeは:max個以下指定してくださいね！',
    ],
    'mimes'                => ':attributeには:valuesタイプのファイルを指定してくださいね！',
    'mimetypes'            => ':attributeには:valuesタイプのファイルを指定してくださいね！',
    'min'                  => [
        'numeric' => ':attributeには、:min以上の数字を指定してくださいね！',
        'file'    => ':attributeには、:min kB以上のファイルを指定してくださいね！',
        'string'  => ':attributeは、:min文字以上で指定してくださいね！',
        'array'   => ':attributeは:min個以上指定してくださいね！',
    ],
    'multiple_of' => ':attributeには、:valueの倍数を指定してくださいね！',
    'not_in'               => '選択された:attributeは正しくありません。',
    'not_regex'            => ':attributeの形式が正しくありません。',
    'numeric'              => ':attributeには、数字を指定してくださいね！',
    'password'             => '正しいパスワードを指定してくださいね！',
    'present'              => ':attributeが存在していません。',
    'regex'                => ':attributeに正しい形式を指定してくださいね！',
    'required'             => ':attributeは必ず指定してくださいね！',
    'required_if'          => ':otherが:valueの場合、:attributeも指定してくださいね！',
    'required_unless'      => ':otherが:valuesでない場合、:attributeを指定してくださいね！',
    'required_with'        => ':valuesを指定する場合は、:attributeも指定してくださいね！',
    'required_with_all'    => ':valuesを指定する場合は、:attributeも指定してくださいね！',
    'required_without'     => ':valuesを指定しない場合は、:attributeを指定してくださいね！',
    'required_without_all' => ':valuesのどれも指定しない場合は、:attributeを指定してくださいね！',
    'prohibited'           => ':attributeは入力禁止です。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは入力禁止です。',
    'prohibited_unless'    => ':otherが:valueでない場合、:attributeは入力禁止です。',
    'prohibits'            => 'attributeは:otherの入力を禁じています。',
    'same'                 => ':attributeと:otherには同じ値を指定してくださいね！',
    'size'                 => [
        'numeric' => ':attributeは:sizeを指定してくださいね！',
        'file'    => ':attributeのファイルは、:sizeキロバイトでなくてはなりません。',
        'string'  => ':attributeは:size文字で指定してくださいね！',
        'array'   => ':attributeは:size個指定してくださいね！',
    ],
    'starts_with'          => ':attributeには、:valuesのどれかで始まる値を指定してくださいね！',
    'string'               => ':attributeは文字列を指定してくださいね！',
    'timezone'             => ':attributeには、有効なゾーンを指定してくださいね！',
    'unique'               => ':attributeの値は既に存在しています。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'url'                  => ':attributeに正しい形式を指定してくださいね！',
    'uuid'                 => ':attributeに有効なUUIDを指定してくださいね！',

    /*
    |--------------------------------------------------------------------------
    | Custom バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | "属性.ルール"の規約でキーを指定することでカスタムバリデーション
    | メッセージを定義できます。指定した属性ルールに対する特定の
    | カスタム言語行を手早く指定できます。
    |
    */

    'custom' => [
        '属性名' => [
            'ルール名' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、例えば"email"の代わりに「メールアドレス」のように、
    | 読み手にフレンドリーな表現でプレースホルダーを置き換えるために指定する
    | 言語行です。これはメッセージをよりきれいに表示するために役に立ちます。
    |
    */

    'attributes' => [
        'title' => 'タイトル',
        'date' => '日付',
        'start_time' => '開始時刻',
        'finish_time' => '終了時刻',
    ],
];