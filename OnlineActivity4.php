<!DOCTYPE html>
<html>
  <head>
    <title>Online Activity 4</title>
  </head>
  <?php
        if(isset($_POST['name'],$_POST['email'],$_POST['telephone'],$_POST['checkbox'],$_POST['calendar'],$_POST['browsers'],$_POST['feedback'],$_POST['message'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $hp = $_POST['telephone'];
            $contact = $_POST['checkbox'];
            $date = $_POST['calendar'];
            $browser = $_POST['browsers'];
            $feedback = $_POST['feedback'];
            $message = $_POST['message'];
            echo "Name: $name<br>Email: $email<br>Telephone: $hp<br>Contact Preference: $contact<br>Available Date: $date<br>Favourite Browser: $browser<br>Feedback Type: $feedback<br>Message:$message";
        }
    ?>
  <body>
        <pre><form method = "POST">
    Name:			<input type = "text" size = "30" name = "name"></input><br>
    E-Mail:			<input type = "email" size = "30" name = "email"></input><br>
    Telephone:		<input type = "text" size = "30" name = "telephone"></input><br>
    Contact Reference:	<input type = "radio" name = "checkbox" value = "Email">Email<input type = "radio" name = "checkbox" value = "Telephone">Telephone </input><br>
    Available Date:		<input type = "date" name = "calendar"></input><br>
    Favourite Browser:	<input type = "text" list = "browser" size = "30" name = "browsers">	
    <datalist id = "browser">
        <option value = "Chrome"></option>
        <option value = "Firefox"></option>
        <option value = "Edge"></option>
        <option value = "Opera"></option>
        <option value = "Safari"></option>
    </datalist></input>
    <!--Feedback-->
    Feedback:
    Say Hello		<input type = "checkbox" name = "feedback" value = "Say Hello"></input>
    Complain		<input type = "checkbox" name = "feedback" value = "Complain"></input>
    Share Opinion		<input type = "checkbox" name = "feedback" value = "Share Opinion"></input>
    Share Joke		<input type = "checkbox" name = "feedback" value = "Share Joke"></input>
                    <br>
    <!--Message-->
    Message:
    <textarea type = "text" name = "message" style = "Width: 300px" rows = "15"></textarea>
    <input type = "submit" value = "Submit" name = "submit"></input>
        </pre></form>
    </body>

	

</html>
