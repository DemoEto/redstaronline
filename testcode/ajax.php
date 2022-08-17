<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
    <p><h1>SERVICE: REQUEST</h1></p>
    Keyword:
    <input type="text" id="keyword">
    <button type="button" onclick="res()">Search</button>
    <p id="resDataUser"></p>

    <script>
        function res(){
            let keyword = null;
            let data = null;
            if(document.getElementById("keyword") != null) {
                keyword = document.getElementById("keyword").value;
            }

            //data = "keyword="+keyword;

            let xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200){
                    document.getElementById("resDataUser").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET", "ArrAss.php?keyword="+keyword, true);
                xmlhttp.send();
                //xmlhttp.open("POST", "ArrAss.php", true);
                //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //xmlhttp.send(data);
        }
    </script>
</body>
</html>