<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO chikhaldara_wildlife_santuarycomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: chikhaldara_wildlife_santuary.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CHIKHALDARA WILDLIFE SANTUARY</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="CAPTAIN.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<body>
  <header>
    <h2 class="logo">Travel Guide</h2>
    <div class="toggle"></div>
    <div class="main-menu">
      <ul>
        <li><a href="#">Explore</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Contact</a></li>
        <li>
          <form class="example">
            <a><input type="text" placeholder="Search.." name="search" />
              <button type="submit"><i class="fa fa-search"></i></button>
            </a>
          </form>
        </li>
      </ul>
    </div>
    <script>
      const menuToggle = document.querySelector(".toggle");
      const showcase = document.querySelector(".main-menu");
      menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active");
        showcase.classList.toggle("active");
      });
    </script>
  </header>
  <!--section class="info"-->
  <div class="row">
    <h1>CHIKHALDARA WILDLIFE SANTUARY</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119270.55804778819!2d77.69170507394485!3d20.904072930606237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a4a67774bc15%3A0x3c7b3f78ca4f9635!2sAmravati%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633604035230!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\chikhaldara_wildlife_sanctuary.jfif" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      hikhaldara Wildlife Sanctuary am located in Amravati district in the state of Maharashtra, India. I am a beautiful small forest town. If you are a lover of wildlife, this is the place you want to visit. Chikhaldara national park was first designed as a tourist spot by an English army officer Captain Robinson. This is a very green town full of natural beauty.

       Chikhaldara Wildlife Sanctuary am a prosperous town with high literacy rate. There are several national parks, reserve and museum dedicated to wild-life here. Melghat Tiger Reserve is the most prominent one. This is part of the ‘Project Tiger’, a wildlife conservation project. I have legendary status. According the epic, the Mahabharata, this is the place where Bheema killed Keechaka in a huge bout and then threw him into the valley. Trees that grow in my lap are Teak, Ain, Bamboo, Tiwas, Dhaoda, Kusum, Mahua.
      Chikhaldara Wildlife Sanctuary is full of wonderful wildlife like panthers, sloth bears, sambar, wild boar, and even the rarely seen wild dogs. If you spend some days exploring me: Chikhaldara National Park, you are sure to meet many of these species.

      There is much site-seeing to be done here. Hurricane Point, Prospect Point, and Devi Point are three perfect places from where you can enjoy the scenic beauty of Chikhaldara Wildlife Sanctuary. You will never be bored here. There are private and secured government and private hotels here. October to June is the best time to visit Chikhaldara National Park. I Chikhaldara am also very well connected by airways and train.
      he Chikhaldara Wildlife Sanctuary is located at a height of around 1118m, in the district of Amravati. It is the only hill station in Vidharbha region and abounds in natural beauty. The sanctuary is the only place in Maharashtra, where coffee is grown.

The Chikhaldara Wildlife Sanctuary is full of waterfalls and lakes, which lend an enchanting look to the place. The sanctuary is quite close to the well known Melghat Tiger Project situated in Dhakana- Kolkaz National Park. The sanctuary got its name from Prince Kichaka, who was termed as a villain in Mahabharata.

 

The prince was killed by Bheem and his body was thrown in the nearby valley. Thus the place came to be known as Kichaka bara and was latter known as Chikhaldara.


