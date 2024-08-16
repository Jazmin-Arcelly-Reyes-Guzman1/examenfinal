<?php

declare(strict_types=1);

return [
    'accepted'             => ':attribute ቱ መቀበል አለባቸው.',
    'accepted_if'          => ':attributeቱ :other :value ሲሆኑ መቀበል አለባቸው።',
    'active_url'           => ':attribute ትክክለኛ URL አይደለም።',
    'after'                => ':attributeቱ ከ:date በኋላ ያለ ቀን መሆን አለባቸው።',
    'after_or_equal'       => ':attributeቱ ከ:date በኋላ ያለ ወይም እኩል የሆነ ቀን መሆን አለባቸው።',
    'alpha'                => ':attributeቱ ፊደሎችን ብቻ መያዝ አለባቸው።',
    'alpha_dash'           => ':attributeቱ ፊደሎችን፣ ቁጥሮችን፣ ሰረዞችን እና የግርጌ ማስታወሻዎችን ብቻ መያዝ አለባቸው።',
    'alpha_num'            => ':attributeቱ ፊደሎችን እና ቁጥሮችን ብቻ መያዝ አለባቸው።',
    'array'                => ':attribute ድርድር መሆን አለበት።',
    'ascii'                => 'የ :attribute መስክ ነጠላ ባይት ፊደል ቁጥራዊ ቁምፊዎችን እና ምልክቶችን ብቻ መያዝ አለበት።',
    'before'               => ':attributeቱ ከ:date በፊት ያለ ቀን መሆን አለባቸው።',
    'before_or_equal'      => ':attributeቱ ከ:date በፊት ወይም እኩል የሆነ ቀን መሆን አለባቸው።',
    'between'              => [
        'array'   => ':attribute ቱ በ:min እና በ:max እቃዎች መካከል ሊኖራቸው ይገባል።',
        'file'    => ':attribute በ :min እና :max ኪሎባይት መካከል መሆን አለበት.',
        'numeric' => ':attributeቱ በ:min እና :max መካከል መሆን አለባቸው።',
        'string'  => ':attributeቱ በ:min እና በ:max ቁምፊዎች መካከል መሆን አለባቸው።',
    ],
    'boolean'              => ':attribute መስክ እውነት ወይም ሐሰት መሆን አለበት።',
    'can'                  => ':attribute መስክ ያልተፈቀደ እሴት ይዟል።',
    'confirmed'            => ':attribute ማረጋገጫው አይዛመድም።',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'የይለፍ ቃሉ የተሳሳተ ነው።',
    'date'                 => ':attributeቱ ትክክለኛ ቀን አይደሉም።',
    'date_equals'          => ':attributeቱ ከ:date ጋር እኩል የሆነ ቀን መሆን አለባቸው።',
    'date_format'          => ':attribute ቱ ከ :format ቅርጸት ጋር አይዛመድም።',
    'decimal'              => ':attribute ሜዳው :decimal አስርዮሽ ቦታዎች ሊኖሩት ይገባል።',
    'declined'             => ':attributeቱ ውድቅ መደረግ አለባቸው።',
    'declined_if'          => ':other :value ሲሆን :attribute ውድቅ መደረግ አለበት።',
    'different'            => ':attribute እና :other የተለያዩ መሆን አለባቸው.',
    'digits'               => ':attributeቱ :digits አሃዞች መሆን አለባቸው።',
    'digits_between'       => ':attributeቱ በ:min እና በ:max አሃዞች መካከል መሆን አለባቸው።',
    'dimensions'           => ':attributeቱ ልክ ያልሆኑ የምስል ልኬቶች አሏቸው።',
    'distinct'             => ':attribute መስክ የተባዛ እሴት አለው።',
    'doesnt_end_with'      => ':attribute ሜዳው ከሚከተሉት በአንዱ ማለቅ የለበትም፡ :values.',
    'doesnt_start_with'    => ':attribute ሜዳው ከሚከተሉት በአንዱ መጀመር የለበትም፡ :values.',
    'email'                => ':attribute ትክክለኛ የኢሜይል አድራሻ መሆን አለበት።',
    'ends_with'            => ':attributeቱ ከሚከተሉት በአንዱ ማለቅ አለባቸው፡ :values.',
    'enum'                 => 'የተመረጠው :attribute ልክ ያልሆነ ነው።',
    'exists'               => 'የተመረጠው :attribute ልክ ያልሆነ ነው።',
    'extensions'           => ':attribute ሜዳው ከሚከተሉት ቅጥያዎች ውስጥ አንዱ ሊኖረው ይገባል፡ :values.',
    'file'                 => ':attribute ፋይል መሆን አለበት።',
    'filled'               => 'የ :attribute መስክ ዋጋ ሊኖረው ይገባል.',
    'gt'                   => [
        'array'   => ':attribute ቱ ከ :value በላይ እቃዎች ሊኖራቸው ይገባል.',
        'file'    => ':attribute ከ :value ኪሎባይት በላይ መሆን አለበት.',
        'numeric' => ':attribute ቱ ከ :value በላይ መሆን አለባቸው.',
        'string'  => ':attributeቱ ከ:value ቁምፊዎች በላይ መሆን አለባቸው።',
    ],
    'gte'                  => [
        'array'   => ':attribute ቱ :value እቃዎች ወይም ከዚያ በላይ ሊኖራቸው ይገባል.',
        'file'    => ':attribute ቱ ከ :value ኪሎባይት በላይ ወይም እኩል መሆን አለበት።',
        'numeric' => ':attributeቱ ከ:value በላይ ወይም እኩል መሆን አለባቸው።',
        'string'  => ':attributeቱ ከ:value ቁምፊዎች በላይ ወይም እኩል መሆን አለባቸው።',
    ],
    'hex_color'            => ':attribute ሜዳው ልክ የሆነ ሄክሳዴሲማል ቀለም መሆን አለበት።',
    'image'                => ':attribute ምስል መሆን አለበት.',
    'in'                   => 'የተመረጠው :attribute ልክ ያልሆነ ነው።',
    'in_array'             => ':attribute ሜዳው በ:other ውስጥ የለም።',
    'integer'              => ':attribute ኢንቲጀር መሆን አለበት።',
    'ip'                   => ':attribute ትክክለኛ የአይፒ አድራሻ መሆን አለበት።',
    'ipv4'                 => ':attribute ትክክለኛ IPv4 አድራሻ መሆን አለበት።',
    'ipv6'                 => ':attribute ትክክለኛ IPv6 አድራሻ መሆን አለበት።',
    'json'                 => ':attribute ትክክለኛ JSON ሕብረቁምፊ መሆን አለበት።',
    'list'                 => ':attribute መስክ ዝርዝር መሆን አለበት.',
    'lowercase'            => ':attribute ሜዳው ትንሽ ፊደል መሆን አለበት።',
    'lt'                   => [
        'array'   => ':attribute ቱ ከ :value ያነሱ እቃዎች ሊኖራቸው ይገባል.',
        'file'    => ':attribute ከ :value ኪሎባይት ያነሰ መሆን አለበት.',
        'numeric' => ':attribute ቱ ከ :value በታች መሆን አለባቸው.',
        'string'  => ':attributeቱ ከ:value ቁምፊዎች በታች መሆን አለባቸው።',
    ],
    'lte'                  => [
        'array'   => ':attribute ቱ ከ :value በላይ እቃዎች ሊኖራቸው አይገባም.',
        'file'    => ':attribute ቱ ከ :value ኪሎባይት ያነሰ ወይም እኩል መሆን አለበት.',
        'numeric' => ':attributeቱ ከ:value ያነሰ ወይም እኩል መሆን አለባቸው።',
        'string'  => ':attributeቱ ከ:value ቁምፊዎች ያነሰ ወይም እኩል መሆን አለባቸው።',
    ],
    'mac_address'          => ':attribute ትክክለኛ የማክ አድራሻ መሆን አለበት።',
    'max'                  => [
        'array'   => ':attribute ቱ ከ :max በላይ እቃዎች ሊኖራቸው አይገባም.',
        'file'    => ':attribute ቱ ከ :max ኪሎባይት በላይ መሆን የለበትም.',
        'numeric' => ':attribute ቱ ከ :max በላይ መሆን የለባቸውም.',
        'string'  => ':attributeቱ ከ:max ቁምፊዎች መብለጥ የለባቸውም።',
    ],
    'max_digits'           => 'የ :attribute መስክ ከ :max አሃዞች በላይ መሆን የለበትም.',
    'mimes'                => ':attributeቱ የፋይል አይነት መሆን አለባቸው፡ :values።',
    'mimetypes'            => ':attributeቱ የፋይል አይነት መሆን አለባቸው፡ :values።',
    'min'                  => [
        'array'   => ':attribute ቱ ቢያንስ :min እቃዎች ሊኖራቸው ይገባል.',
        'file'    => ':attribute ቢያንስ :min ኪሎባይት መሆን አለበት.',
        'numeric' => ':attribute ቱ ቢያንስ :min መሆን አለባቸው።',
        'string'  => ':attributeቱ ቢያንስ :min ቁምፊዎች መሆን አለባቸው።',
    ],
    'min_digits'           => 'የ :attribute መስክ ቢያንስ :min አሃዞች ሊኖሩት ይገባል.',
    'missing'              => ':attribute ሜዳው መጥፋት አለበት።',
    'missing_if'           => ':other :value ሲሆን :attribute ሜዳው መጥፋት አለበት።',
    'missing_unless'       => ':other :value ካልሆነ በስተቀር :attribute ሜዳው መጥፋት አለበት።',
    'missing_with'         => ':values ሲገኝ :attribute ሜዳው መጥፋት አለበት።',
    'missing_with_all'     => ':values ሲገኙ :attribute ሜዳው መጥፋት አለበት።',
    'multiple_of'          => ':attributeቱ የ:value ብዜት መሆን አለባቸው።',
    'not_in'               => 'የተመረጠው :attribute ልክ ያልሆነ ነው።',
    'not_regex'            => ':attribute ቅርጸት ልክ ያልሆነ ነው።',
    'numeric'              => ':attribute ቁጥር መሆን አለበት።',
    'password'             => [
        'letters'       => ':attribute መስኩ ቢያንስ አንድ ፊደል መያዝ አለበት።',
        'mixed'         => ':attribute መስኩ ቢያንስ አንድ ትልቅ እና አንድ ትንሽ ሆሄ መያዝ አለበት።',
        'numbers'       => ':attribute መስኩ ቢያንስ አንድ ቁጥር መያዝ አለበት።',
        'symbols'       => ':attribute ሜዳው ቢያንስ አንድ ምልክት መያዝ አለበት።',
        'uncompromised' => 'የተሰጠው :attribute በመረጃ መፍሰስ ውስጥ ታይቷል። እባክዎ የተለየ :attribute ይምረጡ።',
    ],
    'present'              => ':attribute መስክ መገኘት አለበት.',
    'present_if'           => ':attribute መስክ :other :value ሲሆን መገኘት አለበት.',
    'present_unless'       => ':other :value ካልሆነ በስተቀር :attribute ሜዳው መገኘት አለበት።',
    'present_with'         => ':attribute ሜዳው :values በሚሆንበት ጊዜ መገኘት አለበት.',
    'present_with_all'     => ':attribute ሜዳው :values በሚሆኑበት ጊዜ መገኘት አለባቸው።',
    'prohibited'           => ':attribute ሜዳው የተከለከለ ነው።',
    'prohibited_if'        => ':attribute ሜዳ የተከለከለው :other :value ሲሆን ነው።',
    'prohibited_unless'    => ':other በ :values ካልሆነ በስተቀር :attribute ሜዳው የተከለከለ ነው።',
    'prohibits'            => 'የ :attribute መስክ :other እንዳይገኙ ይከለክላል.',
    'regex'                => ':attribute ቅርጸት ልክ ያልሆነ ነው።',
    'required'             => ':attribute መስክ ያስፈልጋል.',
    'required_array_keys'  => ':attribute ሜዳው ለ፡:values ግቤቶችን መያዝ አለበት።',
    'required_if'          => ':other :value ሲሆን :attribute ሜዳ ያስፈልጋል።',
    'required_if_accepted' => ':other ተቀባይነት ሲኖረው :attribute መስክ ያስፈልጋል.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => ':other በ :values ካልሆነ በስተቀር :attribute ሜዳው ያስፈልጋል።',
    'required_with'        => ':values ሲገኝ :attribute መስክ ያስፈልጋል።',
    'required_with_all'    => ':values ሲገኙ :attribute መስክ ያስፈልጋል።',
    'required_without'     => ':values በማይገኝበት ጊዜ :attribute መስክ ያስፈልጋል.',
    'required_without_all' => 'ከ :values ውስጥ አንዱ በማይገኝበት ጊዜ :attribute ሜዳው ያስፈልጋል.',
    'same'                 => ':attribute እና :other መዛመድ አለባቸው።',
    'size'                 => [
        'array'   => ':attribute ቱ :size ንጥሎችን መያዝ አለባቸው።',
        'file'    => ':attribute ቱ :size ኪሎባይት መሆን አለበት.',
        'numeric' => ':attribute ቱ :size መሆን አለባቸው.',
        'string'  => ':attributeቱ :size ቁምፊዎች መሆን አለባቸው።',
    ],
    'starts_with'          => ':attributeቱ ከሚከተሉት በአንዱ መጀመር አለባቸው፡ :values.',
    'string'               => ':attribute ቱ ሕብረቁምፊ መሆን አለበት.',
    'timezone'             => ':attribute ትክክለኛ የሰዓት ሰቅ መሆን አለበት።',
    'ulid'                 => ':attribute መስክ ትክክለኛ ULID መሆን አለበት።',
    'unique'               => ':attribute ቱ ቀድሞውኑ ተወስዷል.',
    'uploaded'             => ':attributeቱ መጫን አልተሳካም።',
    'uppercase'            => ':attribute ሜዳው አቢይ ሆሄ መሆን አለበት።',
    'url'                  => ':attribute ትክክለኛ URL መሆን አለበት።',
    'uuid'                 => ':attributeቱ ትክክለኛ UUID መሆን አለባቸው።',
    'attributes'           => [
        'address'                  => 'አድራሻ',
        'affiliate_url'            => 'የተቆራኘ URL',
        'age'                      => 'ዕድሜ',
        'amount'                   => 'መጠን',
        'announcement'             => 'ማስታወቂያ',
        'area'                     => 'አካባቢ',
        'audience_prize'           => 'የታዳሚ ሽልማት',
        'available'                => 'ይገኛል',
        'birthday'                 => 'የልደት ቀን',
        'body'                     => 'አካል',
        'city'                     => 'ከተማ',
        'compilation'              => 'ማጠናቀር',
        'concept'                  => 'ጽንሰ-ሐሳብ',
        'conditions'               => 'ሁኔታዎች',
        'content'                  => 'ይዘት',
        'country'                  => 'ሀገር',
        'cover'                    => 'ሽፋን',
        'created_at'               => 'የተፈጠረ በ',
        'creator'                  => 'ፈጣሪ',
        'currency'                 => 'ምንዛሬ',
        'current_password'         => 'የአሁኑ ሚስጥራዊ ማለፊያ ቁልፍ',
        'customer'                 => 'ደንበኛ',
        'date'                     => 'ቀን',
        'date_of_birth'            => 'የተወለደበት ቀን',
        'dates'                    => 'ቀኖች',
        'day'                      => 'ቀን',
        'deleted_at'               => 'ተሰርዟል።',
        'description'              => 'መግለጫ',
        'display_type'             => 'የማሳያ አይነት',
        'district'                 => 'ወረዳ',
        'duration'                 => 'ቆይታ',
        'email'                    => 'ኢሜይል',
        'excerpt'                  => 'የተቀነጨበ',
        'filter'                   => 'ማጣሪያ',
        'finished_at'              => 'ላይ ጨርሷል',
        'first_name'               => 'የመጀመሪያ ስም',
        'gender'                   => 'ጾታ',
        'grand_prize'              => 'ታላቅ ሽልማት',
        'group'                    => 'ቡድን',
        'hour'                     => 'ሰአት',
        'image'                    => 'ምስል',
        'image_desktop'            => 'የዴስክቶፕ ምስል',
        'image_main'               => 'ዋና ምስል',
        'image_mobile'             => 'የሞባይል ምስል',
        'images'                   => 'ምስሎች',
        'is_audience_winner'       => 'የታዳሚ አሸናፊ ነው።',
        'is_hidden'                => 'ተደብቋል',
        'is_subscribed'            => 'ተመዝግቧል',
        'is_visible'               => 'ይታያል',
        'is_winner'                => 'አሸናፊ ነው',
        'items'                    => 'እቃዎች',
        'key'                      => 'ቁልፍ',
        'last_name'                => 'የአያት ስም',
        'lesson'                   => 'ትምህርት',
        'line_address_1'           => 'የመስመር አድራሻ 1',
        'line_address_2'           => 'የመስመር አድራሻ 2',
        'login'                    => 'ግባ',
        'message'                  => 'መልእክት',
        'middle_name'              => 'የአባት ስም',
        'minute'                   => 'ደቂቃ',
        'mobile'                   => 'ሞባይል',
        'month'                    => 'ወር',
        'name'                     => 'ስም',
        'national_code'            => 'ብሔራዊ ኮድ',
        'number'                   => 'ቁጥር',
        'password'                 => 'የይለፍ ቃል',
        'password_confirmation'    => 'የይለፍ ቃል ማረጋገጫ',
        'phone'                    => 'ስልክ',
        'photo'                    => 'ፎቶ',
        'portfolio'                => 'ፖርትፎሊዮ',
        'postal_code'              => 'የፖስታ መላኪያ ኮድ',
        'preview'                  => 'ቅድመ እይታ',
        'price'                    => 'ዋጋ',
        'product_id'               => 'የምርት መታወቂያ',
        'product_uid'              => 'የምርት UID',
        'product_uuid'             => 'ምርት UUID',
        'promo_code'               => 'የማስተዋወቂያ ኮድ',
        'province'                 => 'ክፍለ ሀገር',
        'quantity'                 => 'ብዛት',
        'reason'                   => 'ምክንያት',
        'recaptcha_response_field' => 'recaptcha ምላሽ መስክ',
        'referee'                  => 'ዳኛ',
        'referees'                 => 'ዳኞች',
        'reject_reason'            => 'ምክንያት አለመቀበል',
        'remember'                 => 'አስታውስ',
        'restored_at'              => 'በ',
        'result_text_under_image'  => 'በምስሉ ስር የውጤት ጽሑፍ',
        'role'                     => 'ሚና',
        'rule'                     => 'ደንብ',
        'rules'                    => 'ደንቦች',
        'second'                   => 'ሁለተኛ',
        'sex'                      => 'ወሲብ',
        'shipment'                 => 'ጭነት',
        'short_text'               => 'አጭር ጽሑፍ',
        'size'                     => 'መጠን',
        'skills'                   => 'ችሎታዎች',
        'slug'                     => 'ስሉግ',
        'specialization'           => 'ስፔሻላይዜሽን',
        'started_at'               => 'ላይ ተጀምሯል።',
        'state'                    => 'ሁኔታ',
        'status'                   => 'ሁኔታ',
        'street'                   => 'ጎዳና',
        'student'                  => 'ተማሪ',
        'subject'                  => 'ርዕሰ ጉዳይ',
        'tag'                      => 'መለያ',
        'tags'                     => 'tags',
        'teacher'                  => 'መምህር',
        'terms'                    => 'ውሎች',
        'test_description'         => 'የሙከራ መግለጫ',
        'test_locale'              => 'የአካባቢ ሙከራ',
        'test_name'                => 'የሙከራ ስም',
        'text'                     => 'ጽሑፍ',
        'time'                     => 'ጊዜ',
        'title'                    => 'ርዕስ',
        'type'                     => 'ዓይነት',
        'updated_at'               => 'ዘምኗል በ',
        'user'                     => 'ተጠቃሚ',
        'username'                 => 'የተጠቃሚ ስም',
        'value'                    => 'ዋጋ',
        'year'                     => 'አመት',
    ],
];