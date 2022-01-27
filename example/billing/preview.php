<!DOCTYPE html>
<html>

<?php
$dochtml = new DOMDocument();
if (array_key_exists("save", $_POST) AND isset($_POST['save'])){

  include("../../include/connection.php");

  $final=$_POST['final'];
  $final=substr($final,3);
  $final=intval($final);
  $sql="SELECT * from bill where invoice='".$_POST['invoice']."'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Repeated Invoice Number");'; 
    echo 'window.location.href = "../billing.php";';
    echo '</script>';
  }


  else{
  
  $sql = "INSERT into  bill(invoice,comp_name,bill_date,total,delivery,modes,supply_ref,other_ref,basic_desc,comp_add,comp_land,comp_gst,status) 
    VALUES('".mysqli_real_escape_string($conn, $_POST['invoice']).
    "','".mysqli_real_escape_string($conn, $_POST['comp_name']).
    "','".mysqli_real_escape_string($conn, $_POST['date']).
    "','".mysqli_real_escape_string($conn, $final).    
    "','".mysqli_real_escape_string($conn, $_POST['delivery']).
    "','".mysqli_real_escape_string($conn, $_POST['modes']).
    "','".mysqli_real_escape_string($conn, $_POST['supply_ref']).
    "','".mysqli_real_escape_string($conn, $_POST['other_ref']).
    "','".mysqli_real_escape_string($conn, $_POST['basic_desc']).
    "','".mysqli_real_escape_string($conn, $_POST['comp_add']).
     "','".mysqli_real_escape_string($conn, $_POST['comp_land']).
    "','".mysqli_real_escape_string($conn, $_POST['comp_gst']).
    "','Pending')";



    $result = $conn->query($sql);

    if ($result === TRUE) {
    echo '<script type="text/javascript">'; 
    echo 'alert("New Record Created Succesfully");'; 
    echo 'window.location.href = "../billing.php";';
    echo '</script>';
    header('Location:../billing.php');
    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

}
}

else{
$comp_name=$_POST['comp_name'];
$comp_add=$_POST['comp_add'];
$comp_land=$_POST['comp_land'];
$gst=$_POST['gst'];
$invoice=$_POST['invoice'];
$date=$_POST['date'];
$delivery_note=$_POST['delivery_note'];
$modes=$_POST['modes'];
$supply=$_POST['supply'];
$other_ref=$_POST['other_ref'];
$order_no=$_POST['order_no'];
}

?>




<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <script type='text/javascript' src='../jquery-1.3.2.min.js'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
      
      .in{
        border: none; font-weight:bold;
      }
      /*
   CSS-Tricks Example
   by Chris Coyier
   http://css-tricks.com
*/

* { margin: 0; padding: 0; }
body {margin-left: 10px; margin-right: 10px; font: 14px/1.4 Helvetica, serif; }

textarea { border: 0; font: 14px Helvetica, Serif; overflow: hidden; resize: none; }
table { border-collapse: collapse; width:820px; }
table td, table th { border: 1px solid black; padding: 5px; }







#terms { text-align: center; margin: 20px 0 0 0; }
#terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
#terms textarea { width: 100%; text-align: center;}

textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }

.delete-wpr { position: relative; }
.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }
    </style>
</head>

  

