<?php if(!isset($page_title)){$page_title = "Did not Work";}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/resources/css/styles.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <title> <?php echo $page_title; ?> </title>
</head>

<body class="font-[Poppins]">
  <header>
    <section class="flex justify-around p-8 bg-[#1746A2] text-white items-center">
      <div class="text-[2.5em] italic">Management System</div>
      <div class="flex gap-3 text-[1.2rem]">
        <div>Login</div>
        <div>Sign Out</div>
        <div>Help</div>
      </div>
    </section>
  </header>