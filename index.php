<?php
// بيانات السيرة الذاتية
$name = "كريم بدر";
$job_title = "مطور ويب";
$contact_info = [
    "الهاتف" => "01001026804",
    "البريد الإلكتروني" => "kareem@example.com",
    "العنوان" => "مدينة القاهرة، مصر"
];
$skills = ["PHP", "HTML", "CSS", "JavaScript", "MySQL"];
$experience = [
    "2022 - الآن: مطور ويب في شركة XYZ.",
    "2020 - 2022: متدرب في تطوير الواجهات الأمامية."
];
$education = [
    "بكالوريوس في علوم الحاسب، جامعة القاهرة، 2020."
];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>السيرة الذاتية</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?php echo $name; ?></h1>
            <p><?php echo $job_title; ?></p>
        </div>
        <div class="section">
            <h2>معلومات الاتصال</h2>
            <ul>
                <?php foreach ($contact_info as $key => $value): ?>
                    <li><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="section">
            <h2>المهارات</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="section">
            <h2>الخبرات</h2>
            <ul>
                <?php foreach ($experience as $job): ?>
                    <li><?php echo $job; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="section">
            <h2>التعليم</h2>
            <ul>
                <?php foreach ($education as $degree): ?>
                    <li><?php echo $degree; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
