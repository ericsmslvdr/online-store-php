<div align="left" style="margin-left:24px;">
    <h2>Inventory list</h2>
</div>
<hr>
<h3>&darr; Add New Inventory Item Form &darr;</h3>
<form action="inventory-list.php" enctype="multipart/form-data" method="post">
    <table width="90%" border="0" cellspacing="0" cellpadding="6">
        <tr>
            <td width="20%" align="right">
                Product Name
            </td>
            <td width="80%">
                <input name="productName" type="text" class="input" size="64">
            </td>
        </tr>

        <tr>
            <td align="right">
                Product Price
            </td>
            <td>
                ₱ <input name="price" type="text" class="input" size="12">
            </td>
        </tr>

        <tr>
            <td align="right">
                Category
            </td>
            <td>
                <select name="category" id="category" class="input">
                    <option value="Clothing">Electrical</option>
                    <option value="Clothing">Machine parts</option>
                </select>
            </td>
        </tr>

        <tr>
            <td align="right">
                Subcategory
            </td>
            <td>
                <select name="subCategory" id="subCategory" class="input">
                    <option value=""></option>
                    <option value="Hats">Sample1</option>
                    <option value="Pants">Sample2</option>
                    <option value="Shirts">Sample3</option>
                </select>
            </td>
        </tr>

        <tr>
            <td align="right">
                Product Details
            </td>
            <td>
                <textarea name="details" id="details" cols="64" rows="5"></textarea>
            </td>
        </tr>

        <tr>
            <td align="right">
                Product Image
            </td>
            <td>
                <input type="file" name="fileField" id="fileField">
            </td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="button" class="pointer cancel button" value="Add This Item Now">
            </td>
        </tr>
    </table>
</form>
<br>
<br>