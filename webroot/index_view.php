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
    </head>

    <body>
        <header>
            <?php require_once('./nav.php'); ?>
        </header>



        <main>
            <div class="p-5">
                <table class="table table-bordered table-striped align-middle text-center">
                    <th>Task Type</th>
                    <th>Task title</th>
                    <th>Start time</th>
                    <th>End time</th>
                    <th>Status</th>
                    <th>Added Time</th>
                    <th>Modified Time</th>
                    <th>Update</th>
                    <th>Delete</th>
                
                    <?php foreach($tasks as $task): ?>
                        <tr class="">
                            <td><?= $task['task_type'] ?></td>
                            <td><?= $task['task_name'] ?></td>
                            <td><?= $task['task_period_start'] ?></td>
                            <td><?= $task['task_period_end'] ?></td>
                            <td><?= $task['task_status'] ?></td>
                            <td><?= $task['record_timestamp'] ?></td>
                            <td><?= $task['last_update_timestamp'] ?></td>
                            <td><a href="./task_update.php/?id=<?= $task['id'] ?>" class="btn btn-primary">Update</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
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
