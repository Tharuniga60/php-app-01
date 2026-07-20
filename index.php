<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nature's Beauty</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#eef7ee;
}

header{
    background:#2e7d32;
    color:white;
    padding:20px;
    text-align:center;
}

.hero{
    background:url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=1600') center/cover no-repeat;
    height:450px;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
}

.hero h1{
    background:rgba(0,0,0,0.5);
    padding:20px 40px;
    border-radius:10px;
    font-size:50px;
}

.container{
    width:90%;
    margin:auto;
    padding:40px 0;
}

.about{
    text-align:center;
    margin-bottom:40px;
}

.about h2{
    color:#2e7d32;
    margin-bottom:15px;
}

.about p{
    font-size:18px;
    line-height:1.8;
    color:#444;
}

.gallery{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
}

.card{
    width:300px;
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card h3{
    padding:15px;
    color:#2e7d32;
}

.card p{
    padding:0 15px 20px;
    color:#555;
}

footer{
    background:#2e7d32;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:40px;
}
</style>
</head>

<body>

<header>
    <h1>🌿 Nature's Beauty</h1>
    <p>Discover the Wonders of Our Planet</p>
</header>

<section class="hero">
    <h1>Protect Nature, Protect Life</h1>
</section>

<div class="container">

<div class="about">
    <h2>About Nature</h2>

    <p>
        Nature is the heart of our planet. It provides fresh air, clean water,
        food, shelter, and a peaceful environment for all living beings.
        Forests, rivers, mountains, oceans, and wildlife together create a
        beautiful balance that supports life on Earth. Protecting nature is our
        responsibility because a healthy environment ensures a healthy future
        for generations to come.
    </p>

    <br>

    <p>
        <strong>Today's Date:</strong>
        <?php echo date("l, d F Y"); ?>
    </p>
</div>

<div class="gallery">

    <div class="card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800">
        <h3>Mountains</h3>
        <p>Majestic mountains offer breathtaking views and fresh, pure air.</p>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800">
        <h3>Ocean</h3>
        <p>Oceans cover more than 70% of Earth and are home to amazing marine life.</p>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800">
        <h3>Forest</h3>
        <p>Forests are the lungs of the Earth, producing oxygen and supporting biodiversity.</p>
    </div>

</div>

</div>

<footer>
    © <?php echo date("Y"); ?> Nature's Beauty | Save Nature 🌍
</footer>

</body>
</html>
