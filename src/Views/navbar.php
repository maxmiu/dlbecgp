<?php
$links = [
    ["name" => "Home", "route" => "/"],
    ["name" => "Start booking", "route" => "/book-now"],
    ["name" => "Bookings", "route" => "/bookings"],
];
?>
<nav>
    <ul style="padding: 20px;">
        <?php foreach ($links as $link) : ?>
            <li><a href="<?= $link['route'] ?>"><?= $link['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>