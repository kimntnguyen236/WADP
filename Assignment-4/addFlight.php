<?php
session_start();
include_once 'connectDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location: login.html");
    exit();
}
$id = $_SESSION["id"];
?>
<!DOCTYPE html>
<!--
Nhập thông tin của chuyến bay mới
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <section style="border: 1px black solid; margin-top: 30px">
                <div class="register" style="margin-left: 100px">
                    <h2>Insert Flight</h2>
                    <hr>
                    <form id="formnhap" class="normal_form" action="addFlight_saveDB.php">
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3"> AircraftCode </div>
                            <div class="col-sm-3">
                                <input type="text" name="txtCode" id="txtCode"  required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3"> Flight Type </div>
                            <div class="col-sm-3">
                                <input type="text" name="txtFType" id="txtFType" required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3"> Source </div>
                            <div class="col-sm-3">
                                <select name="txtSource" id="txtSource" required style="width: 300px">
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="New York" selected>New York</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Italy">Italy</option>
                                    <option value="France">France</option>
                                    <option value="England">England</option>
                                    <option value="Chicago">Chicago</option>
                                    <option value="California">California</option>
                                    <option value="Tokyo">Tokyo</option>
                                    <option value="Fukuoka">Fukuoka</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Sydney">Sydney</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3"> Destination </div>
                            <div class="col-sm-3">
                                <select name="txtDestination" id="txtDestination" required style="width: 300px">
                                    <option value="Vietnam" selected>Vietnam</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="New York">New York</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Italy">Italy</option>
                                    <option value="France">France</option>
                                    <option value="England">England</option>
                                    <option value="Chicago">Chicago</option>
                                    <option value="California">California</option>
                                    <option value="Tokyo">Tokyo</option>
                                    <option value="Fukuoka">Fukuoka</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Sydney">Sydney</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3"> DepTime </div>
                            <div class="col-sm-3">
                                <input type="time" name="txtTime" id="txtTime" required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3"> Journey Hours </div>
                            <div class="col-sm-3">
                                <input type="number" name="txtHrs" id="txtHrs" min="1" max="20" required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-12"><input type="submit" name="btnOK" value="Create"><input type="reset" name="btnReset" value="Reset"></div>

                        </div>
                    </form>
                    <br>
                    <a href="FlightControl.php">List of Flights</a> <br><br>
                </div>
            </section>
        </div>
        <script>
            document.getElementById("formnhap").onsubmit = function () {
                var FType = document.getElementById("txtFType").value.trim();
                var From = document.getElementById("txtSource").value;
                var To = document.getElementById("txtDestination").value;
                var Source = document.getElementById("txtSource").value.trim();
                var Destination = document.getElementById("txtDestination").value.trim();
                var r = new RegExp("(Boeing|Airbus)", "i")
                if (r.test(FType) == false) {
                    alert("Flight Type only accept 'Boeing' or 'Airbus' ");
                    document.getElementById("txtFType").focus();
                    return false;
                }
                if(Source == Destination){
                    alert("Hai địa điểm không được trùng nhau! Vui lòng chọn lại điểm đi/ điểm đến. ");
                    return false;
                }
            }
        </script>
    </body>
</html>
