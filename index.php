<?php
include __DIR__ . '/lib.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1" width="100%">
    <tr>
        <td colspan="2" align="center">
            <?php
            include __DIR__ . DS . 'header.php';
            ?>
        </td>
    </tr>
    <tr>
        <td width="20%">
            <?php
            //menu
            //gfh
            $menu = [
                '1' => 'Страница 1',
                '2' => 'Страница 2',
                '3' => 'Страница 3',
                'table' => 'Таблица умножения',
            ];

            $menuReq = [
                'Punkt 1' => [
                    'href' => '0'
                ],
                'Punkt 2' => [
                    'href' => '3'
                ],
                'Punkt 3' => [
                    'href' => '',
                    'sub' => [
                        'Punkt 3.1' => [
                            'href' => '3.1'
                        ],
                        'Punkt 3.2' => [
                            'href' => '',
                            'sub'=>[
                                'Punkt 3.2.1' => [
                                    'href' => '3.2.1'
                                ],
                                'Punkt 3.2.2' => [
                                    'href' => '3.2.2',
                                ],
                                'Punkt 3.2.3' => [
                                    'href' => '3.2.3'
                                ],
                            ]
                        ],
                        'Punkt 3.3' => [
                            'href' => '3.1'
                        ],
                    ],
                ],
            ];
            menu($menu);
            menuReq($menu);

            ?>
        </td>
        <td>
            <?php
            if (isset($_GET['id'])&&!empty($_GET['id'])){
                $page = '';
                switch ($_GET['id']) {
                    case '1':
                        $page = 'page1';
                        break;
                    case '2':
                        $page = 'page2';
                        break;
                    case '3':
                        $page = 'page3';
                        break;
                    case 'table':
                        $page = 'table';
                        break;
                    default:
                        $page = '404';
                }
                include __DIR__ . DS . $page . '.php';
            } else {
                echo "main content";
            }
            ?>

        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <?php
            include __DIR__ . DS . 'footer.php';
            ?>
        </td>
    </tr>
</table>

</body>
</html>