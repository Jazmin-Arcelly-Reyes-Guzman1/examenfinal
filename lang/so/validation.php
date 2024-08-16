<?php

declare(strict_types=1);

return [
    'accepted'             => ':attribute ka waa in la aqbalo.',
    'accepted_if'          => ':attributeka waa in la aqbalaa marka :other ay tahay :value.',
    'active_url'           => ':attributeku maaha URL sax ah',
    'after'                => ':attributeku waa inay ahaadaan taariikh ka dib :date.',
    'after_or_equal'       => ':attributeku waa inay ahaadaan taariikh ka dambaysa ama la mid ah :date.',
    'alpha'                => ':attributeka waa in ay ka kooban yihiin xarfo.',
    'alpha_dash'           => ':attributeka waa in ay ka kooban yihiin xarfo, tirooyin, xariijimo iyo hoosta.',
    'alpha_num'            => ':attributeka waa in ay ka kooban yihiin xarfo iyo lambaro.',
    'array'                => ':attributeka waa in ay ahaadaan array.',
    'ascii'                => 'Goobta :attributeka ah waa in ay ka kooban tahay hal-byte xarfo iyo calaamado alif tiro ah.',
    'before'               => ':attributeku waa inay ahaadaan taariikh ka hor :date.',
    'before_or_equal'      => ':attributeku waa inay ahaadaan taariikh ka horeysa ama la mid ah :date.',
    'between'              => [
        'array'   => ':attributeka waa inay lahaadaan inta u dhaxaysa :min iyo :max shay.',
        'file'    => ':attribute ka waa inuu u dhexeeyaa :min iyo :max kilobytes.',
        'numeric' => ':attribute ka waa inay u dhexeeyaan :min iyo :max.',
        'string'  => ':attributeka waa in ay u dhexeeyaan :min iyo :max xaraf.',
    ],
    'boolean'              => ':attributeka goobood waa inay run ama been ahaadaan.',
    'can'                  => 'Goobta :attribute ka waxa ku jira qiimo aan la fasixin',
    'confirmed'            => ':attributeka xaqiijinta kuma eka',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'Furaha sirta ah waa khalad',
    'date'                 => ':attributeku ma aha taariikh ansax ah.',
    'date_equals'          => ':attributeku waa inay ahaadaan taariikh u dhiganta :date.',
    'date_format'          => ':attributeku kuma habboona qaabka :format.',
    'decimal'              => ':attributeka garoon waa inuu lahaadaa :decimal jajab tobanle.',
    'declined'             => ':attributeka waa in la diidaa.',
    'declined_if'          => ':attributeka waa in la diidaa marka :other ay tahay :value.',
    'different'            => ':attribute iyo :other waa inay kala duwanaadaan.',
    'digits'               => ':attributeka waa in ay ahaadaan :digits nambar.',
    'digits_between'       => ':attributeka waa in uu u dhexeeyaa :min iyo :max nambar.',
    'dimensions'           => ':attributeku wuxuu leeyahay cabbir muuqaaleed aan sax ahayn.',
    'distinct'             => ':attributeka garoon waxa uu leeyahay qiimo nuqul ah.',
    'doesnt_end_with'      => ':attributeka garoon waa inuusan ku dhamaanin mid ka mid ah kuwan soo socda: :values.',
    'doesnt_start_with'    => ':attributeka garoon waa inuusan ku bilaaban mid ka mid ah kuwan soo socda: :values.',
    'email'                => ':attributeku waa inuu noqdaa ciwaan email sax ah',
    'ends_with'            => ':attributeka waa in ay ku dhameeyaan mid ka mid ah kuwan soo socda: :values.',
    'enum'                 => ':attributeka la doortay waa mid aan sax ahayn.',
    'exists'               => ':attributeka la doortay waa mid aan sax ahayn.',
    'extensions'           => ':attributeka garoon waa inuu lahaadaa mid ka mid ah kordhinta soo socota: :values.',
    'file'                 => ':attributeku waa inuu noqdaa fayl.',
    'filled'               => 'Goobta :attributeka ah waa in ay leedahay qiimo.',
    'gt'                   => [
        'array'   => ':attributeka waa in ay lahaadaan wax ka badan :value shay.',
        'file'    => ':attribute ka waa inuu ka badan yahay :value kilobytes.',
        'numeric' => ':attributeka waa in ay ka badan yihiin :value.',
        'string'  => ':attributeka waa in ay ka badan yihiin :value xaraf.',
    ],
    'gte'                  => [
        'array'   => ':attributeka waa in ay lahaadaan :value shay ama ka badan.',
        'file'    => ':attribute ka waa inuu ka weyn yahay ama la mid yahay :value kilobytes.',
        'numeric' => ':attributeka waa in ay ka badan yihiin ama la siman yihiin :value.',
        'string'  => ':attributeku waa inuu ka weyn yahay ama la mid yahay :value xaraf.',
    ],
    'hex_color'            => ':attributeka garoon waa inuu noqdaa midab hexadecimal sax ah.',
    'image'                => ':attributeku waa inuu noqdaa sawir.',
    'in'                   => ':attributeka la doortay waa mid aan sax ahayn.',
    'in_array'             => ':attributeka garoon kuma jiraan :other.',
    'integer'              => ':attributeku waa in uu ahaado tiro isku mid ah.',
    'ip'                   => ':attributeku waa inuu noqdaa cinwaan IP sax ah',
    'ipv4'                 => ':attributeku waa inuu noqdaa ciwaanka IPv4 ansax ah.',
    'ipv6'                 => ':attributeku waa inuu noqdaa ciwaanka IPv6 ansax ah.',
    'json'                 => ':attributeku waa inuu noqdaa xadhig JSON sax ah.',
    'list'                 => ':attributeka goobood waa in ay noqdaan liis.',
    'lowercase'            => ':attributeka goobood waa in ay ahaadaan far yar.',
    'lt'                   => [
        'array'   => ':attributeka waa in ay lahaadaan wax ka yar :value shay.',
        'file'    => ':attribute ka waa in uu ka yar yahay :value kilobytes.',
        'numeric' => ':attribute ka waa in ay ka yar yihiin :value.',
        'string'  => ':attributeka waa in ay ka yar yihiin :value xaraf.',
    ],
    'lte'                  => [
        'array'   => ':attributeka waa in aysan ka badnayn :value shay.',
        'file'    => ':attribute ka waa in uu ka yar yahay ama la mid yahay :value kilobytes.',
        'numeric' => ':attributeka waa in ay ka yaraadaan ama la siman yihiin :value.',
        'string'  => ':attributeku waa in uu ka yar yahay ama la mid yahay :value xaraf.',
    ],
    'mac_address'          => ':attributeku waa inuu noqdaa ciwaanka MAC ansax ah.',
    'max'                  => [
        'array'   => ':attributeka waa in aysan ka badnayn :max shay.',
        'file'    => ':attribute-ka waa inuusan ka badnaan :max kilobytes.',
        'numeric' => ':attributeka waa in aysan ka badneyn :max.',
        'string'  => ':attributeku waa in aanu ka badnayn :max xaraf.',
    ],
    'max_digits'           => ':attributeka garoon waa in aanu ka badnayn :max nambar.',
    'mimes'                => ':attributeku waa inuu noqdaa fayl noocaan ah: :values.',
    'mimetypes'            => ':attributeku waa inuu noqdaa fayl noocaan ah: :values.',
    'min'                  => [
        'array'   => ':attributeka waa in ay lahaadaan ugu yaraan :min shay.',
        'file'    => ':attribute ka waa inuu ahaadaa ugu yaraan :min kilobytes.',
        'numeric' => ':attributeka waa in ay ahaadaan ugu yaraan :min.',
        'string'  => ':attributeka waa in ay ahaadaan ugu yaraan :min xaraf.',
    ],
    'min_digits'           => ':attributeka garoon waa inuu lahaadaa ugu yaraan :min nambar.',
    'missing'              => ':attributeka garoon waa in la waayo.',
    'missing_if'           => ':attributeka garoon waa in la waayo marka :other ay tahay :value.',
    'missing_unless'       => ':attributeka garoon waa inuu maqan yahay ilaa :other aysan ahayn :value.',
    'missing_with'         => ':attributeka garoon waa in la waayo marka :values ay joogaan.',
    'missing_with_all'     => ':attributeka garoon waa in la waayo marka :values ay joogaan.',
    'multiple_of'          => ':attributeka waa in ay ahaadaan isku dhufasho :value ah.',
    'not_in'               => ':attributeka la doortay waa mid aan sax ahayn.',
    'not_regex'            => ':attributeka qaab waa mid aan sax ahayn',
    'numeric'              => ':attributeku waa inuu noqdaa tiro.',
    'password'             => [
        'letters'       => 'Goobta :attributeka ah waa in ay ka kooban tahay ugu yaraan hal xaraf.',
        'mixed'         => 'Goobta :attributeka ah waa in ay ka kooban tahay ugu yaraan hal xaraf oo waaweyn iyo hal xaraf oo yar.',
        'numbers'       => ':attributeka garoon waa in uu ka kooban yahay ugu yaraan hal lambar.',
        'symbols'       => ':attributeka garoon waa in uu ka kooban yahay ugu yaraan hal calaamad.',
        'uncompromised' => ':attribute-ka la siiyay ayaa ka soo muuqday daadinta xogta. Fadlan dooro :attribute ka duwan',
    ],
    'present'              => ':attributeka garoon waa in ay joogaan.',
    'present_if'           => ':attributeka garoon waa in ay joogaan marka :other ay tahay :value.',
    'present_unless'       => ':attributeka goobood waa inay joogaan ilaa :other aysan ahayn :value.',
    'present_with'         => ':attributeka garoon waa in ay joogaan marka :values ay joogaan.',
    'present_with_all'     => ':attributeka garoon waa in ay joogaan marka :values ay joogaan.',
    'prohibited'           => ':attributeka garoon waa mamnuuc.',
    'prohibited_if'        => ':attributeka goobood waa mamnuuc marka :otherku yahay :value.',
    'prohibited_unless'    => ':attributeka garoon waa mamnuuc ilaa :other ay ku jiraan :values.',
    'prohibits'            => ':attribute-ka goobood waxay mamnuucday :other inay joogaan.',
    'regex'                => ':attributeka qaab waa mid aan sax ahayn',
    'required'             => ':attribute ka garoonka ayaa loo baahan yahay.',
    'required_array_keys'  => ':attributeka goobood waa in ay ka kooban yihiin qoraalo loogu talagalay: :values.',
    'required_if'          => ':attributeka garoon ayaa loo baahan yahay marka :other ay tahay :value.',
    'required_if_accepted' => ':attribute ka garoonka ayaa loo baahan yahay marka :other la aqbalo.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => ':attributeka garoon ayaa loo baahan yahay ilaa :other ay ku jiraan :values.',
    'required_with'        => ':attributeka garoonka ayaa loo baahan yahay marka :values ay joogaan.',
    'required_with_all'    => ':attributeka garoonka ayaa loo baahan yahay marka :values ay joogaan.',
    'required_without'     => ':attributeka garoonka ayaa loo baahan yahay marka :values aysan joogin.',
    'required_without_all' => ':attributeka goobood ayaa loo baahan yahay marka :values midna aanu joogin.',
    'same'                 => ':attribute iyo :other waa inay iswaafaqaan.',
    'size'                 => [
        'array'   => ':attributeka waa in ay ka kooban yihiin :size shay.',
        'file'    => ':attribute ka waa inuu ahaadaa :size kilobytes.',
        'numeric' => ':attributeka waa inay ahaadaan :size.',
        'string'  => ':attributeku waa inay ahaadaan :size xaraf.',
    ],
    'starts_with'          => ':attributeka waa inay ku bilowdaan mid ka mid ah kuwan soo socda: :values.',
    'string'               => ':attributeku waa inuu ahaado xadhig.',
    'timezone'             => ':attributeku waa inay ahaadaan aag wakhti sax ah.',
    'ulid'                 => ':attributeka garoon waa in uu ahaado ULID sax ah.',
    'unique'               => ':attribute kii hore ayaa loo qaatay.',
    'uploaded'             => ':attributekii ayaa ku guul daraystay in ay soo geliyaan',
    'uppercase'            => ':attributeka goobood waa in ay ahaadaan kuwa waaweyn.',
    'url'                  => ':attributeku waa inuu noqdaa URL sax ah.',
    'uuid'                 => ':attributeku waa inay ahaadaan UUID sax ah.',
    'attributes'           => [
        'address'                  => 'ciwaanka',
        'affiliate_url'            => 'URL xiriir la leh',
        'age'                      => 'da\'da',
        'amount'                   => 'qaddarka',
        'announcement'             => 'ogeysiis',
        'area'                     => 'aagga',
        'audience_prize'           => 'abaalmarinta daawadayaasha',
        'available'                => 'la heli karo',
        'birthday'                 => 'dhalasho',
        'body'                     => 'jir',
        'city'                     => 'magaalada',
        'compilation'              => 'ururin',
        'concept'                  => 'fikradda',
        'conditions'               => 'shuruudaha',
        'content'                  => 'nuxurka',
        'country'                  => 'dalka',
        'cover'                    => 'daboolid',
        'created_at'               => 'abuuray at',
        'creator'                  => 'abuure',
        'currency'                 => 'lacag',
        'current_password'         => 'Magaca Sirta Hadda',
        'customer'                 => 'macmiilka',
        'date'                     => 'taariikhda',
        'date_of_birth'            => 'Taariikhda Dhalashada',
        'dates'                    => 'taariikhaha',
        'day'                      => 'maalin',
        'deleted_at'               => 'la tirtiray at',
        'description'              => 'sharaxaad',
        'display_type'             => 'nooca bandhiga',
        'district'                 => 'degmada',
        'duration'                 => 'muddada',
        'email'                    => 'iimaylka',
        'excerpt'                  => 'qaybsanaan',
        'filter'                   => 'filter',
        'finished_at'              => 'ku dhammaatay',
        'first_name'               => 'magaca hore',
        'gender'                   => 'jinsiga',
        'grand_prize'              => 'abaal-marin weyn',
        'group'                    => 'koox',
        'hour'                     => 'saac',
        'image'                    => 'sawir',
        'image_desktop'            => 'sawirka miiska',
        'image_main'               => 'sawirka ugu muhiimsan',
        'image_mobile'             => 'sawirka mobilada',
        'images'                   => 'sawiro',
        'is_audience_winner'       => 'waa guulaystaha dhagaystayaasha',
        'is_hidden'                => 'waa qarsoon',
        'is_subscribed'            => 'waa la isku qoray',
        'is_visible'               => 'waa la arki karaa',
        'is_winner'                => 'waa guulaysta',
        'items'                    => 'alaabta',
        'key'                      => 'furaha',
        'last_name'                => 'magaca dambe',
        'lesson'                   => 'cashar',
        'line_address_1'           => 'ciwaanka khadka 1',
        'line_address_2'           => 'ciwaanka khadka 2',
        'login'                    => 'soo gal',
        'message'                  => 'fariinta',
        'middle_name'              => 'magaca dhexe',
        'minute'                   => 'daqiiqo',
        'mobile'                   => 'mobilada',
        'month'                    => 'bil',
        'name'                     => 'magac',
        'national_code'            => 'xeerka qaranka',
        'number'                   => 'tirada',
        'password'                 => 'erayga sirta ah',
        'password_confirmation'    => 'xaqiijinta erayga sirta ah',
        'phone'                    => 'telefoonka',
        'photo'                    => 'sawir',
        'portfolio'                => 'portfolio',
        'postal_code'              => 'lambarka boostada',
        'preview'                  => 'horudhac',
        'price'                    => 'qiimo',
        'product_id'               => 'Aqoonsiga alaabta',
        'product_uid'              => 'alaabta UID',
        'product_uuid'             => 'alaabta UUID',
        'promo_code'               => 'code promo',
        'province'                 => 'gobolka',
        'quantity'                 => 'tiro',
        'reason'                   => 'sabab',
        'recaptcha_response_field' => 'goobta jawaabta recaptcha',
        'referee'                  => 'garsoore',
        'referees'                 => 'garsoorayaasha',
        'reject_reason'            => 'diid sababta',
        'remember'                 => 'xasuuso',
        'restored_at'              => 'soo celiyay at',
        'result_text_under_image'  => 'qoraalka natiijada sawirka hoostiisa',
        'role'                     => 'door',
        'rule'                     => 'xeer',
        'rules'                    => 'xeerar',
        'second'                   => 'labaad',
        'sex'                      => 'galmada',
        'shipment'                 => 'shixnadda',
        'short_text'               => 'qoraal gaaban',
        'size'                     => 'cabbirka',
        'skills'                   => 'xirfado',
        'slug'                     => 'caajisnimo',
        'specialization'           => 'takhasus',
        'started_at'               => 'ka bilaabay',
        'state'                    => 'gobol',
        'status'                   => 'heerka',
        'street'                   => 'waddo',
        'student'                  => 'arday',
        'subject'                  => 'mowduuca',
        'tag'                      => 'tag',
        'tags'                     => 'tags',
        'teacher'                  => 'macalinka',
        'terms'                    => 'shuruudaha',
        'test_description'         => 'sharaxaada imtixaanka',
        'test_locale'              => 'deegaanka tijaabi',
        'test_name'                => 'magaca imtixaanka',
        'text'                     => 'qoraal',
        'time'                     => 'waqti',
        'title'                    => 'horyaalka',
        'type'                     => 'nooca',
        'updated_at'               => 'updated at',
        'user'                     => 'isticmaale',
        'username'                 => 'username',
        'value'                    => 'qiimaha',
        'year'                     => 'sanad',
    ],
];