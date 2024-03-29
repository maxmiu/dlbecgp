<title>View Bookings</title>
<h2>View Bookings</h2>
<style>
    .bookings-table {
        width: 100%;
    }
    th {
        font-weight: bold;
    }
    th,
    td {
        padding: 12px 16px;
        text-align: center;
    }
</style>
<table class="bookings-table">
    <thead>
        <tr>
            <th>Booking ID</th>
            <th>Created at</th>
            <th>Days</th>
            <th>Hotel</th>
            <th>Name</th>
            <th>Email</th>
            <th>From</th>
            <th>To</th>
            <th>Bike Count</th>
            <th>Frame Sizes</th>
            <th>Notes</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bookings as $booking) : ?>
            <tr>
                <td>#<?= $booking->id ?></td>
                <td><?= $booking->createdAt ?></td>
                <td><?= $booking->dateRange->getDaysDiff() ?></td>
                <td><?= $booking->contact->hotel ?></td>
                <td><?= $booking->contact->name ?></td>
                <td><?= $booking->contact->email ?></td>
                <td><?= $booking->dateRange->from ?></td>
                <td><?= $booking->dateRange->to ?></td>
                <td><?= $booking->getTotalAmount() ?></td>
                <td>
                    <?php foreach ($booking->frameSizes as $frameSize) : ?>
                        <?php if ($frameSize->amount != 0) : ?>
                            <b><?= $frameSize->frameSize ?>:</b>
                            <?= $frameSize->amount ?>;
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td><?= $booking->notes ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>