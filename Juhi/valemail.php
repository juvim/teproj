
<html>
<title>email validation</title>
<script language="javascript">
function email_check(str)
{
var at="@";
var dot=".";
var lat=str.indexOf(at);
var lstr=str.length;
var ldot=str.indexOf(dot);
var msg=" ";
if(lat==-1)
msg=msg+"Please include '@' sign\n";
if(lat==0)
msg=msg+"Invalid @ position\n";
if(lat==lstr)
msg=msg+"Invalid @ position\n";
if(ldot==-1)
msg=msg+"Please include '.' sign\n";
if(ldot==0)
msg=msg+"Invalid '.'' position\n";
if(msg.length==0)
alert("Valid email id");
else 
alert(msg);
}
function validateEmail(){
var emailID=frm.textemail;
if(emailID.value==null)
{
alert("Please enter your email id");
}
if(email_check(emailID.value))
emailID.value=" ";
}
</script>
<form name="frm">
Email-ID<input type="text" name="textemail">
<input type="submit" onclick="validateEmail(frm)">
</form>
</html>