<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>

    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .but{
            width:100px;
            border-radius:25px;
            display:inline;
            margin:3px;
            color:white;
        }
        .but1{
            width:100%;
            border-radius:25px;
            display:inline;
            margin:3px;
        }
        .br{
            border-radius:25px;
        }
        .replink{
            text-decoration: none;
            color:#fff;
            border-radius: 20px;
            padding: 3px;
            width: 130px;  
        }
        
    </style>


</head>

<body>

    <?php include('header.php'); ?>


    <section>

        <p style="text-align: center; font-size: 20px;font-weight: bold;">Efficient and user-friendly Chabot Based Crime
            Registration & Crime Awareness System</p>
        <p style="text-align: center;font-size: 17px;color:darkcyan;"><u>Bureau of Police Research & Development
                Portal</u></p>

        <p> This portal is an initiative of Government of India to facilitate victims/complainants to report crime
            complaints online. This portal caters to complaints pertaining to crimes only with special focus on crimes
            against women and children. Complaints reported on this portal are dealt by law enforcement agencies/ police
            based on the information available in the complaints. It is imperative to provide correct and accurate
            details while filing complaint for prompt action. Please contact local police in case of an emergency or for
            reporting crimes .</p>
        <p><u>National police helpline number is 100.</u></p>
        <p><u> women helpline number is 181.</u></p>

        <img src="image/crimeg.jpg" alt="crime_pic" width="400px" height="300px">
        <img src="image/police.jpg" alt="cross_image" width="400px" height="300px">

    </section>

    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat bot !
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>

                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>


                        </div>

                        <!-- button -->
                        <div>

                            <button class="btn btn-success but" onclick="yes_fun()">Yes</button>
                            <button class="btn btn-danger but" onclick="no_fun()">No</button>



                        </div>
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <div id="demo">

                            </div>
                            <div id="murder">

                            </div>
                            <div id="robyes">

                            </div>

                            <!--    corruption functions -->
                            <div id="corruption1">

                            </div>
                           
                            <div id="corruption2">

                            </div>
                            <div id="corruption3">

                            </div>
                            <!-- end -->

                            <div id="kidnapp">

                            </div>
                            <div id="kidyes">

                            </div>

                            <div id="rapeyes">

                            </div>
                            <div id="rapeyes1">

                            </div>

                            <!-- murder -->
                            <div id="murdlink">

                            </div>



                        </div>


                        <!--input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">

                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">

                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