Fauna:-
The sanctuary is a home to various species of animals that includes Tiger, Sloth bear, Panther, Wild dog, Wild boar, Sambhar etc.

      </h3>
      <h2>COMMENTS</h2>
      </div>
      <h3>
      <article class="article4">
    <div class="commentwrapper">
      <form action="" method="POST" class="form">
        <div class="row">
          <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your Name" required />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required />
          </div>
        </div>
        <div class="input-group textarea">
          <label for="comment">Comment</label>
          <textarea name="comment" id="comment" placeholder="Enter your comment" required></textarea>
        </div>
        <div class="input-group">
          <button name="submit" class="btn">Post Comment</button>
        </div>
      </form>
      <div class="prev-comments">
        <?php

        $sql = "SELECT * FROM  chikhaldara_wildlife_santuarycomment";
        $result = mysqli_query($conn, $sql);
        if (
          mysqli_num_rows($result) >
          0
        ) {
          while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="single-item">
              <h4><?php echo $row['name']; ?></h4>
              <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
              <p><?php echo $row['comment']; ?></p>
            </div>
        <?php

          }
        }

        ?>
      </div>
    </div>
  </article>
      </h3>
    </div>
    <!--div class="left-column">
                <div class="card"></div>
               <h2>Introduction</h2>
                <img src="images/Satara.jpg" alt="blog">
                <h3>Detailed Information</h3>
                <h4>"Satara, a place bestowed with
                    historical abundance, is also known
                    for its natural landscape.
                    Surrounded by seven hills and
                    situated near the converging point
                    of two rivers, it will surely to
                    impress you."
                    The unique statue of Chhatrapati Shivaji at
                    Satara is a mark of the legacy left by the
                    Maratha empire. This journey of amazing
                    landmarks will continue with the colourfully
                    flowered Kas plateau, a World Heritage Site. Ancient forts like Ajinkyatara Fort and
                    gushing waterfalls, Satara also houses the
                    Satara Musuem, dedicated to Shivaji
                    himself. Do try the famous sweet, Kadi
                    Pedhe, as you sit on top of Yawateshwar
                    hills and see the twinkling road lights below.
                </h4>
            </div>
            <div class="left-column">
                <div class="card"></div>
               <h2>Introduction</h2>
                <img src="images/Satara.jpg" alt="blog">
                <h3>Detailed Information</h3>
                <h4>"Satara, a place bestowed with
                    historical abundance, is also known
                    for its natural landscape.
                    Surrounded by seven hills and
                    situated near the converging point
                    of two rivers, it will surely to
                    impress you."
                    The unique statue of Chhatrapati Shivaji at
                    Satara is a mark of the legacy left by the
                    Maratha empire. This journey of amazing
                    landmarks will continue with the colourfully
                    flowered Kas plateau, a World Heritage Site. Ancient forts like Ajinkyatara Fort and
                    gushing waterfalls, Satara also houses the
                    Satara Musuem, dedicated to Shivaji
                    himself. Do try the famous sweet, Kadi
                    Pedhe, as you sit on top of Yawateshwar
                    hills and see the twinkling road lights below.
                </h4>
            </div-->
    <div class="right-column">
      <div class="card">
        <h2>EXPLORE MORE PLACES:</h2>
        <h3><a href="bamboo_garden.php">BAMBOO GARDEN</a></h3>
        <img src="images\bamboo_garden.jpg" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="chatri_talao.php">CHATRI TALAO</a></h3>
        <img src="images\chatri_talao.jfif" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="gawilgarh_fort.php">GAWILGARD FORT</a></h3>
        <img src="images\gawilgarh_fort.jfif" alt="Pratap" />
      </div>
      <div class="card">
      <h3><a href="iskcon.php">ISKCON</a></h3>
        <img src="images\iskcon.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="ambadeviandekviradevi_mandir.php">AMBADEVI AND EKVIRADEVI MANDIR</a></h3>
        <img src="images\ambadeviandEkviradevi_mandir.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="malgaht_tiger_reserve.php">MELGAHT TIGER RESERVE</a></h3>
        <img src="images\melgaht_tiger_reserve.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="wadali_talav.php">WADALI LAKE</a></h3>
        <img src="images\wadali_talav.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="wardha_dam.php">WARDHA DAM</a></h3>
        <img src="images\wardha_dam.jpg" alt="gad" />
      </div>
      <!--div class="card">
                    <h2>POPULAR POST</h2>
                    <img src="images/example.jfif" alt="">
                </div>
                <div class="card">
                    <h3>FOLLOW ME</h3>
                    <p>Some Text</p>
                </div-->
    </div>
  </div>
 
</body>
</head>

</html>