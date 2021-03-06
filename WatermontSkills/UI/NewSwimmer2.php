<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>New Swimmer Skills</title>
    <style>
        .col {
            float: left;
            width: 20%;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        h5{

            padding: 0% 22.5% 0% 25% ;
        }
    </style>
    <link rel="stylesheet" href="secondaryPage.css">
</head>

<body>
<h1> New Swimmer Skills</h1>
<form method="post" action="ConfirmedSubmission.html">
<h3>Entering</h3>
<div class="row">
    <div class="col"><input type="checkbox" name="entering" value="Crying" /> Crying</div>
    <div class="col"><input type="checkbox" name="entering" value="sitWall" /> Sitting on wall   </div>
    <div class="col"><input type="checkbox" name="entering" value="sitDiveBlock"/> Sitting from Block</div>

</div>
<div class="row">
    <div class="col"> <input type="checkbox" name="entering" value="NeedsPrompting" /> Needs Prompting </div>
    <div class="col"> <input type="checkbox" name="entering" value="jumpWall" /> Jump from wall </div>
    <div class="col"> <input type="checkbox" name="entering" value="kneelDiveBlock"/> Kneeling dive from block</div>
</div>

<div class="row">
    <div class="col"><input type="checkbox" name="entering" value="getsInImmediately"/> <label> In Immediately</label> </div>
    <div class="col"><input type="checkbox" name="entering" value="sitDiveWall" /> Sitting Dive from Wall</div>
    <div class="col"><input type="checkbox" name="entering" value="standDiveBlock"/>Standing Dive from Block</div>
</div>

<div class="row">
    <div class="col"> <input type="checkbox" name="entering" value="Steps" /> <label>Steps</label></div>
    <div class="col"> <input type="checkbox" name="entering" value="kneelDiveWall"/>Kneeling Dive from Wall </div>
    <div class="col"> <input type="checkbox" name="entering" value="racingStart"/> Racing Start</div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="entering" value="Ladder" /> Ladder</div>
    <div class="col"><input type="checkbox" name="entering" value="standDiveWall"/>Standing dive from Wall </div>

</div>


<h3>Exiting</h3>
<div class="row">
    <div class="col"><input type="checkbox" name="exiting" value="stepsAssitance"/> Steps with Assistance </div>
    <div class="col"><input type="checkbox" name="exiting" value="ladderAssistance"/> Ladder with Assistance </div>
    <div class="col"><input type="checkbox" name="exiting" value="wallAssitance"/> wall with Assistance </div>
</div>
    <div class="row">
        <div class="col"><input type="checkbox" name="exiting" value="stepsIndependently"/> Steps Independently </div>
        <div class="col"><input type="checkbox" name="exiting" value="ladderIndependently"/> Ladder Independently </div>
        <div class="col"><input type="checkbox" name="exiting" value="wallIndependently"/> Wall Independently </div>
    </div>
<h3>Floating</h3>
<h5 > Back </h5>
    <div class="row">
        <div class="col"><input type="checkbox" name="FloatingBack" value="HeadUp"/>Head Up</div>
        <div class="col"><input type="checkbox" name="FloatingBack" value="EarsIn"/>Ears in</div>
        <div class="col"><input type="checkbox" name="FloatingBack" value="Assistance"/>With Assistance</div>
    </div>
    <div class="row">
        <input type="checkbox" value="independently" name="FloatingBack"/> Independently
    </div>
    <h5>Front</h5>
    <div class="row">
        <div class="col"><input type="checkbox" name="FloatingFront" value="Assistance"/>With Assistance</div>
        <div class="col"><input type="checkbox" name="FloatingFront" value="Independently"/>Independently</div>
    </div>
<h3>Bubbles</h3>
    <div class="row">
        <div class="col"><input type="checkbox" name="Bubbles" value="Attempts"/>  Attempts </div>
        <div class="col"><input type="checkbox" name="Bubbles" value="MouthIn"/> Mouth In</div>
        <div class="col"><input type="checkbox" name="Bubbles" value="NoseIn"/> Mouth and Nose In</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="Bubbles" value="FaceIn"/>  Face In</div>
        <div class="col"><input type="checkbox" name="Bubbles" value="Rotary"/> Rotary Breathing</div>
    </div>

<h3>Kicking</h3>
    <h5>Back</h5>
<div class="row">
    <div class="col"><input type="checkbox" name="BackKick" value="OnWall"/> On wall </div>
    <div class="col"><input type="checkbox" name="BackKick" value="WithFloat"/> With Float </div>
    <div class="col"><input type="checkbox" name="BackKick" value="Propel"/> Propels with Float </div>
</div>
    <div class="row">
        <div class="col"><input type="checkbox" name="BackKick" value="Independent"/> Independent </div>
    </div>
    <h5>Front</h5>
    <div class="row">
        <div class="col"><input type="checkbox" name="FrontKick" value="OnWall"/> On wall </div>
        <div class="col"><input type="checkbox" name="FrontKick" value="WithFloat"/> With Float </div>
        <div class="col"><input type="checkbox" name="FrontKick" value="Propel"/>Propel with float</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FrontKick" value="Independently"/> Independently </div>
        <div class="col"><input type="checkbox" name="FrontKick" value="FaceIn"/> Independently with Face in </div>
        <div class="col"><input type="checkbox" name="FrontKick" value="Bubbles"/>Independently with Bubbles</div>
    </div>

    <div class="row">
        <div class="col"><input type="checkbox" name="FrontKick" value="RotaryBreathing"/> Independent W/ Rotary breathing</div>
    </div>

    <h3>Arms</h3>
   <h5>Front</h5>
<div class="row">
    <div class="col"><input type="checkbox" name="FrontArms" value="OnWall"/> On Wall</div>
    <div class="col"><input type="checkbox" name="FrontArms" value="UnderArms"/> With Float Under Arms</div>
    <div class="col"><input type="checkbox" name="FrontArms" value="inHands"/> With Float in Hands</div>
</div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FrontArms" value="PropelUnderArms"/> Propel w/float under arms</div>
        <div class="col"><input type="checkbox" name="FrontArms" value="PropelInHands"/> Propel W/ Float In hand</div>
        <div class="col"><input type="checkbox" name="FrontArms" value="PropelBubbles"/> Propel w/ float and bubbles</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FrontArms" value="PropelRotary"/> Float with Rotary breathing</div>
        <div class="col"><input type="checkbox" name="FrontArms" value="Independent"/> Propel independently</div>
        <div class="col"><input type="checkbox" name="FrontArms" value="IndependentFace"/> Propel Independently with face in</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FrontArms" value="IndependentBubbles"/> Propel Independently with Bubbles</div>
        <div class="col"><input type="checkbox" name="FrontArms" value="IndependentBreathing"/> Propel Independently with Breathing</div>
    </div>
    <h5>Back</h5>

    <div class="row">
        <div class="col"><input type="checkbox" name="BackArms" value="OnWall"/> On Wall</div>
        <div class="col"><input type="checkbox" name="BackArms" value="UnderArms"/> With Float Under Arms</div>
        <div class="col"><input type="checkbox" name="BackArms" value="inHands"/> With Float in Hands</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FrontArms" value="PropelUnderArms"/> Propel w/float under arms</div>
        <div class="col"><input type="checkbox" name="FrontArms" value="PropelInHands"/> Propel W/ Float In hand</div>
        <div class="col"><input type="checkbox" name="FrontArms" value="Independently"/> Propel Independently</div>
    </div>

<h3>Breaststroke</h3>
    <h5>Kick</h5>
    <div class="row">
        <div class="col"><input type="checkbox" name="BreastKick" value="flutter"/> Flutter Kick</div>
        <div class="col"><input type="checkbox" name="BreastKick" value="PartialFlutter"/> Partial Flutter Kick</div>
        <div class="col"><input type="checkbox" name="BreastKick" value="BothInwards"/> Both Feet pointed Inwards</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="BreastKick" value="OneInward"/> One Foot Pointed Inward</div>
        <div class="col"><input type="checkbox" name="BreastKick" value="LegalWall"/> Legal Kick on Wall</div>
        <div class="col"><input type="checkbox" name="BreastKick" value="LegalFloat"/> Legal Kick on Float</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="BreastKick" value="flutter"/> Legal kick Independently</div>
        </div>


    <h5>Arms</h5>

    <div class="row">
        <div class="col"><input type="checkbox" name="BreastArms" value="Standing"/> Arms Standing</div>
        <div class="col"><input type="checkbox" name="BreastArms" value="Float"/> Arms with Float</div>
        <div class="col"><input type="checkbox" name="BreastArms" value="FloatBreath"/> Arms with Float and Breath</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="BreastArms" value="FloatArms"/> Legal Arms with Float</div>
        <div class="col"><input type="checkbox" name="BreastArms" value="FloatBreath"/> Legal Arms and breathing with Float</div>
        <div class="col"><input type="checkbox" name="BreastArms" value="ArmsIndependent"/> Arms Independently</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="BreastArms" value="IndependentBreath"/> Arms and Breathing Independently</div>
        <div class="col"><input type="checkbox" name="BreastArms" value="LegalArms"/> Legal Arms Independent</div>
        <div class="col"><input type="checkbox" name="BreastArms" value="LegalBreath"/> Legal Arms and Breath Independently</div>
    </div>

<h3>Butterfly</h3>
    <h5>Kick</h5>
    <div class="row">
        <div class="col"><input type="checkbox" name="FlyKick" value="flutter"/> Flutter Kick</div>
        <div class="col"><input type="checkbox" name="FlyKick" value="PartialFlutter"/> Partial Flutter Kick</div>
        <div class="col"><input type="checkbox" name="FlyKick" value="BothInwards"/> Both Feet pointed Inwards</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FlyKick" value="OneInward"/> One Foot Pointed Inward</div>
        <div class="col"><input type="checkbox" name="FlyKick" value="LegalWall"/> Legal Kick on Wall</div>
        <div class="col"><input type="checkbox" name="FlyKick" value="LegalFloat"/> Legal Kick on Float</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FlyKick" value="flutter"/> Legal kick Independently</div>
    </div>


    <h5>Arms</h5>

    <div class="row">
        <div class="col"><input type="checkbox" name="FlyArms" value="Standing"/> Arms Standing</div>
        <div class="col"><input type="checkbox" name="FlyArms" value="Float"/> Arms with Float</div>
        <div class="col"><input type="checkbox" name="FlyArms" value="FloatBreath"/> Arms with Float and Breath</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FlyArms" value="FloatArms"/> Legal Arms with Float</div>
        <div class="col"><input type="checkbox" name="FlyArms" value="FloatBreath"/> Legal Arms and breathing with Float</div>
        <div class="col"><input type="checkbox" name="FlyArms" value="ArmsIndependent"/> Arms Independently</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="FlyArms" value="IndependentBreath"/> Arms and Breathing Independently</div>
        <div class="col"><input type="checkbox" name="FlyArms" value="LegalArms"/> Legal Arms Independent</div>
        <div class="col"><input type="checkbox" name="FlyArms" value="LegalBreath"/> Legal Arms and Breath Independently</div>
    </div>


<h3>Starts</h3>
    <div class="row">
        <div class="col"><input type="checkbox" name="Starts" value="Free"/> Free</div>
        <div class="col"><input type="checkbox" name="Starts" value="Back"/> Backstroke</div>
        <div class="col"><input type="checkbox" name="Starts" value="Breast"/> BreastStroke</div>
    </div>

    <div class="row">
       <div class="col"><input type="checkbox" name="Starts" value="Fly"/> ButterFly</div>
    </div>
<h3>Finishes</h3>

    <div class="row">
        <div class="col"><input type="checkbox" name="Finishes" value="Free"/> Free</div>
        <div class="col"><input type="checkbox" name="Finishes" value="Back"/> Backstroke</div>
        <div class="col"><input type="checkbox" name="Finishes" value="Breast"/> BreastStroke</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="Finishes" value="Fly"/> ButterFly</div>
    </div>
<h3>Turns</h3>
    <div class="row">
        <div class="col"><input type="checkbox" name="Turns" value="Free"/> Free</div>
        <div class="col"><input type="checkbox" name="Turns" value="Back"/> Backstroke</div>
        <div class="col"><input type="checkbox" name="Turns" value="Breast"/> BreastStroke</div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="Turns" value="Fly"/> ButterFly</div>
        <div class="col"><input type="checkbox" name="Turns" value="IM"/> IM </div>
    </div>

    <h3>Extra Comments</h3>
    <textarea cols="40" rows="10" name="ExtraComments"></textarea>

    <br/><br/>
    <input type="submit" value="Submit"/>
</form>
</body>
<?php
$user = 'root';
$password = 'root';
$db = 'watermontskills';
$host = 'localhost';
$port = 3306;

$link = new mysqli("$host:$port",
$user,
$password,
$db
);

$sql = "INSERT INTO swimmerid (swimmerID,firstname, lastname, age, gender, extraInfo)
        VALUES( 1,'Parker','Meek',12,'M','hello')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        ?>
 </html>