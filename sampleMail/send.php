<?php

  $to = "askaru2014@gmail.com";
  $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'utf-8');
  $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'utf-8');

  // 条件分岐
  if ( mb_send_mail($to, $title, $message) === true ){
    $msg = "送信完了しました。内容を精査しておりますのでしばらくお待ちください。";
  }else{
    $msg = "エラーが発生しました。";
  }


?>
<!Doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>sampleMail</title>
    <style type="text/css">
    	#wrapp{
    		width: 80%;
    		margin: 10% auto;
    	}
    </style>
  </head>
  <body>
  	<div id="wrapp">
  		<p><?php echo $msg; ?></p>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>