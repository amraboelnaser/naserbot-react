<?php
session_start();
session_destroy();
header('location: index.php?i=Tạm Biệt! Cảm Ơn Các Bạn Đã Sử Dụng Website của chúng tôi');
?>