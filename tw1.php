<!DOCTYPE HTML> 
<html>
<head>
<style>
table,td,th

{
border: 1px solid black;
width: 33%;
text-align:center;
background-color:DarkGray;
border-collapse: collapse;

}
table { margin: auto; }
input { text-align: right; }

</style>

<script type="text/javascript">

function calc(clicked_id)

{
var val1 = parseFloat(document.getElementById("value1").value);
var val2 = parseFloat(document.getElementById("value2").value);
if(isNaN(val1)||isNaN(val2))
alert("ENTER THE VALID NUMBER");

else if(clicked_id=="add")

document.getElementById("answer").value=val1+val2;

else if(clicked_id=="sub")

document.getElementById("answer").value=val1-val2;

else if(clicked_id=="mul")

document.getElementById("answer").value=val1*val2;

else if(clicked_id=="div")

document.getElementById("answer").value=val1/val2;

}

function cls()
{
value1.value="0";
value2.value="0";
answer.value="";

}
</script>
</head>
<body>
<table>
<tr>
<th colspan="4"> SIMPLE CALCULATOR</th>
</tr>
<tr>
<td>value1</td>
<td><input type="text" id="value1" value=" "/></td>
<td>value2</td>
<td><input type="text" id="value2" value=" "/></td>
</tr>
<tr>
<td><input type="button" value="Addition" id="add" onclick="calc(this.id)"/></td>
<td><input type="button" value="Subtraction" id="sub" onclick="calc(this.id)"/></td>
<td><input type="button" value="Multiplication" id="mul" onclick="calc(this.id)"/></td>
<td><input type="button" value="Division" id="div" onclick="calc(this.id)"/></td>
</tr>
<tr>
<td>Answer:</td><td><input type="text" id="answer" value=""/></td>
<td colspan="2"><input type="button" value="CLEAR ALL" onclick="cls()"/>
</td>
</tr>
</table>

</body>
</html>