<script>
    function yes_fun() {
        document.getElementById("demo").innerHTML = " <p id='para_yes' class='botText'><span>Which of the Crime You are facing....</p> <button class='btn btn-primary but' data-inline='true' onclick='robery_fun()'>Robery</button><br><button class='btn btn-primary but' data-inline='true' data-theme='b' onclick='murder_fun()'>Murder</button><button class='btn btn-primary but' data-inline='true' data-theme='b' onclick='kidnapp_fun()'>Kidnapping</button><button class='btn btn-primary but' data-inline='true' data-theme='b' onclick='rape_fun()'>Rape</button><button class='btn btn-primary but' data-inline='true' data-theme='b' onclick='corruption_fun()'>Corruption</button></span>";

    }

    function no_fun() {
        document.getElementById("demo").innerHTML = " <p id='para_no' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p><div style='margin-right: 250px;'></div>";
    }
    //---------------------------------------------- robery functions -----------------------------------
    function robery_fun() {
        document.getElementById("murder").innerHTML = "<p id='para_rob' class='botText'><span><strong>Do you need robbery prevention tips ?</strong></span></p> <div style='margin-right: 250px;'><button class='btn btn-success but' onclick='rob_yes()'>yes</button><button class='btn btn-danger but' onclick='quit1_fun()'>No</button><br></div> ";

    }
    function rob_yes() {
        document.getElementById("robyes").innerHTML = "<p id='para_rob' class='botText'><span><strong>Trust your instincts</strong>.  If you sense trouble, get away as soon as possible<br><strong>Show confidence</strong>.  Walk at a steady pace, keep your head up and avoid carrying lots of packages… It can make you look defenseless. <br><strong>Don't look like an easy target</strong>.  Robbers want someone who will provide the least resistance. If you look like you know where you are going, walk with your head up and eyes alert, you will most likely be left alone.<br><strong>Be observant</strong>. Remain alert and observe the people around you.Know who is walking behind and in front of you. Things to watch for include suspicious persons or vehicles, people who are wearing inappropriate clothing for the weather (e.g. a long or heavy coat in warm weather), and people just loitering around. Walk in well-lit areas. If possible<br><strong> do not walk alone.</strong>  Be aware of your surroundings. If you think you are being followed, go to a crowded area.Do not carry large amounts of money.Carry keys in your hand.</span><span><strong>Do you want to Report a crime reagarding Robery</strong></span></p><div style='margin-right: 250px;'><button class='btn btn-success but' width='100%' onclick='robery_link()'>Yes</button><button class='btn btn-danger but' onclick='murder_no()'>No</button></div>";
    }
    function robery_link()
    {
        document.getElementById("murdlink").innerHTML = "<button class='btn btn-warning replink' width='100%'><p id='para_mur' class='botText'><a href='report.php'>Report Here</a></p></button>";
    }
    function quit1_fun() {
        document.getElementById("robyes").innerHTML = " <p id='para_no' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p><div style='margin-right: 250px;'></div>";
    }


    //----------------------------------------murder function start -------------------------------------------

    function murder_fun() {
        document.getElementById("murder").innerHTML = " <p id='para_mur' class='botText'><span>Murder is the unlawful killing of another human without justification or valid excuse, especially the unlawful killing of another human with malice aforethought<p id='para_mur' class='botText'> <span>Do you want to Report a crime reagarding Murder</span></p><div style='margin-right: 250px;'><button class='btn btn-success but' width='100%' onclick='murder_link()'>Yes</button><button class='btn btn-danger but' onclick='murder_no()'>No</button></div>";
    }

    function murder_link()
    {
        document.getElementById("murdlink").innerHTML = "<button class='btn btn-warning replink' width='100%'><p id='para_mur' class='botText'><a href='report.php'>Report Here</a></p></button>";
    }

    function murder_no() {
        document.getElementById("murdlink").innerHTML = " <p id='para_no' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p><div style='margin-right: 250px;'></div>";
    }

    //-------------------------------------------------- kidnapping function starts -----------------------------

    function kidnapp_fun(){
        document.getElementById("murder").innerHTML = " <p id='para_kidnapp' class='botText'><span> The principal motives for kidnapping are to subject the victim to some form of involuntary servitude, to expose him to the commission of some further criminal act against his person, or to obtain ransom for his safe release. More recently, kidnapping for the purpose of extortion has become a tactic of political revolutionaries or terrorists seeking concessions from a government</p><p id='para_corruption' class='botText'><span><strong>Do you want to know about types of kidnapping ? </strong></p><div style='margin-right: 250px;'><button class='btn btn-primary but1' width='100%' onclick='kidyes_fun()'>yes</button><button class='btn btn-primary but1' onclick='quit2_fun()'>no</button></div>";
    }
    
    function kidyes_fun() {
        document.getElementById("kidyes").innerHTML = " <p id='para_kidnapp' class='botText'><span>Basic kidnapping<br> Child abduction Express kidnapping<br> Virtual kidnapping Piracy<br>Ideological kidnapping (including by terrorists)</p><p id='para_kidnapp' class='botText'><span><strong>Do you want to Report a crime reagarding kidnapping ?</strong></span></p><div style='margin-right: 250px;'><button class='btn btn-success but' width='100%' onclick='kidnap_link()'>Yes</button><button class='btn btn-danger but' onclick='quit2_fun()'>No</button><div style='margin-right: 250px;'></div>";
    }
    function kidnap_link()
    {
        document.getElementById("murdlink").innerHTML = "<button class='btn btn-warning replink' width='100%'><p id='para_mur' class='botText'><a href='report.php'>Report Here</a></p></button>";
    }
    function quit2_fun() {
        document.getElementById("murdlink").innerHTML = " <p id='para_no' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p><div style='margin-right: 250px;'></div>";
    }

        
    //--------------------------------------------------- Rape function starts -------------------------------

    function rape_fun(){
        document.getElementById("murder").innerHTML = " <p id='para_rape' class='botText'><span>Rape is a type of sexual assault usually involving sexual intercourse or other forms of sexual penetration carried out against a person without that person's consent.</p> <p id='para_rape' class='botText'><span><strong>Do you want a awareness tips ? </strong> </p> <div style='margin-right: 250px;'><button class='btn btn-success but' width='100%' onclick='rapeyes_fun1()'>yes</button><button class='btn btn-danger but' onclick='rapeno_fun1()'>No</button></div>";
    }

    function rapeyes_fun1(){
        document.getElementById("rapeyes").innerHTML = " <p id='para_rape' class='botText'><span><strong>REPORTING A RAPE</strong> <br><strong>Call 911 in an emergency.<br>Call 808-5471 to report a rape.</strong><br>Over the years there has been a great deal of negative publicity devoted to the treatment of sexual assault victims by the criminal justice system. In the past, victims often felt that they, rather than the rapist, were on trial. Victims' prior sexual conduct became a routine part of court testimony, thereby raising questions regarding the victims morality and, therefore, the validity of the sexual assault charge. Fortunately, the last few years have brought about a sensitization of the criminal justice system to the plight of the sexual assault victim. Recent legislation has blocked the admissibility of questions relating to the victim's sex life. Additionally, law enforcement agencies are beginning to realign their approach to the investigation of rape cases by using specially trained sexual assault investigators who are sensitive to the needs and concerns of a sexual assault victim.</p><p class='botText'><span><strong>Do you want to Report a crime reagarding Rape ?</strong></span></p><div style='margin-right: 250px;'><button class='btn btn-success but' width='100%' onclick='rape_link()'>Yes</button><button class='btn btn-danger but' onclick='quit3_fun()'>No</button><div style='margin-right: 250px;'></p></div>";
    }
    function rapeno_fun1(){
        document.getElementById("rapeyes").innerHTML = " <p id='para_rape' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p></p></div>";
    }

    function rape_link()
    {
        document.getElementById("murdlink").innerHTML = "<button class='btn btn-warning replink' width='100%'><p id='para_mur' class='botText'><a href='report.php'>Report Here</a></p></button>";
    }

    function quit3_fun() {
        document.getElementById("murdlink").innerHTML = " <p id='para_no' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p><div style='margin-right: 250px;'></div>";
    }
   

