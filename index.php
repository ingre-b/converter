<!doctype html>
<html>
    <head>
        <title>Javascript</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script.js" type="text/javascript"></script>
    </head>
    <body>
        
            <p>Enter measurements!</p>
            <form name="converter">
                Byte: <input id="byte" type="text" name="byte" placeholder="Enter bytes" onkeyup="byteConverter()" /><br />
                KB: <input id="kb" type="text" name="kb" placeholder="Enter kilobytes"  onkeyup="kbConverter()" /><br />
                MB: <input id="mb" type="text" name="mb" placeholder="Enter megabytes"  onkeyup="mbConverter()" /><br />


            </form>
          
<!--
        <input class="vis biginput R W120" id="ltl" name="ltl" value="3.45280" type="text" onkeyup="eurCalc(this.form.eur)">

        <input id="baitai" type="number"  placeholder="Baitai"  onkeyup="baitaiConverter()"/>
        <label for="baitai"> baitai </label>
        <button id="convert">Convert</button>

        <br>

        <input id="kilobaitai" type="number"  placeholder="Kilobaitai"  onkeyup="kilobaitaiConverter()"/>
        <label for="kilobaitai"> kilobaitai </label>
       

        <br>

        <input id="megabaitai" type="number"  placeholder="Megabaitai"  onkeyup="megabaitaiConverter()"/>
        <label for="megabaitai"> megabaitai </label>
-->
    </body>
</html>