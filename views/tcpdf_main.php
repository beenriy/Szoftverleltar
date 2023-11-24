<!DOCTYPE html>
<html>
<head>
    <title>Objektumok JavaScript-ben</title>
    <script type="text/javascript" src="js/tcpdf_main.js">
    </script>
</head>
<body>
    <script type="text/javascript">
        var myimage = new Image("images/fedex.png", 200, 200, 100, 100);
    </script>
    <table>
        <tr>
        <td align="right">x:</td><td><input type="text" id="x" name="x"></td>
        <td align="right">y:</td><td><input type="text" id="y" name="y"></td>
        <td><button onclick="myimage.putAt(x.value,y.value)">Put At</button></td>
        </tr>
        <tr>
        <td align="right">width:</td><td><input type="text" id="width" name="width"></td>
        <td align="right">height:</td><td><input type="text" id="height" name="height"></td>
        <td><button onclick="myimage.resize(width.value,height.value)">Resize</button></td>
        </tr>
        <tr>
        <td colspan="4"></td>
        <td><button onclick="myimage.show()">Show</button></td>
        </tr>
        <tr>
        <td colspan="4"></td>
        <td><button onclick="myimage.hide()">Hide</button></td>
        </tr>
    </table>
</body>
</html>
