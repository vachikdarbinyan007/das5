<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car | find</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css"/>
    <style>
        .productdiv{
        width: 300px;
        height: 200px;
         border: solid;
        display:flex;
        flex-direction:column;
        justify-content:center;
         align-items:center;
        }
        #result{
            border:solid;
        }
        tr,td{
            border:solid;
        }
    </style>
</head>
<body>
    <div id="form">
        <select name="select" id="select">
            <option value="price">price</option>
            <option value="qty">Quantity</option>
        </select>
        <div id="inputs">
            <input type="number" placeholder="from" id="from"/>
            <input type="number" placeholder="to" id="to"/>
        </div>
    </div>
    <div id="submit">
        <input type="submit" value="Submit" id="btn"/>
    </div>

    <table id="result">
        
    </table>
    
    <script>
        $("#btn").click(function(){
            let selectvalue=document.getElementById("select").value;
            let from=document.getElementById("from").value;
            let to=document.getElementById("to").value;

            $.post("check.php",{selectvalue:selectvalue,from:from,to:to},function(ard){
                result.innerHTML="";
                result.innerHTML+=ard;
            })
        })
    </script>
</body>
</html>