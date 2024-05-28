<!doctype html>
<html lang="en">
    <head>
        <title>Summary</title>
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
            <div class="d-flex justify-content-center align-items-cente flex-column" style="padding: 1em 5em;">

                <div class="d-flex justify-content-center align-items-center w-100 flex-column">
                    <div class="d-flex justify-content-end flex-row">
                        <!-- day search -->
                        <form action="" class="form" method="post">
                            <div class="d-flex flex-row mb-2  me-3">
                                <input type="date" class="form-control me-2" name="date">
                                <input type="hidden" name="action_date_search" value="1">
                                <input type="submit" class="btn btn-primary" value="Date Search">
                            </div>
                        </form>

                        <!-- month search -->
                        <form action="" class="form" method="post">
                            <div class="d-flex flex-row mb-3">
                                <input type="month" class="form-control me-2" name="month">
                                <input type="hidden" name="action_month_search" value="1">
                                <input type="submit" class="btn btn-primary" value="Month Search">
                            </div>
                        </form>
                    </div>
                    
                    <h3><?= $current_show ?></h3>

                    <table class="table table-bordered w-50 mb-4">
                        <tr>
                            <th>Task Type</th>
                            <th>Number of Tasks</th>
                        </tr>
                        <tr>
                            <td>Development</td>
                            <td><?= $development_type_count ?></td>
                        </tr>
                        <tr>
                            <td>Test</td>
                            <td><?= $test_type_count ?></td>
                        </tr>
                        <tr>
                            <td>Document</td>
                            <td><?= $document_type_count ?></td>
                        </tr>
                    </table>

                    <table class="table table-bordered w-50">
                        <tr>
                            <th>Task Status</th>
                            <th>Number of Tasks</th>
                        </tr>
                        <tr>
                            <td>Working</td>
                            <td><?= $working_count ?></td>
                        </tr>
                        <tr>
                            <td>Finished</td>
                            <td><?= $finished_count ?></td>
                        </tr>
                        <tr>
                            <td>Working</td>
                            <td><?= $canceled_count ?></td>
                        </tr>
                    </table>
                </div>




                


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
