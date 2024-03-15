<title>Book now</title>
<h2>Book now!</h2>
<form action="/book" method="POST">
    <h3>Please let us know how many bikes you need:</h3>
    <div>
        <label for="hotel">Hotel:</label>
        <input required placeholder="Hotel" type="text" name="hotel">
    </div>
    <div style="display: flex; flex-direction: row; margin-top: 24px;">
        <div id="from">
            <label for="date">From:</label>
            <input required name="from" type="date">
        </div>
        <div id="to" style="margin-left: 24px;">
            <label for="date">To:</label>
            <?php if (isset($errors) && isset($errors['dateRange'])) : ?>
                <span class="error">* From must be before to</span>
            <?php endif; ?>
            <input required name="to" type="date">
        </div>
    </div>
    <div id="frameSizes" style="margin-top: 24px;">
        <label for="amount">Frame sizes:</label>
        <?php if (isset($errors) && isset($errors['frameSizes'])) : ?>
            <span class="error">* You must atleast select one bike</span>
        <?php endif; ?>
        <table>
            <thead>
                <tr>
                    <th>XS (Extra Small)</th>
                    <th>S (Small)</th>
                    <th>M (Medium)</th>
                    <th>L (Large)</th>
                    <th>XL (Extra Large)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        <input name="frameSizeXS" style="width: 50px; text-align: center;" value="0" type="number">
                    </th>
                    <th>
                        <input name="frameSizeS" style="width: 50px; text-align: center;" value="0" type="number">
                    </th>
                    <th>
                        <input name="frameSizeM" style="width: 50px; text-align: center;" value="0" type="number">
                    </th>
                    <th>
                        <input name="frameSizeL" style="width: 50px; text-align: center;" value="0" type="number">
                    </th>
                    <th>
                        <input name="frameSizeXL" style="width: 50px; text-align: center;" value="0" type="number">
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="notes" style="margin-top: 24px;">
        <label for="notes">Additional notes:</label>
        <textarea name="notes" id="" cols="30" rows="5" placeholder="Something else we need to know"></textarea>
    </div>
    <div style="text-align: center;">
        <button type="submit">Book now</button>
    </div>
</form>