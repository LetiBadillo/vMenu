<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equation solver</title>
</head>
<style>
    body {
        font-family: "Verdana";
    }
    
    hr {
        width: 60%;
    }
    
    .text-center {
        text-align: center;
    }
    
    .box {
        width: 50%;
        display: block;
        background-color: #eee;
        margin-left: auto;
        margin-right: auto;
        padding: 1.5%;
        border: 1px solid #a9a9a9;
        border-radius: 5px;
    }
    
    td {
        border: 1px solid black;
    }
    
    table {
        margin-left: auto;
        margin-right: auto;
    }
    
    .input-sm {
        width: 8%;
    }
    
    .space {
        margin-top: 35px;
        width: 85%;
    }
    
    .hidden {
        display: none;
    }
</style>

<body>
    @if(isset($solution))
    {!! $solution !!}
    @endif
    <h1 class="text-center">Equations solver</h1>
    <hr>
    <div id="box-1" class="box text-center">
        <form id="createForm" method="post">
            <label for="items">Number of equations: </label>
            <input type="number" id="items" name="items">
            <input type="submit" name="createFormButton" value="Create equations system">
            <button type="button" name="eraseForm" id="clearForm" disabled>Erase equation system</button>
        </form>
        <form method="post" action="{{url('/solve')}}" style="padding: 2%;" id="invoiceForm">
        

        </form>
    </div>
</body>

</html>

<script>
    document.getElementById("createForm").addEventListener("submit", function(e) {
        e.preventDefault();
        var items = document.getElementById("items").value;
        if (items != "" && items > 1 && items <= 10) {
            document.getElementById("clearForm").removeAttribute("disabled");
            var text = '@csrf<input type="hidden" name="key" value="'+items+'">';
            var j;
            for (var i = 0; i < items; i++) {
                for (j = 0; j < (items); j++) {
                    text += 'X' + (j + 1) + ' <input class="input-sm" name="x['+(i+1)+']['+(j+1)+']"> ';
                }
                text += ' = <input class="input-sm" name="x['+(i+1)+']['+(j+1)+']">';
                text += '<br>';
            }
            text += '<br><input type="submit" name="submitInvoice" value="Submit">\
            <button type="button" name="eraseForm" id="eraseData" value="">Erase data</button>';
            document.getElementById("invoiceForm").innerHTML = text;
        } else {
            alert('Ingresar números entre 2 y 10');
        }
    });
    document.getElementById("clearForm").addEventListener("click", function() {
        document.getElementById("invoiceForm").innerHTML = "";
        document.getElementById("clearForm").setAttribute("disabled", true);
    });
</script>