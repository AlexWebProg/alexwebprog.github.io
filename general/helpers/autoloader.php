<?php

// Автолоадер ------------------------------------------------------------------
function __autoload($class)
{
    switch ($class) {
        // Папка MAIN
        case 'CRUD':
            require_once SELECTERS.'main/'.$class.'.php';
            break;
        // Папка USERS
        case 'siteUsers':
        case 'siteUserSettings':
        case 'address':
        case 'dealers':
        case 'inprice':
        case 'cform':
        case 'cform2':
        case 'samecl':
        case 'manlim':
        case 'detlim':
        case 'deletedusers':
        case 'SUFilter':
        case 'accstat':
        case 'siteUserSettingsRestrictedAccessCookiesAllowed':
        case 'siteUserSettingsTwoFacAuth':
        case 'ut':
        case 'discount':
        case 'markup':
        case 'manageUsers':
        case 'emailTemplates':
        case 'uletters':
        case 'pageAccess':
        case 'req2':
        case 'balance':
            require_once SELECTERS.'users/'.$class.'.php';
            break;
        // Папка SYSTEM
        case 'sysUtil':
        case 'pricelist':
        case 'filemes':
            require_once SELECTERS.'system/'.$class.'.php';
            break;
        // Папка DETAILS
        case 'details':
        case 'trans':
        case 'cat2':
        case 'basket':
        case 'requestBasket':
        case 'statScheme':
        case 'tblock':
            require_once SELECTERS.'details/'.$class.'.php';
            break;
        // Папка HELPERS
        case 'alfaBank':
        case 'detListMaker':
        case 'makeRand':
        case 'validator':
        case 'mailSender':
        case 'makeUpdateArray':
        case 'utf8':
        case 'strProcessing':
        case 'imgProcessing':
        case 'deviceQualifier':
        case 'fileProcessing':
        case 'orderStatus':
        case 'mailRu':
            require_once HELPERS.$class.'.php';
            break;
        // Папка HANDLERS
        case 'mDelivery':
        case 'userProcessing':
        case 'priceMaker':
        case 'updater':
            require_once HANDLERS.$class.'.php';
            break;
        // PHPMailer
        case 'PHPMailer':
        case 'POP3':
        case 'SMTP':
            require_once LIBRARIES.'PHPMailer/class.'.strtolower($class).'.php';
            break;
    }
}