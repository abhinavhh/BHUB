<?php
include('header.php');
?>
<style>


        .chat-wrapper{
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 10px;
            height: 400px;
            overflow-y: scroll;
            flex-direction: column;
            display: flex;
            flex-direction: column-reverse; /* Reverse the order of the messages */
        }

        .message-wrapper {
            margin-bottom: 10px;
        }

        .message-bubble {
            display: inline-block;
            max-width: 70%;
            padding: 10px;
            border-radius: 10px;
            color: #434242;
            font-size: 14px;
        }

        .message-bubble1 {
            display: inline-block;
            max-width: 70%;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: 14px;
        }

        .sent-bubble {
            background-color: #0695FF;
            align-self: flex-end;
        }

        .received-bubble {
            background-color: #fff;
            align-self: flex-start;
        }

        .message-time {
            font-size: 12px;
            color: #777;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .message-input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 14px;
        }

        .send-button {
            background-color: #5BC0F8;
            color: #fff;
            border: none;
            padding: 8px;
            border-radius: 50%;
            margin-left: 5px;
            cursor: pointer;
        }

        .send-button i {
            font-size: 16px;
        }

        .chat-header {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 10px;
        }

        .chat-header-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .chat-header-name {
            font-weight: bold;
        }
    </style>
<?php
include('connection.php');

//echo $currentTime;

if(isset($_POST['ccc']))
{
    
	date_default_timezone_set('Asia/Kolkata');
    $date = date( 'Y-m-d h:i:s');
	//$date = date('d-m-Y H:m');
    mysqli_query($con,"INSERT INTO chat(sid,message,date_time,userid,type) VALUES('$_REQUEST[id]','$_POST[msgd]','$date','$_SESSION[uid]','user')");
   // header("location:chat.php");
}



?>


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="text-primary font-weight-normal text-uppercase mb-3">Donate Books</h1>
                </div>
            </div>
            <div class="row pb-4">

            </div>
			<section class="section">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="container">
                            <!-- Chat Header -->
                            <div class="chat-header">
								<h3>Admin</h3>
                            </div>
                            <!-- Chat Messages -->
                            <div class="chat-wrapper" id="message">
                                <?php
                                $sel = "SELECT * FROM chat WHERE (userid='$_SESSION[uid]' and sid='$_REQUEST[id]')  OR  (userid='$_REQUEST[id]' and sid='$_SESSION[uid]')  ORDER BY id DESC";
                               // echo $sel;
								$result = mysqli_query($con, $sel);
                                $rows = mysqli_num_rows($result);
                                while($row = mysqli_fetch_array($result))
                                {
                                    $time24Hr = $row['date_time']; 
                                    $time12Hr = date("h:i A", strtotime($time24Hr));
                                    if($row['userid'] == $_SESSION['uid'])
                                    {
                                        echo "<div class='message-wrapper sent' style='text-align:right'>";
                                        echo "<div class='message-bubble1 sent-bubble' style='text-align:right'>";
                                        echo "<span class='message-text' style='text-align:right'>$row[message]</span>";
                                        echo "<br>";
                                        echo "<span class='message-time' style='text-align:right'>$time12Hr</span>";
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                    else
                                    {
                                        echo "<div class='message-wrapper received'>";
                                        echo "<div class='message-bubble received-bubble'>";
                                        echo "<span class='message-text'>$row[message]</span>";
                                        echo "<br>";
                                        echo "<span class='message-time'>$time12Hr</span>";
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                }
                                ?>
                            </div>
                            <!-- Message Input -->
                            <form action="" method="post">
                                <div class="input-wrapper">
                                    <input type="text" class="message-input" name="msgd" placeholder="Message" required>
                                    <button type="submit" class="send-button" name="ccc"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
			
        </div>
    </div>
    <!-- Blog End -->


<?php
include('footer.php');
?>