<title>Book now</title>
<h2>Book now!</h2>
<form action="/book" method="POST">
    <h3>Please let us know how many bikes you need:</h3>
    <div>
        <label for="hotel">Hotel:</label>
        <input placeholder="Hotel" type="text" name="hotel">
    </div>
    <div>
        <label for="date">From:</label>
        <input name="from" type="date">
    </div>
    <div>
        <label for="date">To:</label>
        <input name="to" type="date">
    </div>
    <div id="frameSizes">
        <label for="amount">Frame sizes:</label>
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
    <div id="notes">
        <label for="notes">Additional notes:</label>
        <textarea name="notes" id="" cols="30" rows="5" placeholder="Something else we need to know"></textarea>
    </div>
    <button type="submit">Book now</button>
</form>