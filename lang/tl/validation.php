<?php

declare(strict_types=1);

return [
    'accepted'             => 'Ang :attribute ay dapat tanggapin.',
    'accepted_if'          => 'Ang :attribute ay dapat tanggapin kapag ang :other ay :value.',
    'active_url'           => 'Ang :attribute ay hindi balidong URL.',
    'after'                => 'Ang :attribute ay dapat petsa pagkatapos ng :date.',
    'after_or_equal'       => 'Ang :attribute ay dapat na isang petsa pagkatapos o katumbas ng :date.',
    'alpha'                => 'Ang :attribute ay maaaring magtaglay ng mga letra lang.',
    'alpha_dash'           => 'Ang :attribute ay maaaring magtaglay ng mga letra, numero at gitling lang.',
    'alpha_num'            => 'Ang :attribute ay maaaring magtaglay ng mga letra at numero lang.',
    'array'                => 'Ang :attribute ay dapat magkakasunod.',
    'ascii'                => 'Ang :attribute ay dapat lamang maglaman ng mga single-byte na alphanumeric na character at simbolo.',
    'before'               => 'Ang :attribute ay dapat petsa bago ang :date.',
    'before_or_equal'      => 'Ang :attribute ay dapat na isang petsa bago o katumbas ng :date.',
    'between'              => [
        'array'   => 'Ang :attribute ay dapat nasa pagitan ng :min at :max items.',
        'file'    => 'Ang :attribute ay dapat nasa pagitan ng :min at :max kilobytes.',
        'numeric' => 'Ang :attribute ay dapat nasa pagitan ng :min at :max.',
        'string'  => 'Ang :attribute ay dapat nasa pagitan ng :min at :max characters.',
    ],
    'boolean'              => 'Ang :attribute ng attribute ay dapat tama o mali.',
    'can'                  => 'Ang :attribute field ay naglalaman ng hindi awtorisadong halaga.',
    'confirmed'            => 'Ang :attribute ng attribute ay hindi magkatugma.',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'Mali ang password.',
    'date'                 => 'Ang :attribute ay hindi balidong petsa.',
    'date_equals'          => ':Attribute ay dapat na isang petsa na katumbas ng :date.',
    'date_format'          => 'Ang :attribute ay hindi katugma ng format :format.',
    'decimal'              => 'Ang :attribute ay dapat mayroong :decimal decimal na lugar.',
    'declined'             => 'Dapat tanggihan ang :attribute.',
    'declined_if'          => 'Ang :attribute ay dapat tanggihan kapag ang :other ay :value.',
    'different'            => 'Ang :attribute at :other pa ay dapat magkaiba.',
    'digits'               => 'Ang :attribute ay dapat :digits digits.',
    'digits_between'       => 'Ang :attribute ay dapat nasa pagitan ng :min at :max digits.',
    'dimensions'           => 'Ang :attribute ay may di-wastong sukat ng imahe.',
    'distinct'             => 'Ang :attribute ng attribute ay may katulad na balyu.',
    'doesnt_end_with'      => 'Ang :attribute ay maaaring hindi magtapos sa isa sa mga sumusunod: :values.',
    'doesnt_start_with'    => 'Ang :attribute ay maaaring hindi magsimula sa isa sa mga sumusunod: :values.',
    'email'                => 'Ang :attribute ay dapat balidong email address.',
    'ends_with'            => ':Attribute ang dapat magtapos sa isa sa mga sumusunod: :values.',
    'enum'                 => 'Ang napiling :attribute ay hindi wasto.',
    'exists'               => 'Ang piniling :attribute ay imbalido.',
    'extensions'           => 'Ang :attribute field ay dapat may isa sa mga sumusunod na extension: :values.',
    'file'                 => 'Ang :attribute ay dapat na isang talaksan.',
    'filled'               => 'Ang :attribute ng attribute ay kailangan.',
    'gt'                   => [
        'array'   => 'Ang :attribute ay dapat magkaroon ng higit sa :value mga item.',
        'file'    => 'Ang :attribute ay dapat na higit sa :value kilobytes.',
        'numeric' => 'Ang :attribute ay dapat na higit sa :value.',
        'string'  => 'Ang :attribute ay dapat na higit sa :value character.',
    ],
    'gte'                  => [
        'array'   => 'Ang :attribute ay dapat magkaroon ng :value item o higit pa.',
        'file'    => 'Ang :attribute ay dapat na mas malaki sa o katumbas ng :value kilobytes.',
        'numeric' => 'Ang :attribute ay dapat na mas malaki sa o katumbas ng :value.',
        'string'  => 'Ang :attribute ay dapat na mas malaki sa o katumbas ng :value character.',
    ],
    'hex_color'            => 'Ang :attribute field ay dapat na isang wastong hexadecimal na kulay.',
    'image'                => 'Ang :attribute ay dapat isang imahe.',
    'in'                   => 'Ang piniling :attribute ay imbalido.',
    'in_array'             => 'Ang :attribute ng attribute ay wala sa :other.',
    'integer'              => 'Ang :attribute ay dapat isang integer.',
    'ip'                   => 'Ang :attribute ay dapat isang balidong IP address.',
    'ipv4'                 => 'Ang :attribute ay dapat na isang wastong Ipbagong address.',
    'ipv6'                 => 'Ang :attribute ay dapat na isang balidong Ipbagong address.',
    'json'                 => 'Ang :attribute ay dapat isang balidong JSON string.',
    'list'                 => 'Ang :attribute field ay dapat na isang listahan.',
    'lowercase'            => 'Dapat lowercase ang :attribute.',
    'lt'                   => [
        'array'   => 'Ang :attribute ay dapat magkaroon ng mas mababa sa :value na mga item.',
        'file'    => 'Ang :attribute ay dapat na mas mababa sa :value kilobytes.',
        'numeric' => 'Ang :attribute ay dapat na mas mababa sa :value.',
        'string'  => 'Dapat mas mababa sa :value character ang :attribute.',
    ],
    'lte'                  => [
        'array'   => 'Ang :attribute ay hindi dapat magkaroon ng higit sa :value mga item.',
        'file'    => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value kilobytes.',
        'numeric' => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value.',
        'string'  => 'Ang :attribute ay dapat mas mababa sa o katumbas ng :value character.',
    ],
    'mac_address'          => 'Ang :attribute ay dapat na isang wastong MAC address.',
    'max'                  => [
        'array'   => 'Ang :attribute ay hindi maaaring higit sa :max items.',
        'file'    => 'Ang :attribute ay hindi maaaring higit sa  :max kilobytes.',
        'numeric' => 'Ang :attribute ay hindi maaaring higit sa  :max.',
        'string'  => 'Ang :attribute ay hindi maaaring higit sa :max characters.',
    ],
    'max_digits'           => 'Ang :attribute ay hindi dapat magkaroon ng higit sa :max na mga numero.',
    'mimes'                => 'Ang :attribute ay dapat file ng uri na: :values.',
    'mimetypes'            => 'Ang :attribute ay dapat na isang talaksan ng uri: :values.',
    'min'                  => [
        'array'   => 'Ang :attribute ay dapat di-kukulangin sa :min items.',
        'file'    => 'Ang :attribute ay dapat di-kukulangin sa :min kilobytes.',
        'numeric' => 'Ang :attribute ay dapat di-kukulangin sa :min.',
        'string'  => 'Ang :attribute ay dapat di-kukulangin sa :min characters.',
    ],
    'min_digits'           => 'Ang :attribute ay dapat magkaroon ng hindi bababa sa :min digit.',
    'missing'              => 'Dapat nawawala ang :attribute field.',
    'missing_if'           => 'Dapat na nawawala ang :attribute field kapag ang :other ay :value.',
    'missing_unless'       => 'Dapat na nawawala ang :attribute field maliban kung ang :other ay :value.',
    'missing_with'         => 'Dapat nawawala ang :attribute field kapag :values ang naroroon.',
    'missing_with_all'     => 'Dapat na nawawala ang :attribute field kapag :values ang naroroon.',
    'multiple_of'          => 'Ang :attribute ay dapat na maramihang ng :value',
    'not_in'               => 'Ang piniling :attribute ay imbalido.',
    'not_regex'            => 'Hindi tanggap ang :attribute na anyo.',
    'numeric'              => 'Ang :attribute ay dapat isang numero.',
    'password'             => [
        'letters'       => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang titik.',
        'mixed'         => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang malaking titik at isang maliit na titik.',
        'numbers'       => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang numero.',
        'symbols'       => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang simbolo.',
        'uncompromised' => 'Ang ibinigay na :attribute ay lumabas sa isang data leak. Mangyaring pumili ng ibang :attribute.',
    ],
    'present'              => 'Ang :attribute ng attribute ay dapat naroon.',
    'present_if'           => 'Ang :attribute field ay dapat naroroon kapag ang :other ay :value.',
    'present_unless'       => 'Ang :attribute field ay dapat naroroon maliban kung ang :other ay :value.',
    'present_with'         => 'Ang :attribute field ay dapat naroroon kapag :values ang naroroon.',
    'present_with_all'     => 'Ang :attribute field ay dapat naroroon kapag :values ang naroroon.',
    'prohibited'           => 'Ang patlang na :attribute ay ipinagbabawal.',
    'prohibited_if'        => 'Ang :attribute patlang ay ipinagbabawal kapag :other ay :value.',
    'prohibited_unless'    => 'Ang :attribute patlang ay ipinagbabawal maliban kung :other ay nasa :values.',
    'prohibits'            => 'Ang :attribute field ay nagbabawal sa :other na makasama.',
    'regex'                => 'Ang :attribute ng attribute ay imbalido.',
    'required'             => 'Ang :attribute ng attribute ay kailangan.',
    'required_array_keys'  => 'Ang :attribute field ay dapat maglaman ng mga entry para sa: :values.',
    'required_if'          => 'Ang :attribute ng attribute ay kailangan kapag :other iba ay :value.',
    'required_if_accepted' => 'Ang :attribute field ay kinakailangan kapag :other ay tinanggap.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => 'Ang :attribute ng attribute ay kailangan maliban kung :other iba ay nasa :values.',
    'required_with'        => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_with_all'    => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_without'     => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_without_all' => 'Ang :attribute ng attribute ay kailangan kapag wala sa :values balyu ang naroon.',
    'same'                 => 'Ang :attribute at :other pa ay dapat magtugma.',
    'size'                 => [
        'array'   => 'Ang :attribute ay dapat magtaglay ng :size sa items.',
        'file'    => 'Ang :attribute ay dapat :size sukat sa kilobytes.',
        'numeric' => 'Ang :attribute ay dapat :size sukat.',
        'string'  => 'Ang :attribute ay dapat :size sukat sa characters.',
    ],
    'starts_with'          => 'Ang :attribute ay dapat magsimula sa isa sa mga sumusunod: :values.',
    'string'               => 'Ang  :attribute ay dapat isang string.',
    'timezone'             => 'Ang :attribute ay dapat isang balidong sona.',
    'ulid'                 => 'Ang :attribute ay dapat na isang wastong ULID.',
    'unique'               => 'Ang :attribute ay nakuha na.',
    'uploaded'             => 'Nabigo ang :attribute upang i-upload.',
    'uppercase'            => 'Ang :attribute ay dapat na uppercase.',
    'url'                  => 'Ang :attribute ng attribute ay imbalido.',
    'uuid'                 => ':Attribute ay dapat na isang wastong UUID.',
    'attributes'           => [
        'address'                  => 'address',
        'affiliate_url'            => 'kaakibat na URL',
        'age'                      => 'edad',
        'amount'                   => 'halaga',
        'announcement'             => 'anunsyo',
        'area'                     => 'lugar',
        'audience_prize'           => 'premyo ng madla',
        'available'                => 'magagamit',
        'birthday'                 => 'kaarawan',
        'body'                     => 'katawan',
        'city'                     => 'lungsod',
        'compilation'              => 'compilation',
        'concept'                  => 'konsepto',
        'conditions'               => 'kundisyon',
        'content'                  => 'nilalaman',
        'country'                  => 'bansa',
        'cover'                    => 'takip',
        'created_at'               => 'nilikha sa',
        'creator'                  => 'manlilikha',
        'currency'                 => 'pera',
        'current_password'         => 'kasalukuyang password',
        'customer'                 => 'customer',
        'date'                     => 'petsa',
        'date_of_birth'            => 'araw ng kapanganakan',
        'dates'                    => 'petsa',
        'day'                      => 'araw',
        'deleted_at'               => 'tinanggal sa',
        'description'              => 'paglalarawan',
        'display_type'             => 'uri ng display',
        'district'                 => 'distrito',
        'duration'                 => 'tagal',
        'email'                    => 'email',
        'excerpt'                  => 'sipi',
        'filter'                   => 'salain',
        'finished_at'              => 'natapos sa',
        'first_name'               => 'pangalan',
        'gender'                   => 'kasarian',
        'grand_prize'              => 'malaking premyo',
        'group'                    => 'pangkat',
        'hour'                     => 'oras',
        'image'                    => 'imahe',
        'image_desktop'            => 'larawan sa desktop',
        'image_main'               => 'pangunahing larawan',
        'image_mobile'             => 'mobile na imahe',
        'images'                   => 'mga larawan',
        'is_audience_winner'       => 'ay nagwagi sa madla',
        'is_hidden'                => 'ay nakatago',
        'is_subscribed'            => 'ay naka-subscribe',
        'is_visible'               => 'ay nakikita',
        'is_winner'                => 'ay nagwagi',
        'items'                    => 'mga bagay',
        'key'                      => 'susi',
        'last_name'                => 'huling pangalan',
        'lesson'                   => 'aralin',
        'line_address_1'           => 'address ng linya 1',
        'line_address_2'           => 'address ng linya 2',
        'login'                    => 'mag log in',
        'message'                  => 'mensahe',
        'middle_name'              => 'Gitnang pangalan',
        'minute'                   => 'minuto',
        'mobile'                   => 'mobile',
        'month'                    => 'buwan',
        'name'                     => 'pangalan',
        'national_code'            => 'pambansang kodigo',
        'number'                   => 'numero',
        'password'                 => 'password',
        'password_confirmation'    => 'pagkumpirma ng password',
        'phone'                    => 'telepono',
        'photo'                    => 'larawan',
        'portfolio'                => 'portfolio',
        'postal_code'              => 'postal code',
        'preview'                  => 'silipin',
        'price'                    => 'presyo',
        'product_id'               => 'ID ng produkto',
        'product_uid'              => 'UID ng produkto',
        'product_uuid'             => 'produkto UUID',
        'promo_code'               => 'promo code',
        'province'                 => 'lalawigan',
        'quantity'                 => 'dami',
        'reason'                   => 'dahilan',
        'recaptcha_response_field' => 'recaptcha na field ng tugon',
        'referee'                  => 'referee',
        'referees'                 => 'mga referee',
        'reject_reason'            => 'tanggihan ang dahilan',
        'remember'                 => 'Tandaan',
        'restored_at'              => 'naibalik sa',
        'result_text_under_image'  => 'resultang teksto sa ilalim ng imahe',
        'role'                     => 'papel',
        'rule'                     => 'tuntunin',
        'rules'                    => 'mga tuntunin',
        'second'                   => 'pangalawa',
        'sex'                      => 'kasarian',
        'shipment'                 => 'pagpapadala',
        'short_text'               => 'maikling teksto',
        'size'                     => 'laki',
        'skills'                   => 'kasanayan',
        'slug'                     => 'banatan',
        'specialization'           => 'espesyalisasyon',
        'started_at'               => 'nagsimula sa',
        'state'                    => 'estado',
        'status'                   => 'katayuan',
        'street'                   => 'kalye',
        'student'                  => 'mag-aaral',
        'subject'                  => 'paksa',
        'tag'                      => 'tag',
        'tags'                     => 'mga tag',
        'teacher'                  => 'guro',
        'terms'                    => 'mga tuntunin',
        'test_description'         => 'subok na paglalarawan',
        'test_locale'              => 'wika',
        'test_name'                => 'subok na pangalan',
        'text'                     => 'text',
        'time'                     => 'oras',
        'title'                    => 'pamagat',
        'type'                     => 'uri',
        'updated_at'               => 'na-update sa',
        'user'                     => 'gumagamit',
        'username'                 => 'username',
        'value'                    => 'halaga',
        'year'                     => 'taon',
    ],
];