<body>
  
       
 
        <div>
        <form method='post'>
                <div style="text-align: center;text-decoration: black;font-weight: bold;padding: 20px">Tax Invoice</div>
                <table class="table table-bordered">
                      
                        
                                <thead>
                                    <tr>
                                         <td rowspan="4"><b>Creation Publicity Pvt.Ltd.</b><br>4,Parekh-Vora Chambers<br>
                                                        66,Nagindas Master Road
                                                        <br>Fort, Mumbai-400 001,Maharasthtra<br><br>Email:-creation@indiacreation.com
                                                        <br>Telephone No:022-407784444<br><br><b>GSTINUIN:27AABCC2192B1Z4</b><br>
                                                        CIN:U74300MH1996PTC097150</td>
                                                      
                                                   
                                                </tr>
                                                <tr>
                                                   
                                                    <td colspan="2" style="height:75px"><b><u>Invoice No:</u><br><input class="in" type='text' name="invoice" value="<?php echo $invoice;?>"></input></b></td>
                                                    
                                                    <td colspan="2" style="height:75px" rowspan="1"><b><u>Dated:</u><br><input class="in" type='text' name="date" value="<?php echo $date;?>"></input></b></td>

                                                    <td colspan="2" rowspan="1" id="hide"><div onclick="hide()"><center><img src="../../attachments/PHPPresentation/tests/resources/images/Creationlogo.jpg" height="50px"></center></div></td>
                                                    
                                                </tr>
                                                <tr>

                                                    <td colspan="3"style="height:75px"><b><u>Delivery Note:</u><br><input class="in" type='text' name="delivery" value="<?php echo  $delivery_note;?>"></input></b></td>
    
                                                    <td colspan="3" rowspan="1"><b><u>Mode/Terms Of Payment:</u><br><input class="in" type='text' name="modes"value="<?php echo $modes;?>"></input></b></td>
                                                 
                                                </tr>
                                                <tr>

                                                    <td colspan="3" style="height:75px"><b><u>Supplier's Ref:</u><br><input class="in" type='text' name="supply_ref" value="<?php echo $supply;?>"></input></b></td>
                                                  
                                                    <td colspan="3" rowspan="1"><b><u>Others's Ref:</u><br><input class="in" type='text' name="other_ref" value="<?php echo $other_ref;?>"></input></b></td>
                                              
                                                </tr>
                                               
                                                <tr>
                                                    <td rowspan="2"><u><b>Service Reciever Details:</b></u></br>
                                                      <input type='text' name="comp_name" value="<?php echo $comp_name;?>" style=" width: 250px; border: none;"></input>
                                                      <br><input  type='text' name="comp_add" value="<?php echo $comp_add;?>" style=" border: none; width: 250px"></input>
                                                      <br><input  type='text' name="comp_land" value="<?php echo $comp_land;?>" style=" border: none;  width: 250px"></input>
                                                      <br><b>GSTINUIN:<input class="in" name="comp_gst" type='text' value="<?php echo $gst;?>"></input></b><br></td>
                                                
                                                            <td colspan="4" rowspan="1" height="60px"><b><u>Service Receiver Order No:</u><br><input class="in" type='text' value="<?php echo $order_no;?>"></input>
                                                             </b></td>
                                                            <td colspan="2" rowspan="1"><u><b>Dated:<br><input class="in" type='text' value=""></input>
                                                            </b></u></td>

                                                </tr>


                                                <tr>

                                                      <td colspan="6" height="50px"></td>
                                                    

                                                </tr>
                                                
                                                <tr>
                                                        <td colspan="1"><b>Description Of service</b></td>
                                                        <td colspan="1"><b>HSN/SAC</b></td>
                                                        <td colspan="1"><b>GST Rate</b></td>
                                                        <td colspan="1" contenteditable="true"><b>Period/Area</b></td>
                                                        <td colspan="1"><b>Rate Rs.</b></td>
                                                        <td colspan="1"><b>Per</b></td>
                                                        <td colspan="1"><b>Amount (Rs.)</b></td>
                                                       

                                                </tr>

                                                <tr style="border:none">
                                                        <td colspan="1"><textarea rows="5" cols="32" name="basic_desc"> Basic Description of work</textarea></td>
                                                       <td colspan="6"></td>
                                                </tr>

                                                <tr class="item-row">
                                                    <td colspan="1" class="description"><div id="del" class="delete-wpr"><textarea>Description</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
                                                    <td class="hsn"><textarea>HSN</textarea></td>
                                                    <td><textarea class="gst">18%</textarea></td>
                                                    <td><textarea class="period">100</textarea></td>
                                                    <td><textarea class="rate">10</textarea></td>
                                                    <td><select class="per">
                                                     <option value="30">Month</option>
                                                     <option value="1">Day</option>
                                                    </select>
                                                    </td>
                                                    <td><span class="amount">Rs33</span></td>
                                                </tr>

                                                <tr>
                                                    <td colspan="7"></br></br></br></td>
                                                </tr>
                                                <tr id="hiderow">
                                                   <td colspan="6"><b><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></b></td>
                                                   <td class="sum">Rs33</td>

                                                </tr>
                                                

                                                <tr>
                                                    <td colspan="1">Add: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  SGST@<span id='sgst'  contenteditable="true">9%</span></td>
                                                    <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td class="stax">Rs3</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="1">Add:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  CGST@<span id="cgst"  contenteditable="true">9%</span></td>
                                                    <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td class="ctax">Rs3</td>
                                                </tr>

                                                <tr>
                                                        <td colspan="1"><b>Total</b></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                        <td colspan="1"><input id="final" name="final" class='in' type='text' value="Rs.39"></input></td>
                                                </tr>
                                                <tr>
                                                        <td colspan="7"><b>Amount Chargeble(in Words):<br>
                                                        <span id="word">Thrity Nine</span></b></td>
                                                </tr>
                                                <tr>
                                                        <td rowspan="2" width="390">HSN/SAC</td>
                                                                     
                                                                  
                                                           
                                                                   <td rowspan="2" colspan="2" >Taxable Value(Rs.)</td>
                                                                   <td colspan="2" >Central Tax </td>
                                                                  
                                                                   <td colspan="2" >State Tax</td>
                                                                   
                                                               </tr>


                                                               <tr>
                                                               
                                                                
                                                                    <td colspan="1" >Rate</td> 
                                                                    <td colspan="1" >Amount(Rs.)</td> 
                                                                    <td colspan="1" >Rate</td> 
                                                                    <td colspan="1" >Amount(Rs.)</td> 
                                                               </tr>
                                                
                                                              
                                                               <tr>
                                                                   <td><textarea>HSN</textarea></td>
                                                                   <td colspan="2" class="tax2">33</td>
                                                                   <td id="c">9%</td>
                                                                   <td class="ctax1">3</td>
                                                                   <td id="s">9%</td>
                                                                   <td class="stax1">3</td>
                                                                  
                                                    
                                                               </tr>
                                                               <tr>
                                                                    <td ><b>Total</b></td>
                                                                    <td colspan="2" class="tax2">33</td>
                                                                    <td></td>
                                                                    <td class="ctax1"><b>3</b></td>
                                                                   <td></td>
                                                                   <td class="stax1"><b>3</b></td>

                                                               </tr>
                                                              
                                                               <tr>
                                                                    <td colspan="7"> 

                                                                      <div style="width:800px;display: inline-block;">Our Company PAN:AABCC2192B<br>
                                                                      <b><u>Our Bank Details:-</u>HDFC BANK Manekji Wadia Wadia Bldg Ground Floor Nanik Motwani Marg,Fort. Mumbai 400001</b><br>
                                                                      Bank account No.502000026055509.NEFT/RTGS Details;HDFC0000060<br>
                                                                      Payments Terms:-Within 30 Days from the date of reciept of this bill<br>
                                                                      Intrest @24% per annum will be charged ,if bill is not paid within 45 days<br>
                                                                      No reciept is valid unless given on our printed form and signed by our Director.Dispute if<br>
                                                                      any must be notified to us in writing,within seven days from the reciept of this bill,failing this<br> our bill will be deemed to have been accepted as payble in full by you to us<br>
                                                                      Taxes/Charges will be extra as applicable SUBJECT TO MUMBAI JURISDICTION<br><br>
                                                                      <b><u>Declaration</u></b><br>
                                                                      We declare that this invoice shows the actual price of the<br>
                                                                      service describe and that all particulars are true and correct.
                                                                    </div>

                                                                    <div style="display: inline-block;float: right;">
                                                                      <br><br>
                                                                      <div style="font-size: 16px">
                                                                      <b>For CREATION PUBLICITY PVT LTD&nbsp&nbsp&nbsp&nbsp&nbsp</b>
                                                                      </div>
                                                                      <br><br><br>

                                                                      <b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                      Director</b>
                                                                    </div>


                                                                    </td>

                                                               </tr>
                                                             
                                </thead>
                                <tbody>
                                 
                                </tbody>
                            </table>
                            <input type="submit" id='save' name="save" value="Save"  class="w3-button w3-blue w3-round-xxlarge">
                            

          </div>
        </form>
        
      </div>
        
    <script type="text/javascript">
   
      function hide(){
         
         $("#save").toggle();
         $("#addrow").html("Total (Without Tax)");
         $(".delete").toggle();

      };

      $(document).ready(function() {

        if ($(".delete").length < 2){ $(".delete").hide();
      }

        function update_price() {
          var row = $(this).parents('.item-row');
          var per=row.find(".per").val();
          var price = row.find('.rate').val() * row.find('.period').val()/per;
          var price=Math.round(price);
          isNaN(price) ? row.find('.amount').html("N/A") : row.find('.amount').html("Rs"+price);
          
          update_total();
         
        }


        function add_new_price() {
          var row =  $(".item-row:last");
          var per=row.find( ".per" ).val();
          var price = row.find('.rate').val() * row.find('.period').val()/per;
          var price=Math.round(price);
          isNaN(price) ? row.find('.amount').html("N/A") : row.find('.amount').html("Rs"+price);
          update_total();
         
        }

        function bind() {
          $(".rate").blur(update_price);
          $(".period").blur(update_price);
          $(".per").blur(update_price);
          $("#sgst").blur(update_price);
          $("#cgst").blur(update_price);
        }

        $("#addrow").click(function(){
          $(".item-row:last").after('<tr class="item-row"><td colspan="1" class="description"><div class="delete-wpr"><textarea>Description</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td><td class="hsn"><textarea>HSN</textarea></td><td><textarea class="gst">18%</textarea></td><td><textarea class="period">100</textarea></td><td><textarea class="rate">10</textarea><td><select class="per"><option value="30">Month</option><option value="1">Day</option></select></td><td><span class="amount">Rs10</span></td></tr>');
          if ($(".delete").length > 0) $(".delete").show();
         add_new_price();
          bind();
        });
        
        bind();

        $(".delete").live('click',function(){
        $(this).parents('.item-row').remove();
        if ($(".delete").length < 2){ $(".delete").hide();
      }
          update_total();
        });

      });



      

      function update_total() {
        var total = 0;
        $('.amount').each(function(i){
          price = $(this).html().replace("Rs","");
          if (!isNaN(price)) total += Number(price);
        });

        total = Math.round(total);

        $('.sum').html("Rs."+total);
        
        var sgst=$('#sgst').html().replace("%","");
        var cgst=$('#cgst').html().replace("%","");
        var stax=Math.round(total*sgst/100);
        var ctax=Math.round(total*cgst/100);
        
          $('.stax').html("Rs"+stax);
          $('.ctax').html("Rs"+ctax);
          
          $('.stax1').html(stax);
          $('.ctax1').html(ctax);
         
          $('.tax2').html(ctax+stax);
         


        var final=total+(ctax+stax);

          $('#final').val("Rs."+final);

         numToString(final);

         $("#c").html(cgst+"%");
         $("#s").html(sgst+"%");
         
       
      }














