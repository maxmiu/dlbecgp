<div style="text-align: center;">
    <div class="success" style="font-size: 78px;">✓</div>
    <h1>Booking Successful!</h1>
    <h2>Thank you for your booking with Tourist Bike GmbH</h2>
    <p>We are pleased to inform you that your eBike booking has been successfully completed. Below are all the important details regarding your booking:</p>
    <p>Booking Number: <b>#<?= $booking->id ?></b></p>
    <p>Hotel: <b><?= $booking->hotel ?></b></p>
    <p>
        From: <b><?= $booking->dateRange->from ?></b>
        to: <b><?= $booking->dateRange->to ?></b>
        (Total days: <?= $booking->dateRange->getDaysDiff() ?>)
    </p>
    <button style="margin-top: 24px;">Make another booking</button>
    <p style="margin: 128px auto; width: 420px;">
        Need Help?
        If you have any questions about your booking or need assistance, do not hesitate to contact us. Our customer service is available at +49-123456789 or via email at
        <a href="mailto:info@example.com">tourist-bike@example.com</a>.
    </p>
</div>