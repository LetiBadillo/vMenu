<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
</head>
<style>
    body{
        font-family: "Verdana";
    }
    hr{
        width: 60%;
    }
    .text-center{
        text-align: center;
    }
    .box{
        width: 50%;
        display: block;
        background-color: #eee;
        margin-left: auto;
        margin-right: auto;
        padding: 1.5%;
        border: 1px solid #a9a9a9;
        border-radius: 5px;
    }
    td{
        border: 1px solid black;
    }
    table{
        width: 100%;
    }
    .sm-input{
        width:8%;
    }
    .md-input{
        width: 11%;
    }
    .lg-input{
        width: 45%;
    }
    .space{
        margin-top: 35px;
        width: 85%;
    }
    .hidden{
        display:none;
    }
</style>
<body>
    <h1 class="text-center">Invoice form</h1>
    <hr>
    <div id="box-1" class="box text-center">
        <form id="createForm" method="post">
        {{ csrf_field() }}
            <label for="items">Number of items sold: </label>
            <input type="number" id="items" name="items">
            <input type="submit" name="createFormButton" value="Create form">
            <button type="button" name="eraseForm" id="clearForm" disabled>Erase form</button>
        </form>
        <form style="padding: 2%;" id="invoiceForm">
        
        </form>
    </div>
    <div id="box-2" class="hidden box text-center">
    </div>
</body>
</html>
<script>
    document.getElementById("createForm").addEventListener("submit", function(e){
        e.preventDefault();
        var items = document.getElementById("items").value;
        if(items != "" && items >0 && items <= 10){
            document.getElementById("clearForm").removeAttribute("disabled");
            var text = '';
            for(var i = 0; i < items; i++){
                text+='<p>Item #'+(i+1)+'</p>\
            <label for="description">Description: </label>\
            <input class="lg-input" type="text" name="description[]">\
            <label for="description">Quantity: </label>\
            <input class="sm-input" type="text" name="quantity[]">\
            <label for="description">Price: </label>\
            $ <input class="sm-input" type="text" name="price[]">\
            <hr class="space">';
            }
            text+= '<input type="submit" name="submitInvoice" value="Submit">\
            <button type="button" name="eraseForm" id="eraseData" value="">Erase data</button>';
            document.getElementById("invoiceForm").innerHTML = '{{ csrf_field() }}'+text;
        }else{
            alert('Ingresar números entre 1 y 10');
        }
       
        document.getElementById("eraseData").addEventListener("click", function(){
            var r = document.getElementById("invoiceForm").getElementsByTagName('input');
            for (var o = 0; o < r.length; o++){
                if(r[o].getAttribute('type') == "text"){
                    r[o].value = "";
                }
            }
        });
    });

    document.getElementById("invoiceForm").addEventListener("submit", function(e){
            e.preventDefault();
            getInvoice();
        });

    document.getElementById("clearForm").addEventListener("click", function(){
        document.getElementById("invoiceForm").innerHTML = "";
    });
    
    function getInvoice(){
        var formData = '';
            var r = document.getElementById("invoiceForm").getElementsByTagName('input');
            for(var y = 0; y < r.length; y++){
                formData += r[y].getAttribute('name')+'='+r[y].value+'&';
            }
            var url = "{{url('/getInvoice')}}";
            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', url, true);
            xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded; charset=UTF-8");
            xhttp.send(formData);
            xhttp.onload   = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("box-1").classList.add("hidden");
                    document.getElementById("box-2").classList.remove("hidden");
                    document.getElementById("box-2").innerHTML =this.responseText.replace(/\\\//g, "/");
                    
                }
            };

    }
  
</script>