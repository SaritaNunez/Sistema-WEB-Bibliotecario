<?
session_start();
session_unset();
session_destroy();
?>
<html>
<head>
</head>
<body>
<script type="text/javascript">
alert("Cerrando sesion");
</script>
<script>
location.href="index.html";
</script>
</body>
</html>