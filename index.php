<?php include("header.php") ?>
<?php include("dbcon.php") ?>


    <h1>Dashboard</h1>

    <style>
        .flex{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
    
    <div class="row" style="gap: 20px 0;">
        <div class="col-md-4">
            <div class="card card-body shadow">
                <h3>Total Students</h3>
                <div class="flex">
                    <img src="./public/img/students.png" alt="Students" style="width: 50px; height: 50px;"/>
                    <span class="text-success">100</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body shadow">
                <h3>Male Students</h3>
                <div class="flex">
                    <img src="./public/img/students.png" alt="Students" style="width: 50px; height: 50px;"/>
                    <span class="text-success">50</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body shadow">
                <h3>Female Students</h3>
                <div class="flex">
                    <img src="./public/img/students.png" alt="Students" style="width: 50px; height: 50px;"/>
                    <span class="text-success">45</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body shadow">
                <h3>Lecturers</h3>
                <div class="flex">
                    <img src="./public/img/students.png" alt="Students" style="width: 50px; height: 50px;"/>
                    <span class="text-success">45</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body shadow">
                <h3>Male Lecturers</h3>
                <div class="flex">
                    <img src="./public/img/students.png" alt="Students" style="width: 50px; height: 50px;"/>
                    <span class="text-success">45</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body shadow">
                <h3>Female Lecturers</h3>
                <div class="flex">
                    <img src="./public/img/students.png" alt="Students" style="width: 50px; height: 50px;"/>
                    <span class="text-success">45</span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-body shadow">
                <h3>Students PieChart</h3>
                <!-- Chartjs pour recuperer les CDN -->
                 <div style="width: 50%; margin: 0 auto">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-body shadow">
                <h3>Lecturers PieChart</h3>
                <div style="width: 100%;">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>