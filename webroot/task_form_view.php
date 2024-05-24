<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <style>
            body {
                height: 100dvh;
            }
        </style>
    </head>

    <body>
        <header>
            <?php include_once('./nav.php') ?>
        </header>



        <main class="d-flex justify-content-center align-items-center flex-grow-1 h-100">
            <div class="card p-4" style="width: 25rem;">
                <form action="" method="post" class="form">
                    <label for="task_type" clas="form-label">ประเภทงาน</label>
                    <select name="task_type" id="task_type" class="form-select">
                        <option value="development">Development</option>
                        <option value="test">Test</option>
                        <option value="document">Document</option>
                    <select><br>

                    <label for="task_name" class="form-label">ชื่องาน</label>
                    <input type="text" placeholder="ใส่ชื่องานที่ดำเนินการ" name="task_name" id="task_name" class="form-control"><br>

                    <label for="task_period_start" class="form-label">เวลาที่เริ่มดำเนินการ</label>
                    <input type="datetime-local" name="task_period_start" id="task_period_start" class="form-control"><br>

                    <label for="task_period_end" class="form-label">เวลาที่เสร็จสิ้น</label>
                    <input type="datetime-local" name="task_period_end" id="task_period_end" class="form-control"><br>

                    <label for="task_status" class="form-label">สถานะ</label>
                    <select name="task_status" id="task_status" class="form-select">
                        <option value="working">ดำเนินการ</option>
                        <option value="finished">เสร็จสิ้น</option>
                        <option value="canceled">ยกเลิก</option>
                    <select><br>


                    <input type="hidden" name="action_insert" value="1">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </main>




        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
