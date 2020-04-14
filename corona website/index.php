<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
    
    <nav class="navbar navbar-expand-lg  navbar-dark bg-danger">
        <a class="navbar-brand pl-5" href="#" >COVID-19@Aditya nath mishra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
            
                <li class="nav-item active">
                        <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#aboutid">about</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#sympid">symptoms</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#preventid">privention</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#contactid">contact</a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="https://api.covid19api.com/summary">@Covid-19-API</a>
                </li>
            
            </ul>
        </div>
    </nav>

    <div class="main_header">
        <div class="row w-100 h-100">
            
            <div class=" col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="image/unity1.jpg" width="400" height="400">
                </div>
            </div>

            <div class=" col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1> Let's Stay Safe & Fight Against Cor <span class="corona_rot"> <img src="image/0.png" height="55" width="55"></span> na Virus. 
                    </h1>
                </div>          
            </div>

        </div>
    </div>

<!-- *****************************************corona update******************************************* -->
    
<section>

    <div class="corona_update container-fluid">
        <div class="mb-3 mt-5">
            <h3 class="text-uppercase  text-center">covid-19 updates</h3>
        </div>
<!-- **************************************************How to make table********************************************* -->
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>Country</th>
                    <th>TotalConfirmed</th>
                    <th>TotalRecovered</th>
                    <th>TotalDeaths</th>
                    <th>NewConfirmed</th>
                    <th>NewRecovereds</th>
                    <th>NewDeaths</th>
                </tr>
            </table>
        </div>





</section>


<!-- ***************************************** About section ********************************************* -->

<section>
       <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
            <div class="section_header text-center mb-5 mt-4">    
                <h1> About Covid-19</h1>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quibusdam consequuntur ab! Ullam 
                    facilis, suscipit excepturi non quis vitae distinctio soluta optio hic id voluptatem quos accusamus porro ad nihil.</p> -->
            </div>

            <div class="row pt-5 mt-5">
                <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                    <img src="image/corona1.jpg" width="400" height="200" >
                </div>

                <div class="col-lg-6 col-md-6 col-12 ">
                    <h1>What is a coronavirus?</h1>
                    <p>A new Chinese coronavirus, a cousin of the SARS virus, has infected hundreds since the outbreak began in Wuhan, China, in December. Scientist Leo Poon,
                         who first decoded the virus, thinks it likely started in an animal and spread to humans.</p>
                    <p>Coronaviruses are a large group of viruses that are common among animals. In rare cases, they are what scientists call zoonotic, meaning they can be transmitted from animals to humans,
                         according to the US Centers for Disease Control and Prevention.</p>
                </div>

                </div> 
            </div>
        </div>    
</section>
<!-- *********************************************************symptoms*************************************************************** -->


<section>
        <div class="container-fluid pt-5 pb-5" id="sympid">
            <div class="section_header text-center mb-5 mt-4">    
                <h1>Coronavirus Symptoms</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="https://media1.tenor.com/images/802b11c8a5a614c15b0107142e468b40/tenor.gif?itemid=5279043" class="img-fluid" width="120" height="120">
                            <figcaption> Cough </figcaption>
                        </figure>       
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="https://media1.tenor.com/images/8cbe1aed02c1a9e146d0e1c6f5c655e7/tenor.gif?itemid=7847407" class="img-fluid " width="120" height="120">
                            <figcaption> Runing nose</figcaption>
                        </figure>       
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="https://static.onecms.io/wp-content/uploads/sites/38/2019/07/26204613/190726-fever-guide-gif.gif" class="img-fluid " width="120" height="120">
                            <figcaption> Fever </figcaption>
                        </figure>       
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="https://media.giphy.com/media/11a8FU9KUpbmms/source.gif" class="img-fluid " width="120" height="120">
                            <figcaption> Cold </figcaption>
                        </figure>       
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="https://www.letsbeatms.pk/wp-content/uploads/fatigue.gif" class="img-fluid " width="120" height="120">
                            <figcaption> Tiredness </figcaption>
                        </figure>       
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="https://media.giphy.com/media/nDpfwQNnYmWru/giphy.gif" class="img-fluid " width="120" height="120">
                            <figcaption> Difficulty breathing </figcaption>
                        </figure>       
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                        <h1>Coronavirus symptoms:</h1>
                        <p>The viruses can make people sick, usually with a mild to moderate upper respiratory tract illness, similar to a common cold. Coronavirus symptoms include a runny nose, 
                            cough, sore throat, possibly a headache and maybe a fever, which can last for a couple of days..</p>
                        <p>For those with a weakened immune system, the elderly and the very young, there's a chance the virus could cause a lower,
                             and much more serious, respiratory tract illness like a pneumonia or bronchitis.</p>
                    </div>

                </div>
            </div>

        </div>


</section>

<!-- **********************************************prevention***************************************** -->