//----------------------------------------------corruption data---------------------

    function corruption_fun(){
        document.getElementById("murder").innerHTML = " <p id='para_rape' class='botText'><span>Corruption is dishonest behavior by those in positions of power, such as managers or government officials. Corruption can include giving or accepting bribes or inappropriate gifts, double-dealing, under-the-table transactions, manipulating elections, diverting funds, laundering money, and defrauding investors.</p></span><div style='margin-right: 250px;'><button class='btn btn-primary but' width='100%' onclick='corruption_fun1()'>public sector</button><button class='btn btn-primary but' onclick='quit_fun()'>Quit</button></div>";
    }
    function corruption_fun1(){
        document.getElementById("corruption1").innerHTML = " <p id='para_rape' class='botText'><span>Corruption in public works and infrastructure has the obvious potential for harm to the public, and ranges from non-existent, inappropriately located and poorly functioning public services, to services that physically injure or kill members of the public.</p></span><div style='margin-right: 50px;'><button class='btn btn-primary but1' width='70%' onclick='corruption_fun2()'>State-owned Entp</button><button class='btn btn-primary but1' onclick='quit_fun()'>Quit</button></div>";
    }

    function corruption_fun2(){
        document.getElementById("corruption2").innerHTML = " <p id='para_rape' class='botText'><span>State-owned enterprises (SOEs) play a significant role in the global economy and provide important goods and services in sectors such as electricity, transportation and telecommunications. SOEs account for approximately ten per cent of the world's GDP.<p id='para_corruption' class='botText'><span>Preventive measures</p></span><div style='margin-right: 50px;'><button class='btn btn-primary br but1' width='70%' onclick='corruption_fun3()'>Codes of conduct</button><br><button class='btn btn-primary br but1' width='70%' onclick='corruption_fun4()'>System of rewards</button><br><button class='btn btn-primary br but1' width='70%' onclick='corruption_fun5()'>Accessibility</button><br><button class='btn btn-primary br but1' width='70%' onclick='corruption_fun6()'>Human resource management</button><br><br></div>";
    }

    function corruption_fun3(){
        document.getElementById("corruption3").innerHTML = " <p id='para_rape' class='botText'><span>Corruption prevention mechanisms often start with rules that prohibit certain types of conduct. Rules include legal prohibitions against corruption, and criminal and civil penalties directed at both the public and private sectors, but also include codes of conduct and ethics for public officials.</p><p class='botText'><span>hope u have understood ... Thank u !!!</span></p><div style='margin-right: 50px;'><br></div>";
        
    }
    function corruption_fun4(){
        document.getElementById("corruption3").innerHTML = " <p id='para_rape' class='botText'><span>The system should include extrinsic motivations such as a decent wage and merit-based appointments and promotions. Research suggests that an invariable link between lower wages for public officials and corruption does not exist in all countries, but that, in some cases, higher wages and merit-based promotions are associated with a lower probability of the acceptance of illegal payments.</p></span><div style='margin-right: 50px;'><br></div>";
    }

    function corruption_fun5(){
        document.getElementById("corruption3").innerHTML = " <p id='para_rape' class='botText'><span>This refers to the ability of all firms to access government contract opportunities. Full accessibility is required to increase competition in public procurement and foster the participation of small and medium-sized enterprises (SMEs) in public procurement. Access is fostered by reducing the bureaucracy inherent in the tender process, cutting the cost of participation in public procurement and streamlining the tender process.</p></span><div style='margin-right: 50px;'><br></div>";
    }

    function corruption_fun6(){
        document.getElementById("corruption3").innerHTML = " <p id='para_rape' class='botText'><span>The rules and procedures for hiring, rotation, promotion, professionalization, and training of civil servants also play a role in the combating of corruption in the public sector. For example, staff rotation in jobs that are vulnerable to corruption is expected to assist in preventing corrupt relationships from forming and in disrupting established corrupt relationships.</p></span><div style='margin-right: 50px;'><br><p class='botText'><span><strong>Do you want to Report a crime reagarding Rape ?</strong></span></p><div style='margin-right: 250px;'><button class='btn btn-success but' width='100%' onclick='corruption_link()'>Yes</button><button class='btn btn-danger but' onclick='quit4_fun()'>No</button><div style='margin-right: 250px;'></p></div>";
    }
    function corruption_link()
    {
        document.getElementById("murdlink").innerHTML = "<button class='btn btn-warning replink' width='100%'><p id='para_mur' class='botText'><a href='report.php'>Report Here</a></p></button>";
    }

    function quit4_fun() {
        document.getElementById("murdlink").innerHTML = " <p id='para_no' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p><div style='margin-right: 250px;'></div>";
    }

    function quit_fun() {
        document.getElementById("corruption1").innerHTML = " <p id='para_no' class='botText'><span>OK Thank you for sharing your experience with us , Have a great day ahead...</span></p><div style='margin-right: 250px;'></div>";
    }

    //-------------------------------------------- corruption data end ----------------------------------------------

    function Dowry_fun(){
        document.getElementById("murder").innerHTML = " <p id='para_rape' class='botText'><span>A dowry is a transfer of parental property, gifts, or money at the marriage of a daughter (bride). Dowry contrasts with the related concepts of bride price and dower.</p> <div style='margin-right: 250px;'><button class='btn btn-primary but' width='100%' onclick='robery_fun1()'>Dowry 1....</button><br><button class='btn btn-primary but' onclick='murder1_fun()'>Dowry 2...</button></div>";
    }

    

    




</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

</body>

</html>