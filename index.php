<?php
if(isset($_POST['name'])){


 $server="localhost";
 $username="muzakkir";
 $password="root";
 $db="chola_tour";


 $con = mysqli_connect($server, $username, $password , $db);

 if(!$con)
{
    die("Connection to this databasee failed due to". 
    mysqli_connect_error());
}


// else{
//     echo "Connected Successfully";
// }

$sno = $_POST['sno'];
$name = $_POST['name'];
$class = $_POST['class'];
$ph = $_POST['ph'];
$time = $_POST['time'];
$id = $_POST['id'];
$iname= $_iname['iname'];




$sql=" INSERT INTO `tour` (`sno`, `name`, `class`, `ph`, `time`, `id`, `iname`) VALUES ('1', 'dhhddh', 'eejeje', '1232222221', 'hhdhdhdh', 'dhhdnddh', 'dhhdd')";
echo $sql;

$con == new mysqli('localhost', 'root' ,'test' );
if($con->query($sql) == true){
    echo "sucessfully";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>THHANJAVUR</title>
  <link rel="stylesheet" href="k.css" type="text/css">

 
  


<body>
  <h1>
    SYMBOL OF CH0LA DYNAST
</h1>



<img src="t.jpg" height="720px" width="1080px">


<marquee behavior="scroll" direction="left"> RAJA RAJA CHOLAN</marquee>
<h2>
  Brihadeeswara Temple
</h2>
<p>
 ortified wall now runs around this moat. The two walls have ornate gateways called the gopurams. These are made from stone and display entablature. The main gateways are on the east side. The first one is called the Keralantakan tiruvasal, which means the "sacred gate of the Keralantakan". The word Keralantakan was the surname of king Rajaraja who built it. About a 100 metres (330 ft) ahead is the inner courtyard gopuram called the Rajarajan tiruvasal. This is more decorated than the Keralantakan tiruvasal, such as with its adhishthanam relief work narrating scenes from the Puranas and other Hindu texts.[29] The inner eastern gopuram leads to a vast courtyard, in which the shrines are all signed to east–west and north-west cardinal directions. The complex can be entered either on one axis through a five-story gopuram or with a second access directly to the huge main quadrangle through a smaller free-standing gopuram. The gopuram of the main entrance is 30 m high, smaller than the vimana.[10]The main temple-related monuments and the great tower is in the middle of this courtyard.[29] Around the main temple that is dedicated to Shiva, are smaller shrines, most of which are aligned axially. These are dedicated to his consort Parvati, his sons Subrahmanya and Ganesha, Nandi, Varahi, Karuvur deva (the guru of Rajaraja Chola), Chandeshvara and Nataraja.[10] The Nandi mandapam has a monolithic seated bull facing the sanctum. In between them are stairs leading to a columned porch and community gathering hall, then an inner mandapa connecting to the pradakshina patha, or circumambulation path. The Nandi (bull) facing the mukh-mandapam weighs about 25 tonnes.[33] It is made of a single stone and is about 2 m in height, 6 m in length and 2.5 m in width. The image of Nandi is a monolithic one and is one of the largest in the country.[34]

<h2>Preservation & Restoration</h2>
As a world heritage monument, the temple and the premises comes under the Archaeological Survey of India (ASI) which falls under the Ministry of Culture of the Government of India, to ensure safety, preservation and restoration. The surrounding facilities have been upgraded to create an ambience worthy of the grandeur of this ancient marvel with lighting, signage and facilities for devotees and visitors. The lighting of the monument is designed to enhance the natural color of the stone along with the sculptural forms adorning all corners of the temple. The restoration has been undertaken by the Archaeological Survey of India that commissioned Sheila Sri Prakash Indian architect and designer to lead the design[35]


Brihadeeswara Temple Gopuram at Night
Sanctum and the Sri-vimana


Different views of the Sri-vimana.
The sanctum is at the center of the western square. It is surrounded by massive walls that are divided into levels by sharply cut sculptures and pilasters providing deep bays and recesses. Each side of the sanctuary has a bay with iconography.[36][27] The interior of the sanctum sanctorum hosts an image of the primary deity, Shiva, in the form of a huge stone linga. It is called Karuvarai, a Tamil word that means "womb chamber". This space is called garbha griha in other parts of India. Only priests are allowed to enter this inner-most chamber.[37]

In the Tamizhan style, the sanctum takes the form of a miniature vimana. It has the inner wall together with the outer wall creating a path around the sanctum for circumambulation (pradakshina). The entrance is highly decorated. The inside chamber is the sanctum sanctorum, which houses the brihad linga.[2]

The main Vimana (Shikhara) is a massive 16 storeys tower of which 13 are tapering squares. It dominates the main quadrangle. It sits above a 30.18 metres (99.0 ft) sided square.[36] The tower is elaborately articulated with Pilaster, piers(a raised structure), and attached columns which are placed rhythmically covering every surface of the vimana.[38]

Deities and Natya Sastra dance mudras

The bronze Nataraja design of Thanjavur found in many museums was commissioned for this temple's sanctum.[39]
The temple is dedicated to Shiva in the form of a huge linga, his abstract aniconic representation. It is 8.7 m (29 ft) high, occupying two storeys of the sanctum.[3][9] It is one of the largest monolithic linga sculptures in India.[34]


<ul>



<li>North side</li>	
  <li>South side</li>
<li>Bhairava (Shiva)	Ganesha></li>
<li>Mahishasuramardini (Durga)	Vishnu</li>
<li>Saraswati	Gajalakshmi</li>
</ul>

The sikhara, a cupolic dome (25 tons), is octagonal and rests on a single block of granite, weighing 80 tons.
The Shaivism temple celebrates all major Hindu traditions by including the primary deities of the Vaishnavism and Shaktism tradition in the great mandapa of the main temple. The distribution of the deities is generally symmetric, except for the east entrance side which provide for the door and walkway. In addition to the main deities, each side provides for dvarapalas (guardians), and various other sculptures. The vestibule has three stone sculptures that is intricately carved, and mural paintings.[40] The ground floor level sanctum walls have the following sculptures:[40]

East wall: Lingodbhava, standing Shiva, Pashupata-murti, plus two dvarapalas flanking the pathway from ardha-mandapam
South wall: Bhikshatana, Virabhadra, Dakshinamurti, Kalantaka, Nataraja[note 3] plus two dvarapalas
West wall: Harihara (half Shiva, half Vishnu), Lingodbhava, Chandrashekhara without prabhavali, Chandrashekhara with prabhavali, plus two dvarapalas
North wall: Ardhanarishvara (half Shiva, half Parvati), Gangadhara without Parvati, Pashupata-murti, Shiva-alingana-murti, plus two dvarapalas

</p>
  
<h1>
   Form for visiting BRIHADEESWARAN TEMPLE FOR STUDENTS
</h1>
<fieldset>
  <legend>
    Register 
    </legend>
  <form>
    <label>Name</label>
    <input type="text" placeholder="Name Of the Student">
    
    <br>
    <br>

    <label>class</label>
  
    <input type="text" placeholder="DEP/Year">
    <br>
    <br>


    <label>Ph No</label>
    <input type="number" placeholder="Enter your Mobile Number">
    <br>
    
    <label>
      <br>
    <br>
    

Visting Date
    </label>
    

    <br>
    

    <input type="date">
    <br>
<label>
      Visiting Time
    </label>
    <br>
    <br>
    <br>

    <select>
      <option value="1">FN</option>
      <option value="2">AN</option>


    </select>

    <br>
   <br>

    

    <br>

    <br>

    <br>

    
    <label>Email Id</label>
  
    <input type="email" placeholder="Enter your Mail id">
    
    <br>
    <label>Institution Name</label>
    <input type="text" placeholder="Enter your Institution name">
    
    <br>
    <br>
    <br>
    <br>
   <br> <br>
   <br>
   <br>
   <br>
  <br> 
    <button>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    <br>
    <br>
    <br>
   <br>
    <button>Reset</button>

   

   


  </form>

  </fieldset>
  </body>

</html>























// echo "Sucess conecting to the DB"