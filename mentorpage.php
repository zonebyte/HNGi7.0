<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <title>Mentors Page</title>
    <style>
      * {
      padding: 0;
      margin: 0;
    } 

    body {
      font-family: 'Open Sans', sans-serif;
    }

    a {
      text-decoration: none;
    }
    
    header {
      background-color: #D1F0F6 !important;
    }

    .image {
      border-radius: 50%;
      width: 170px;
      height: 170px;
      margin: 1rem 0;
    }

    .mentors-section {
      text-align: center;
    }

    .wrapper {
      margin: 100px 0 19.13px 0;
    }

    .wrapper-child {
      margin-bottom: 4rem;
    }

    .wrapper-child h4 {
      margin: 19px 0 11px 0;
    }

    .social-icons {
      margin-top: 46.75px;
    }

    span {
      color: #ffffff;
      padding: 1rem 1.2rem;
      /* //background: #FB6340; */
      box-shadow: 0px 4px 4px rgba(50, 50, 93, 0.11), 0px 1px 3px rgba(0, 0, 0, 0.08);
      margin: 0 14.5px;
      border-radius: 50%;
      text-align: center;
    }

    .navbar-toggler-icon {
      border-radius: none;
      box-shadow: none;
    }

    i {
      color: #ffffff;
    }

    .fa-facebook-square {
      position: relative;
      left: 2px;
    }

    .first-color {
      background: #FB6340;
      cursor: pointer;
    }

    .second-color {
      background: #5E72E4;
      cursor: pointer;
    }

    .third-color {
      background: #11CDEF;
      cursor: pointer;
    }

    .fourth-color {
      background: rgb(98, 255, 98);
      cursor: pointer;
    }

    .first-color:hover {
      background: rgb(226, 91, 61);
      transition: .5s ease-in-out;
    }
    .second-color:hover {
      background: rgb(83, 102, 204);
      transition: .5s ease-in-out;
    }
    .third-color:hover {
      background: rgb(17, 179, 207);
      transition: .5s ease-in-out;
    }
    .fourth-color:hover {
      background: rgb(82, 216, 82);
      transition: .5s ease-in-out;
    }
     #landing-page {
      text-align: center;
      background-color: #D1F0F6;
      position: relative;
      min-height: 40vh;
     }
     
     .land {
         position: absolute;
         bottom: 2rem;
         left: 50%;
         top: 20px;
         transform: translateX(-50%);
         width: 100%;
         
         margin-top: 1rem;
     }

     #nav {
      background-color: #D1F0F6 !important;
      color: #474747 !important;
      font-weight: bold;
     }

     .navbar-toggler {
       border: none !important;
       outline: none !important;
     }

     #landing-page h2 {
       
       font-weight: bold;
       color: #084482 !important;
       margin-top: 0;
       margin-bottom: 1rem
     }

     
     #img {
       margin-left: 1rem !important;
       width: 150px;
     }
     
     .footer-brand {
         margin-top: 1rem;
     }
     
     #sections {
         margin-top: 1rem;
     }
     
     .blue{
         color: #3BB9FF;
     }
     
     
     
     .btn {
         Background: #3BB9FF !important;
         Border: #3Bb9ff !important;
     }
     ul {
         list-style: none;
     }
     
     #section-one,
     #section-two,
     #section-three,
     #section-four {
         margin: 3rem 0;
     }
     
     h4 {
         font-weight: bold;
     }
     
     .bottom-icons span {
         background:#3BB9FF;
     }
     
      #bottom {
         margin-top: 1rem;
     }
     
     #footer {
        /* background: none !important; */
        min-height: 60vh;
        padding: 1rem;
     }



    @media (min-width: 700px) {
      .wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
      }

      .collapse {
        display: flex;
        justify-content:flex-end;
      }
     
     #landing-page  h2 {
        font-size: 45px;
     } 
     #landing-page  p {
        padding-bottom: 25px;
        font-size: 25px;
     }

      li {
        padding: 0 1.5rem;
      }

      ul {
        margin-right: 3rem;
      }
    }
    
  /*  .land {
        bottom: 6rem;
    }*/

    @media (min-width: 1000px) {
      .wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
      }

      li {
        padding: 0 1.5rem;
      }

      ul {
        margin-right: 3rem;
      }

      .collapse {
        display: flex;
        justify-content:flex-end;
      }

      #img {
       margin-left: 4rem !important;
       width: 200px;
     }
     
     #landing-page {
         min-height: 45vh;
     }
     
     .land {
         margin: 0 auto;
         width: 650px !important;
         bottom: 1rem;
     }
     .footer-brand {
         margin-left: -2.2rem;
     }
     
     #sections {
         display: flex;
         justify-content: space-evenly;
         text-align: left;
     }
     
     #bottom {
         text-align: center;
     }
     
     #section-one,
     #section-two,
     #section-three,
     #section-four {
         padding: 0 1rem;
     }

    }

    

</style>
</head>
<body>
    <!--header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    <a class="navbar-brand" href="index.html">
      <img src="https://res.cloudinary.com/chidi6ix/image/upload/v1570716504/brand-logo_cmbyi8.svg" id="img">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="hng6.html">HNG6</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="mentorpage.html">Mentors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contactform.html">Contact</a>
        </li>

        <button class="btn btn-primary" id="btn"><a style="color:#fff" href="join-intern.html">Join HNG</a></button>
      </ul>
    </div>
  </nav>

  <div class="jumbotron" id="landing-page">
      <div class="land">
      <h2>Our Mentors</h2>
      <p class="lead">Our mentors who are experienced in various sector contributes their
          time and knowledge in making sure the interns get the best guide as 
        they begin their journey into the tech industry</p>
      </div>

  </div>
