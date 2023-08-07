<?php

return [
    'plural' => 'نموذج',
    'singular' => 'نموذج',
    'empty' => 'لا توجد نماذج',
    'perPage' => 'عدد النتائج في الصفحة',
    'actions' => [
        'list' => 'كل العملاء',
        'show' => 'عرض',
        'create' => 'إضافة',
        'new' => 'إضافة',
        'edit' => 'تعديل  ',
        'delete' => 'حذف ',
        'restore' => 'استعادة',
        'forceDelete' => 'حذف نهائي',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'types' => [
        'string' => 'string',
        'date' => 'date',
        'float' => 'float',
        'integer'=>'integer',
    ],
    'messages' => [
        'created' => 'تم إضافة  بنجاح .',
        'updated' => 'تم تعديل  بنجاح .',
        'deleted' => 'تم حذف  بنجاح .',
        'restored' => 'تم استعادة  بنجاح .',
    ],
    'attributes' => [
        'name' => 'name',
        'entity_id' => 'entity',
        'type' => 'type',

    ],


   
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا النموذج ؟',
            'confirm' => 'حذف',
            'cancel' => 'إلغاء',
        ],
        'restore' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد استعادة هذا النموذج ؟',
            'confirm' => 'استعادة',
            'cancel' => 'إلغاء',
        ],
        'forceDelete' => [
            'title' => 'تحذير !',
            'info' => 'هل أنت متأكد انك تريد حذف هذا العميل النموذج؟',
            'confirm' => 'حذف نهائي',
            'cancel' => 'إلغاء',
        ],
    ],
];
