<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Explore Nature</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f4f4f4;
}

header{
    background:#222;
    color:white;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

header h2{
    color:#00d4ff;
}

nav a{
    color:white;
    text-decoration:none;
    margin-left:20px;
}

.hero{
    height:90vh;
    background:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1600') center/cover no-repeat;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}

.hero-content{
    background:rgba(0,0,0,.55);
    padding:40px;
    border-radius:15px;
}

.hero h1{
    font-size:55px;
}

.hero p{
    margin:20px 0;
    font-size:20px;
}

button{
    padding:15px 35px;
    border:none;
    border-radius:30px;
    background:#00d4ff;
    color:white;
    font-size:17px;
    cursor:pointer;
}

.cards{
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
    padding:60px;
}

.card{
    width:320px;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,.15);
    transition:.4s;
}

.card:hover{
    transform:translateY(-10px);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card h3{
    margin:15px;
}

.card p{
    margin:15px;
    color:#666;
}

.date{
    text-align:center;
    margin:30px;
    font-size:18px;
    color:#333;
}

footer{
    background:#222;
    color:white;
    text-align:center;
    padding:20px;
}
</style>
</head>

<body>

<header>
    <h2>NatureX</h2>

    <nav>
        <a href="#">Home</a>
        <a href="#">Places</a>
        <a href="#">Gallery</a>
        <a href="#">Contact</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>Explore The World</h1>
        <p>Adventure is waiting for you.</p>
        <button>Start Journey</button>
    </div>
</section>

<div class="date">
    <h3>Today's Date:
        <?php echo date("l, d F Y"); ?>
    </h3>
</div>

<section class="cards">

<div class="card">
<img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800">
<h3>Beautiful Mountains</h3>
<p>Experience breathtaking mountain landscapes and fresh air.</p>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800">
<h3>Blue Beaches</h3>
<p>Relax beside crystal-clear waters and golden sand beaches.</p>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800">
<h3>Green Forests</h3>
<p>Walk through peaceful forests filled with nature and wildlife.</p>
</div>

</section>

<footer>
    © <?php echo date("Y"); ?> NatureX | Designed with PHP & HTML
</footer>

</body>
</html>