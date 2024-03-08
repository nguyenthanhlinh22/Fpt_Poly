<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/addproduct.css">
</head>
<body>
    <h1>PRODUCT </h1>
    <div class="container">
        <form action="">
            <table>
                <tr>
                    <td>
                        Product name <br>
                        <input type="text" name="product_name " id="product_name ">
                    </td>
                </tr>
                <tr>
                    <td>
                        Description <br>
                        <input type="text" name="description" id="description ">
                    </td>
                    
                </tr>
                <tr>
                    <td>
                         Price<br>
                        <input type="text" name="price" id="price">
                    </td>
                </tr>
                <tr>
                    <td>
                        Cegorry <br>
                        <select name="cars" id="cars" >
                            <option value="volvo">lap </option>
                            <option value="saab">phone</option>
                            <option value="mercedes">dt</option>
                            <option value="audi">Audi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Img <br>
                        <input type="file" id="myfile" name="myfile">
                    </td>
                </tr>
                <tr>
                    <td>
                   
                    <input type="submit" name='save' id="save" value="save" >
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>