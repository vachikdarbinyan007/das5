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
    </style>
</head>
<body>
    <div id="form">
        <select name="select" id="select">
            <option value="price">price</option>
            <option value="hp">horsepower</option>
            <option value="speed">speed</option>
        </select>
        <div id="inputs">
            <input type="number" placeholder="from" id="from"/>
            <input type="number" placeholder="to" id="to"/>
        </div>
    </div>
    <div id="submit">
        <input type="submit" value="Submit" id="btn"/>
    </div>

    <div id="result">

    </div>
    
    <script>
        $("#btn").click(function(){
            let selectvalue=document.getElementById("select").value;
            let from=document.getElementById("from").value;
            let to=document.getElementById("to").value;

            $.post("check.php",{selectvalue:selectvalue,from:from,to:to},function(ard){
                result.innerHTML="";
                let norard=JSON.parse(ard)
                for(let i=0;norard.length/8;i++){
                    let newarray=norard.splice(0,0+8);
                    for(let i=0;i<1;i++){
                        result.innerHTML+=`<div class="productdiv"><img src="${newarray[4]}" width="75%" height="75%"/><input type="submit" value="${newarray[2]}&euro;"/></div>`
                    };
                }
            })
        })
    </script>
</body>
</html>