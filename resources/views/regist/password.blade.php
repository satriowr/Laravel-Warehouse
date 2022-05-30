<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enter Password</title>
</head>
<body>
    
</body>

<SCRIPT>
    function passWord() {
    var testV = 1;
    var pass1 = prompt('Please Enter Your Password',' ');
    while (testV < 3) {
    if (!pass1) 
    history.go(-1);
    if (pass1.toLowerCase() == "password") {
    alert('You Got it Right!');
    window.open('/registUser');
    break;
    } 
    testV+=1;
    var pass1 = 
    prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
    }
    if (pass1.toLowerCase()!="password" & testV ==3) 
    history.go(-1);
    return " ";
    } 
    </SCRIPT>
    <CENTER>
    <FORM>
    <input type="button" value="Enter Protected Area" onClick="passWord()">
    </FORM>
    </CENTER>
</html>