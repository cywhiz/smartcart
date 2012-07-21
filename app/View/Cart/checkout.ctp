<h2>Shipping/Billing Info</h2>
<table>
		<tr>
			<td width="200">First Name</td>
			<td><input name="txtFirstName" type="text"></td>
		</tr>
		<tr>
			<td width="200">Last Name</td>
			<td><input name="txtLastName" type="text"></td>
		</tr>
		<tr>
			<td width="200">Address</td>
			<td><input name="txtAddress" type="text"></td>
		</tr>
		<tr>
			<td width="200">Phone Number</td>
			<td><input name="txtPhone" type="text"></td>
		</tr>
		<tr>
			<td width="200">Province/Territory</td>
			<td>
			<select name="province" size="1" id="province">
				<option value="AB">Alberta</option>
				<option value="BC">British Columbia</option>
				<option value="MB">Manitoba</option>
				<option value="NB">New Brunswick</option>
				<option value="NL">Newfoundland and Labrador</option>
				<option value="NT">Northwest Territories</option>
				<option value="NS">Nova Scotia</option>
				<option value="NU">Nunavut</option>
				<option value="ON">Ontario</option>
				<option value="PE">Prince Edward Island</option>
				<option value="QC">Quebec</option>
				<option value="SK">Saskatchewan</option>
				<option value="YT">Yukon</option>
			</select>
			</td>
		</tr>
		<tr>
			<td width="200">City</td>
			<td><input name="txtCity" type="text" class="box"></td>
		</tr>
		<tr>
			<td width="200">Postal Code</td>
			<td><input name="txtPostalcode" type="text" class="box"></td>
		</tr>
		<tr>
			<td width="200">Credit Card Number</td>
			<td>
				<input name="txtCreditcard" type="text" class="box">
				<select name="cc" size="1">
					<option value="Visa">Visa</option>
					<option value="MC">Mastercard</option>
					<option value="Amex">American Express</option>
				</select>
			</td>
		</tr>
        <tr>
            <td width="200">Payment Method</td>
            <td>
                <input name="optPayment" type="radio" id="optCC" value="cc" checked="checked" />
                <label for="optCC">Credit Card </label>
                <input name="optPayment" type="radio" id="optCOD" value="cod" />
                <label for="optCOD">Cash on Delivery</label>
            </td>
		</tr>
		</table>

            <input name="btnSubmit" type="submit" value="Submit" onclick="alert('Thank you for choosing SmartCart!\nYour items will be delivered within 4-5 business days')" />
        