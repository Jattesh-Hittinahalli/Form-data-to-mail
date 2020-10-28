<?php 
extract($_POST);
if(isset($button))
{
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $text = $_REQUEST['text'];
  
  $message="$name.$email.$phone.$text";
  $url = "index.html";
  if(empty($name) || empty($email) || empty($phone)|| empty($text)){
  
      echo "<script type='text/javascript'> alert('Your Message not sent ')</script>";
  }
  
  else
  {
      mail("Jattesh13@gmail.com","Message from Website", $message, "From: $name <$email>");
      
      $mongo = new MongoClient();
          $db=$mongo->jatte;
          $collection=$db->text;

          if($_POST)
          {
              $insert= array(
                  'name'=>$_POST['name'],
                  'email'=>$_POST['email'],
                  'phone'=>$_POST['phone'],
                  'text'=>$_POST['text']
              );

              if($collection->insert($insert))
              {
                  echo "data inserted";
              }

              else
              {
                  echo "Some issue";
              }


          }
          else 
          {
              echo "no data stored";
          }
            }
            
          }

?>