function numToString(x)
{
var r=0;
var txter=x.toString();
var sizer=txter.length;
var numStr="";
if(isNaN(txter))
{
alert(" Invalid number");
exit();
}
var n=parseInt(x);
var places=0;
var str="";
var entry=0;
while(n>=1)
{
r=parseInt(n%10);

if(places<3 && entry==0)
{
numStr=txter.substring(txter.length-0,txter.length-3) // Checks for 1 to 999.
str=onlyDigit(numStr); //Calls function for last 3 digits of the value.
entry=1;
}

if(places==3)
{
 numStr=txter.substring(txter.length-5,txter.length-3) 
 if(numStr!="")
 {
  str=onlyDigit(numStr)+ " Thousand "+str;
 }
}

if(places==5)
{
 numStr=txter.substring(txter.length-7,txter.length-5) //Substring for 5 place to 7 place of the string
 if(numStr!="")
 {
  str=onlyDigit(numStr)+ " Lakhs "+str; //Appends the word lakhs to it
 }
}

if(places==6)
{
 numStr=txter.substring(txter.length-9,txter.length-7)  //Substring for 7 place to 8 place of the string
 if(numStr!="")
 {
  str=onlyDigit(numStr)+ " Crores "+str;        //Appends the word Crores
 }
}

n=parseInt(n/10);
places++;
}
$("#word").html(str);
}




function onlyDigit(n)
{
//Arrays to store the string equivalent of the number to convert in words
var units=['','One','Two','Three','Four','Five','Six','Seven','Eight','Nine'];
var randomer=['','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen','Seventeen','Eighteen','Nineteen'];
var tens=['','Ten','Twenty','Thirty','Forty','Fifty','Sixty','Seventy','Eighty','Ninety'];
var r=0;
var num=parseInt(n);
var str="";
var pl="";
var tenser="";
while(num>=1)
{
r=parseInt(num%10);
tenser=r+tenser;
 if(tenser<=19 && tenser>10) //Logic for 10 to 19 numbers
 {
 str=randomer[tenser-10];
 }
 else
 {
  if(pl==0)        //If units place then call units array.
  {
  str=units[r];
  }
  else if(pl==1)    //If tens place then call tens array.
  {
  str=tens[r]+" "+str;
  }
 }
 if(pl==2)        //If hundreds place then call units array.
 {
 str=units[r]+" Hundred "+str;
 }
 
num=parseInt(num/10);
pl++;
}
return str;
}
     

      
    </script>
      
</body>
</html>