</header-->

<?php include('fragments/site_header.php'); ?>

<div class="jumbotron" id="landing-page">
      <div class>
      <h2>Our Mentors</h2>
      <p class="lead">Our mentors who are experienced in various sector contributes their
          time and knowledge in making sure the interns get the best guide as 
        they begin their journey into the tech industry</p>
      </div>

  </div>

  <main>
    <section class="mentors-section">
      <div class="wrapper">

      </div>
    </section>
  </main>

  <?php include('fragments/site_footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
 <script>
  const wrapper = document.querySelector('.wrapper');
wrapper.classList.add('wrapper');


const displayMentors = (data) => {
  let count = 0;
  data.forEach((data) => {
    let wrapperChild = document.createElement('div');
    wrapperChild.classList.add('wrapper-child');
    wrapperChild.style.marginBottom = '4rem';

    let image = document.createElement('img');
    image.classList.add('image');
    image.src = data.imgUrl;
    let heading = document.createElement('h4');
    heading.innerHTML = data.name;

    let paragraph = document.createElement('p');
    paragraph.innerHTML = data.stack;

    let spanOne = document.createElement('span');
    let spanTwo = document.createElement('span');
    let spanThree = document.createElement('span');

    let a1 = document.createElement('a');
    let a2 = document.createElement('a');
    let a3 = document.createElement('a');

    let iconOne = document.createElement('i');
    let iconTwo = document.createElement('i');
    let iconThree = document.createElement('i');

    iconOne.classList.add('fab');
    iconOne.classList.add('fa-twitter');

    iconTwo.classList.add('fab');
    iconTwo.classList.add('fa-facebook-square');

    iconThree.classList.add('fab');
    iconThree.classList.add('fa-dribbble');

    a1.appendChild(iconOne);
    a2.appendChild(iconTwo);
    a3.appendChild(iconThree);

    spanOne.appendChild(a1)
    spanTwo.appendChild(a2)
    spanThree.appendChild(a3)

    const socialIcons = document.createElement('div');
    socialIcons.classList.add('social-icons');

    socialIcons.appendChild(spanOne);
    socialIcons.appendChild(spanTwo);
    socialIcons.appendChild(spanThree);


    if(count <= 0 || count === 4) {
      spanOne.classList.add('first-color');
      spanTwo.classList.add('first-color');
      spanThree.classList.add('first-color');
      if(count === 4) {
        count = 0;
      }
    } else if(count > 0 && count <= 1) {
      spanOne.classList.add('second-color');
      spanTwo.classList.add('second-color');
      spanThree.classList.add('second-color');
    } else if(count > 1 && count <= 2) {
      spanOne.classList.add('third-color');
      spanTwo.classList.add('third-color');
      spanThree.classList.add('third-color');
    } else if(count > 2 && count <= 3) {
      spanOne.classList.add('fourth-color');
      spanTwo.classList.add('fourth-color');
      spanThree.classList.add('fourth-color');
    }

    wrapperChild.appendChild(image);
    wrapperChild.appendChild(heading);
    wrapperChild.appendChild(paragraph);
    wrapperChild.appendChild(socialIcons);




    wrapper.appendChild(wrapperChild);

    count += 1;

  })
}


const mentorsArr = [
  {
    name: "Oluwatoni Atunrase",
    stack: "Web Developer",
    imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
  },
  {
     name: "Patrick Aziken",
     stack: "Software Tester",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Stephen Azubuike",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Everitus Olumese",
     stack: "Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Osumgha Chiamaka",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Aboagye",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "John Ademoye",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Adeyefa Oluwatoba",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Adolphus Chris",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Ogundiji Bolade",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Ajayi Jeremiah",
     stack: "Backend Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Albert Oboh",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Amujo Oluwasomido",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Chigozie",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Kev Chike",
     stack: "Software Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Chinedu Ebinim",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Chukwuemeka Iheonye",
     stack: "Product Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Somtozech",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Cole Solomon",
     stack: "Product Designer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Motunrayo Da-costa",
     stack: "Frontend Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Maaruf Dauda",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
    {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "Ryan Thompson",
     stack: "Web Developer",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
   {
     name: "Romina Hadid",
     stack: "Marketing Strategist",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570662632/Capture03_ynye5x.jpg?fbclid=IwAR3I7yne9-EHBck93MMh__3kx5Bmrjg2epvFPNXY3K1QqgxHVIYTJ98kZVk"
   },
    {
     name: "Alexander Smith",
     stack: "UI/UX Designer",
     imgUrl: 'https://res.cloudinary.com/chidi6ix/image/upload/v1570663334/Capture01_c3eyb9.jpg?fbclid=IwAR3Nezb-_XUEm6rt6hGAnTYreD7V60pzHF-rfkQOtP3ao28UnuIteVrcf_Yalt=""'
   },
   {
     name: "John Doe",
     stack: "Founder and CEO",
     imgUrl: "https://res.cloudinary.com/chidi6ix/image/upload/v1570663265/Capture02_psr3n9.jpg?fbclid=IwAR1m1WqNFk8aF4BvBSQlk950cSazCaRy95-66fg9cBZxPG-6Cc8Ga_6neqg"
   },
 ];

 displayMentors(mentorsArr);

 </script>
</body>
</html>
