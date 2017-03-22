<?php
$root_url = 'http://localhost/type_a_2_chitiet/';

$pattern = '/class="(.*?)"/';

$id = @$_GET['id'];
$remove_classes = array();
if (!empty($id)) {
    $url =  'http://localhost/type_a_2_chitiet/type_a_2_chitiet.php';

    $url_less = 'http://localhost/type_a_2_chitiet/less/styles.less';
    $url_bootsrap = 'http://localhost/type_a_2_chitiet/css/bootstrap.min.css';
    $url_awesome =  'http://localhost/type_a_2_chitiet/css/font-awesome.min.css';


    $content_html = file_get_contents($url);

    $content_less = file_get_contents($url_less);
    $content_bootstrap = file_get_contents($url_bootsrap);
    $content_awesome = file_get_contents($url_awesome);


    preg_match_all($pattern, $content_html, $matches);

    if (!empty($matches[1])) {
        $classes = $matches[1];

        foreach ($classes as $class) {
            $class = trim($class);
            if (!empty($class)) {
                $sub_classes = explode(' ', $class);

                foreach ($sub_classes as $item) {
                    if (!empty($item)) {

                        $is_less = strpos($content_less, $item);

                        $is_bootstrap = strpos($content_bootstrap, $item);

                        $is_awesome = strpos($content_awesome, $item);

                        if (!$is_less && !$is_bootstrap && !$is_awesome) {
                            $remove_classes[] = $item;
                        }
                    }
                }
            }
        }
    }
}
?>

<form method="GET" action="#">
    <input type="text" name="id">

    <input type="submit">
</form>

<form method="POST">
    <table>
        <tr>
            <td>#</td>
            <td>NAME</td>
            <td>Check</td>
        </tr>
        <?php if (!empty($remove_classes)): ?>

            <?php foreach ($remove_classes as $class): ?>
                <tr>
                    <td></td>
                    <td><?php echo $class ?></td>
                    <td><input type="checkbox" name="classes[]" value="<?php echo $class ?>"></td>
                </tr>

            <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <input type="submit" name="check">
</form>