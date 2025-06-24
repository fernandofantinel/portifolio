<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portfólio</title>
  <link rel="stylesheet" href="./styles/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style type="text/tailwindcss">
    @theme {
      --color-main-red: #E3646E;
      --color-main-purple: #BB72E9;
      --color-main-blue: #3996DB;
      --color-main-green: #82BC4F;
      --color-main-yellow: #EABD5F;
      --color-main-red: #E3646E;

      --color-gray-100: #E2E4E9;
      --color-gray-200: #C0C4CE;
      --color-gray-300: #878EA1;
      --color-gray-400: #292C34;
      --color-gray-500: #16181D;
      --color-gray-600: #0D0E11;
      }
    </style>
</head>

<body class="bg-[#16181d] overflow-x-hidden">
  <?php include('./components/header.php'); ?>

  <?php include('./components/hero.php'); ?>
</body>

</html>