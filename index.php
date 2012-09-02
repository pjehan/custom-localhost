
<?php
$title = 'Welcome';
?>

<?php include './localhost/header.php'; ?>

<h1>Welcome <?php echo $_SERVER['SERVER_NAME']; ?></h1>
<h2>Projects</h2>
<ul>
<?php
$folders = glob('./*', GLOB_ONLYDIR);
foreach ($folders as $f){
    $tmp[basename($f)] = filemtime($f);
}
arsort($tmp);
$folders = array_keys($tmp);
foreach ($folders as $folder) {
    if ($folder === '.' or $folder === '..') continue;
    if (is_dir($folder) && file_exists('./' . $folder . '/web/app_dev.php')) {
        ?>
        <li><span class="label label-info">Symfony</span> <a href="./<?php echo $folder . '/web/app_dev.php'; ?>"><?php echo $folder; ?></a></li>
        <?php
    } else if (is_dir($folder)) {
        ?>
        <li><a href="./<?php echo $folder; ?>"><?php echo $folder; ?></a></li>
        <?php
    }
}
?>
</ul>

<?php include './localhost/footer.php'; ?>