<section>
        <div class="container-fluid pt-2 pb-5" id="preventid">
            <div class="section_header text-center mb-5 mt-4">    
                <h1>Prevention from Coronavirus</h1>
            </div>

            <div class="row ml-5 pt-5 ">
                
                <div class=" col-lg-6 col-md-6 col-12 pt-5">
                    <img src="image/corona2.jpg" class="img-fluid" width="500" height="450">
                </div>
                
                <div class=" col-lg-6 col-md-6 col-12 pt-5">
                    <img src="https://s3.amazonaws.com/kadn-com/img/2020/03/17174345/social-distance-.png" class="img-fluid " width="500" height="450">
                </div>
                
                <div class=" col-lg-6 col-md-6 col-12 pt-5">
                    <img src="https://www.creativefabrica.com/wp-content/uploads/2020/03/25/Stay-Home-Stay-Safe-Graphics-3723422-1.jpg" class="img-fluid " width="500" height="450">
                </div>
                
                <div class=" col-lg-6 col-md-6 col-12 pt-5">
                    <img src="https://cdn.images.express.co.uk/img/dynamic/11/590x/secondary/Washing-hands-1003727.jpg" class="img-fluid " width="500" height="450">
                </div>

                <div class="col-lg-12 col-md-12 col-12 text-center mt-5">
                        <h1>Coronavirus Prevention:</h1>
                        <p>There is no vaccine to protect against this family of viruses, at least not yet. Trials for a MERS vaccine are underway. The US National Institutes of Health is working on a vaccine against the new virus, but it will be months until clinical trials get underway and more than a year until it might become available.</p>
                        <p>You may be able to reduce your risk of infection by avoiding people who are sick. Try to avoid touching your eyes, nose and mouth. Wash your hands often with soap and water and for at least 20 seconds.</p>
                        <p>Awareness is key. If you are sick and have reason to believe it may be the Wuhan coronavirus due to travel to the region or coming into contact with someone who has been there, you should let a health care provider know and seek treatment early.</p>                
                        <p>Cover your mouth and nose when you cough or sneeze, and disinfect the objects and surfaces you touch.</p>
                </div>
            
            </div>

        </div>

</section>





<!-- ******************************************************************contact**************************************************************** -->

<section>

            <div class="container-fluid pt-5 pb-5" id="contactid">
                    <div class="section_header text-center mb-5 mt-4">    
                        <h1>Contact ASAP:</h1>
                    </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-12 ">
                            <form action="" method="POST">
                                    <div class="form-group">
                                        <label >Username</label>
                                        <input type="text" class="form-control" name="username"
                                         placeholder="name" autocomplete="off" required>
                                    </div>

                                    <div class="form-group">
                                        <label >Email </label>
                                        <input type="email" class="form-control" name="email"
                                        placeholder="name@example.com" required autocomplete="off">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label >Mobile </label>
                                        <input type="number" class="form-control" name="mobile"
                                         placeholder="mobile" autocomplete="off" required>
                                    </div>

                                    <div class="form-group">
                                        <label >Select Symptom</label><br>

                                        <div class="custom-control custom-checkbook custom-control-inline text-capitalize">
                                            <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                                            <label class="custom-control-label" for="customcheckbox1">Cold</label>
                                        </div>
                                        <div class="custom-control custom-checkbook custom-control-inline text-capitalize">
                                            <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                                            <label class="custom-control-label" for="customcheckbox2">Fever</label>
                                        </div>
                                        <div class="custom-control custom-checkbook custom-control-inline text-capitalize">
                                            <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                                            <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
                                        </div>
                                        <div class="custom-control custom-checkbook custom-control-inline text-capitalize">
                                            <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="weak">
                                            <label class="custom-control-label" for="customcheckbox4">Weakness</label>
                                        </div>

                                    </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                                        </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>





            </div>
</section>

<section>

            <div class="container-fluid pt-5 pb-5" id="contactid">
                    <div class="section_header text-center mb-5 mt-4">    
                        <h3>Central Helpline Number: Toll free: 1075+91-11-23978043<br>
Uttar Pradesh Helpline Number: 18001805145 <br>Email: ncov2019@gmail.com</h3>
                    </div>
            </div>
</section>

<footer class="mt-5">
    <div class="footer-style text-white text-center container-fluid ">
        <p>Copyright by @aditya-mjpru8090</p>
    </div>
</footer>


<script>




function fetch(){
    $.get("https://api.covid19api.com/summary",
    
       function (data){
            // console.log(data['Countries'].length)
            var tbval = document.getElementById('tbval');

            for( var i=1 ;i<(data['Countries'].length); i++){
                var x = tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color = '#fff';

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';
                tbval.rows[i].cells[1].style.color = '#fff';

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#7bb7d8';
                tbval.rows[i].cells[2].style.color = '#fff';

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#f36e23';
                tbval.rows[i].cells[3].style.color = '#fff';

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';
                tbval.rows[i].cells[4].style.color = '#fff';

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#9cc850';
                tbval.rows[i].cells[5].style.color = '#fff';

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#f36e23';
                tbval.rows[i].cells[6].style.color = '#fff';
            }
            

       }
    );
}







</script>




</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk ="";

    foreach($symp as $chk1){
        $chk .= $chk1."," ;
    }

    $insertquery = " insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg') ";

    $query = mysqli_query($con , $insertquery);

    if($query){
        ?>
        <script>
            alert("Inserted successful")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("No insertion")
        </script>
        <?php
    
    }




}




?>