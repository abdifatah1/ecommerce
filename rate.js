/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function showHint(str)
{
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}

function ValidateForm(form)
{

   if(IsEmpty(form.account_number)) 
   { 
      alert('You have not entered an account number') 
      form.account_number.focus(); 
      return false; 
   } 
 
 
   if (!IsNumeric(form.account_number.value)) 
   { 
      alert('Please enter only numbers or decimal points in the account field') 
      form.account_number.focus(); 
      return false; 
      } 
 
return true;
 
} 