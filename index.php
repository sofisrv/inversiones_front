
<!DOCTYPE html>
<html>
<script src="assets/js/custom.js"></script>
<head><meta charset="gb18030">
    <link  rel="icon" href="logos/logocentro.png" type="image/png"/>
<title>#inversiones</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

</style>
</head>
<body onload="nobackbutton();">
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i');
html,body{
  margin:0;
  width: 100%;
  height:100%;
  font-family: 'Josefin Sans', sans-serif;

}
a{
  text-decoration:none
}
.header{
  position:relative;
  overflow:hidden;
  display:flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  align-content: flex-start;
  height:50vw;
  color:#eee;
}
.header:after{
  content:"";
  width:100%;
  height:100%;
  position:absolute;
  bottom:0;
  left:0;
  z-index:-1;
 background: linear-gradient(to bottom, rgba(0,0,0,0.12) 40%,rgba(27,32,48,1) 100%);
}
.header:before{
  content:"";
  width:100%;
  height:120%;
  position:absolute;
  top:0;
  left:0;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0); backface-visibility: hidden;
  scale(1.0, 1.0);
    transform: translateZ(0);
  background:#1B2030 url("logos/back.jpg") 50% 0 no-repeat;
  background-size:100%;
  background-attachment:fixed;
  animation: grow 360s  linear 10ms infinite;
  transition:all 4s ease-in-out;
  z-index:-2
}
.header a{
  color:#eee;
}
.logo1{
  border:2px solid white;
  border-radius:3px;
  text-decoration:none;
  display:inline-flex;
  align-items:center;
  align-content:center;
  margin:10px;
  padding:10px 10px;
  font-weight:900;
  font-size:1.1em;
  line-height:1;
  box-sizing:border-box;
  height:auto;
  margin-top: 30px;
}
.bot1, .info{
  flex: 0 0 auto;
  width:50%;
}
.info{
  width:100%;
  padding:20% 0 0 0%;
  text-align:center;
  text-shadow:0 2px 3px rgba(0,0,0,0.2)
}
.ig{
  display:inline-block;
  width:50px;
  height:50px;
  border-radius:50%;
  background:url("logos/ig.png") center no-repeat;
  background-size:cover;
  box-shadow:0 2px 3px rgba(0,0,0,0.3);
  margin-bottom:3px
}
.fb{
  display:inline-block;
  width:50px;
  height:50px;
  border-radius:50%;
  background:url("logos/fb.png") center no-repeat;
  background-size:cover;
  box-shadow:0 2px 3px rgba(0,0,0,0.3);
  margin-bottom:3px
}
.author{
  display:inline-block;
  width:50px;
  height:50px;
  border-radius:50%;
  background:url("logos/logo.png") center no-repeat;
  background-size:cover;
  box-shadow:0 2px 3px rgba(0,0,0,0.3);
  margin-bottom:3px
}
.meta{
  font-size:0.7em
}
.meta{
  font-style:italic;
}
@keyframes grow{
  0% { transform: scale(1) translateY(0px)}
  50% { transform: scale(1.2) translateY(-400px)}
}
.content{  
  padding:10% 10%;
  text-align:justify
}
.btn{
  color:#333;
  border:2px solid;
  border-radius:3px;
  text-decoration:none;
  display:inline-block;
  padding:5px 10px;
  font-weight:600
}

</style>
<body>
<div class="header">
    <div>
    <a href="login.php" class="logo1">Entrar</a>
    </div>
    <a  href="https://www.facebook.com" target="_b" class="author"></a><br> <a href="https://www.facebook.com" target="_b"></a>
        <div class="info">
            <h4><a href="#category">#inversiones</a></h4>
            <h1>Plataforma de oportunidades de inversión</h1>
        <div class="meta">
              <a href="https://www.instagram.com" target="_b" class="ig"> </a>
              <a href="https://www.facebook.com" target="_b" class="fb"> </a>
              <br> By <a href="logina.php" target="_b">Sofia Ruiz</a>
        </div>
    </div>
</div>
<br>
</body>
</html>