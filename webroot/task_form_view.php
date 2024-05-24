<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Task Input Form</title>
</head>
<body>
    <form action="" method="post">
        <label for="task_type">ประเภทงาน</label>
        <select name="task_status" id="task_status">
            <option value="task_type_development">Development</option>
            <option value="task_type_test">Test</option>
            <option value="task_type_document">Document</option>
        <select><br>

        <label for="task_name">ชื่องาน</label>
        <input type="text" placeholder="ใส่ชื่องานที่ดำเนินการ" name="task_name" id="task_name"><br>

        <label for="task_period_start">เวลาที่เริ่มดำเนินการ</label>
        <input type="time" name="task_period_start" id="task_period_start"><br>

        <label for="task_period_end">เวลาที่เสร็จสิ้น</label>
        <input type="time" name="task_period_end" id="task_period_end"><br>

        <label for="task_status">สถานะ</label>
        <select name="task_status" id="task_status">
            <option value="task_status_working">ดำเนินการ</option>
            <option value="task_status_finished">เสร็จสิ้น</option>
            <option value="task_status_canceled">ยกเลิก</option>
        <select><br>

        <input type="submit">
    </form>
</body>
</html>