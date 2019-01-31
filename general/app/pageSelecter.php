<?php
$strPage = '404/main.php';
if (!isset($_GET['p'])){
    $strGetP = 'home';
}else{
    $strGetP = filter_input(INPUT_GET,'p',FILTER_SANITIZE_STRING);
}
switch ($strGetP){
    case 'home': // Главная страница
        $strPage = 'home/main.php';
        break;
    case 'air': // Воздух
        $strPage = 'air/main.php';
        break;
    case 'water': // Вода
        $strPage = 'water/main.php';
        break;
    case 'food': // Еда
        $strPage = 'food/main.php';
        break;
    case 'move': // Движение
        $strPage = 'move/main.php';
        break;

    /*
    case 'company': // О компании
        $strPage = 'company/main.php';
        break;
    case 'production': // Продукция
        $strPage = 'production/main.php';
        if (isset($_GET['type'])){
            switch ($_GET['type']){
                case 'frictionPlates': // Фрикционные диски
                    $strPage = 'production/frictionPlates.php';
                    break;
                case 'transmissionBands': // Тормозные ленты
                    $strPage = 'production/transmissionBands.php';
                    break;
                case 'oneWayClutches': // Обгонные муфты
                    $strPage = 'production/oneWayClutches.php';
                    break;
                case 'solenoidsControls': // Соленоиды, электрические компоненты
                    $strPage = 'production/solenoidsControls.php';
                    break;
                case 'torqueConverterComponents': // Комплектующие для гидротрансформаторов
                    $strPage = 'production/torqueConverterComponents.php';
                    break;
                default:
                    break;
            }
        }
        break;
    case 'contacts': // Контакты
        $strPage = 'contacts/main.php';
        break;
    */
    default:
        break;
}
//include_once ROOT.'general/app/pageSelecter.php';
include_once ROOT.'pages/'.$strPage;