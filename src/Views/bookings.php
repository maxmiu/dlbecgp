<title>View Bookings</title>
<h2>View Bookings</h2>
<table>
    <thead>
        <tr>
            <th>From</th>
            <th>To</th>
            <th>Hotel</th>
            <th>Total</th>
            <th>Frame Sizes</th>
            <th>Notes</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bookings as $booking) : ?>
            <tr>
                <td><?= $booking->dateRange->from ?></td>
                <td><?= $booking->dateRange->to ?></td>
                <td><?= $booking->hotel ?></td>
                <td><?= $booking->getTotalAmount() ?></td>
                <td>
                    <?php foreach ($booking->frameSizes as $frameSize) : ?>
                        <b><?= $frameSize->frameSize ?>:</b>
                        <?= $frameSize->amount ?>;
                    <?php endforeach; ?>
                </td>
                <td><?= $booking->notes ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>