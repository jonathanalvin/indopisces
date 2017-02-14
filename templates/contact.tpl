<div id="container">
    <div class="col-md-12 locMap">GOOGLE MAPS HERE</div>
    <div class="col-md-5">Detailed address will be here</div>
    <div class="col-md-7">
        <form method="post" action="#">
        <table border="0">
            <tr>
                <td class="frmLabel">Company Name</td>
                <td><input type="text" name="txCn"/></td>
            </tr>
            <tr>
                <td class="frmLabel">Contact Person</td>
                <td><select name="cmbSl">
                    <option value="NA">---</option>
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>
                    <option value="Ms">Ms.</option>
                    </select> <input type="text" name="txNm"/></td>
            </tr>
            <tr>
                <td class="frmLabel">Email Address</td>
                <td><input type="email" name="txEm"/></td>
            </tr>
            <tr>
                <td class="frmLabel">Telephone number</td>
                <td><input type="phone" name="txTel"/></td>
            </tr>
            <tr>
                <td class="frmLabel">Country</td>
                <td>
                    <select name="cmbCt">
                        <option value="NA">Plase select</option>
                        <option value="ID">Indonesia</option>
                        <option value="MS">Malaysia</option>
                        <option value="SG">Singapore</option>
                        <option value="TH">Thailand</option>
                        <option value="VN">Vietnam</option>
                        <option value="CH">China, People Republic of</option>
                        <option value="US">United States, The</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="frmLabel">Purpose</td>
                <td>
                    <select name="cmbCt">
                        <option value="NA">Please select</option>
                        <option value="Price List">Price List</option>
                        <option value="New Venture">New Venture</option>
                        <option value="Others">Others, please specify below</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="frmLabel">Comment</td>
                <td><textarea name="txCm" cols="30" rows="10"></textarea> </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Send</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>