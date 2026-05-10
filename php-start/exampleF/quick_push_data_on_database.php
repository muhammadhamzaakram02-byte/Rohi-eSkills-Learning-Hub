<!-- quick and fast method  -->
<?php
mysqli_query(
    mysqli_connect('localhost', 'root', '', 'example-database'),
    "INSERT INTO `example-table` (`name`,`age`) VALUES ('{$_POST['name']}', '{$_POST['age']}')"
);
header("Location: quick_get_data_from_database.php");
?>

<!-- نام اور عمر یہ کالم ہے -->
<!-- ہمارے ڈیٹا بیس کے ٹیبل کے ہم صرف اتنے کالم لکھیں گے جتنے کالم میں ہم ڈیٹا محفوظ کرنا چاہتے -->
<!-- ہیں باقی نہیں لکھیں گے ڈیٹا بیس خود بخود ان کے اگے صفر لکھ دے گا   -->