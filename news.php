<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Ph???n M???m Qu???n L?? Nh?? Tr??? C???a Th???y</h1>
  </b>  Created By L?? Ng???c Th???y </p>
</div>

<div class="navbar">
  <a href="http://house_rental.test/index.php?page=news" class="active">Home</a>
  <a href="http://house_rental.test/index.php?page=home">D??ng Th??? </a>
  <a href="#">Khuy???n M???i</a>
  <a href="http://house_rental.test/index.php?page=site_settings" class="right">Li??n H???</a>
</div>

<div class="row">
  <div class="side">
    <h2></h2>
    <h5>Ph??ng tr??? kh??ch h??ng t??? decore</h5>
    <img src="img/tu-thiet-ke-trang-tri-phong-tro-1067x800.jpg" alt="Ph??ng " title="ph??ng tr??? ?????p" style="height: 200px;">
   

    <p>khi thu?? ph??ng tr??? ??? h??? th???ng nh?? tr??? c???a th???y, s??? cho b???n c???m gi??c tho???i m??i</p>
    <h3>Nh???ng lo???i ph??ng c?? b???n</h3>
    <img src="img/22_1592726520.jpg" alt="Ph??ng kh??p k??n " title="ph??ng k??p k??n" style="height: 60px;">
    <img src="img/fef285f0-d322-4002-a635-be0120993590_1588063665.jpg" alt="Ph??ng kh??ng kh??p k??n " title="ph??ng kh??ng k??p k??n" style="height: 60px;">

  <div class="main">
    <h3>H??? Th???ng Nh?? Tr??? ??u Ti??n Cho Sinh Vi??n ??HTNMT H?? N???i </h3>
    <img src="img/phong-tro-sinh-vien.jpg" alt="Ph??ng " title="ph??ng tr??? ?????p" style="height: 200px;">
    <p>Khi sinh vi??n tr?????ng ??HTNMT ?????n k?? h???p ?????ng ??? nh?? tr??? s??? ???????c gi???m 5% ti???n tr??? th??ng ?????u ti??n</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>.</p>
  </div>
</div>
                                                                              

</body>
</html>
