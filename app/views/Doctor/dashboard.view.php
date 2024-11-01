

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/doc_dashboard.css?v=1.1">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #E0EBFF;
        }
    </style>
</head>
<body>
    <div class="flex h-full">
       <?php 
        $this -> renderComponent('navbar',$active);
        ?>
    
        <div class="relative" style="background-color: rgb(255, 255, 255);width: 100%; margin-top: 6%;margin-bottom: 2%;overflow-y: auto;overflow-x: hidden;">
            <div class="font-['Poppins'] text-2xl" style="margin-left: 15px;margin-top: 15px;font-weight: bold;">
                <p>Doctor Portal</p>
                <div class="w-52 border-blue-500" style="border-width: 1px;margin-top: 5px;"></div>
            </div>

            <div class="items" style="justify-content: space-between;">
                <div style="margin-top: 25px;">
                    <div style="margin-left: 25px;">
                        <div class="flex" style="gap: 20px; align-items: center;margin-bottom: 20px;">
                            <div>
                                <img src="./assets/images/user.png" alt="" style="width: 100px ;min-width: 80px;">
                            </div>
                            <div>
                                <p class="font-['Poppins'] " style="font-weight: bold; font-size: 35px;margin-bottom: 5px;">Welcome</p>
                                <p class="font-['Poppins'] " style="font-weight: bold; font-size: 50px;margin-top: -15px;max-width: 350px;line-height: 1.0;">Dr.SANDARU Danesh</p>
                            </div>
                        </div>
    
                        <div class="flex">
                            <div class="w-2 h-40 bg-blue-400" style="margin-right: 10px;"></div>
                            <div class=" h-38 text-black font-['Poppins']" style="width: 200px;;font-size: 27px; font-weight: 500;"> Dr. Sandaru, you have  8 appointments today</div>
                        </div>

                        <div class="font-['Poppins']" style="display: flex;margin-top: 50px;gap: 20px;">
                            <p class="checkUp">Start Patient Check-up</p>
                            <button style="width: 100px;background-color: rgb(44, 34, 119);font-size: 28px;color: white;border-radius: 10px;"><a href="/MVC-Copy/public/doctor/patientQueue">Start</a></button>
                        </div>
                    </div>
                </div>

                <div class="container2">
                    <div class="graph">
                        <div>
                            <img src="./assets/images/cal.png" alt="" style="width: 350px;">
                        </div>
                        <div>
                            <img src="./assets/images/line-graph.webp" alt="" style="width: 300px;">
                        </div>
                    </div>
                    <div class="stat">
                        <div class="box" style="background-color: #00C38F;">
                            <div class="box-item" >
                                <img src="./assets/images/schedule.png">
                                <p> 20 Apointments</p>
                            </div>
                        </div>
                        <div class="box" style="background-color: #8765FA;">
                            <div class="box-item" >
                                <img src="./assets/images/patient.png">
                                <p> 12 New Patients</p>
                            </div>
                        </div>
                        <div class="box" style="background-color: #B16FA2;">
                            <div class="box-item" >
                                <img src="./assets/images/patient.png">
                                <p>Hiii</p>
                            </div>
                        </div>
                        <div class="box" style="background-color: #5D93FF;">
                            <div class="box-item">
                                <img src="./assets/images/patient.png">
                                <p>Hiii</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>