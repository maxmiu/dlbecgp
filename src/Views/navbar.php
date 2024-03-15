<?php
$links = [
    ["name" => "Home", "route" => "/"],
    ["name" => "Make booking", "route" => "/book-now"],
    ["name" => "Bookings", "route" => "/bookings"],
];
?>
<nav>
    <ul style="padding: 20px;">
        <li style="padding: 4px 8px; border-radius: 12px; background-color: white; font-size: 36px;">🚲</li>
        <?php foreach ($links as $link) : ?>
            <li><a style="text-decoration: none;" href="<?= $link['route'] ?>"><?= $link['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>