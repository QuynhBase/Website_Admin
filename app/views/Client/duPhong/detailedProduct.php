<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    /* ----- Variables ----- */
/* ----- Global ----- */
* {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
}

body {
  display: grid;
  grid-template-rows: 1fr;
  font-family: "Raleway", sans-serif;
  /* background-color: #01e37f; */
}

h3 {
  font-size: 0.7em;
  letter-spacing: 1.2px;
  color: #a6a6a6;
}

img {
  max-width: 100%;
  filter: drop-shadow(1px 1px 3px #a6a6a6);
}

/* ----- Product Section ----- */
.product {
  display: grid;
  grid-template-columns: 0.9fr 1fr;
  margin: auto;
  padding: 2.5em 0;
  min-width: 600px;
  background-color: #f7f7f7;;
  border-radius: 5px;
}

/* ----- Photo Section ----- */
.product__photo {
  position: relative;
}

.photo-container {
  position: absolute;
  left: -2.5em;
  display: grid;
  grid-template-rows: 1fr;
  width: 100%;
  height: 100%;
  border-radius: 6px;
  box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
}

.photo-main {
  border-radius: 6px 6px 0 0;
  background-color: #9be010;
  background: radial-gradient(#e5f89e, #96e001);
}
.photo-main .controls {
  display: flex;
  justify-content: space-between;
  padding: 0.8em;
  color: #fff;
}
.photo-main .controls i {
  cursor: pointer;
}
.photo-main img {
  position: absolute;
  left: -3.5em;
  top: 2em;
  max-width: 110%;
  filter: saturate(150%) contrast(120%) hue-rotate(10deg) drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
}

.photo-album {
  padding: 0.7em 1em;
  border-radius: 0 0 6px 6px;
  background-color: #fff;
}
.photo-album ul {
  display: flex;
  justify-content: space-around;
}
.photo-album li {
  float: left;
  width: 55px;
  height: 55px;
  padding: 7px;
  border: 1px solid #a6a6a6;
  border-radius: 3px;
}

/* ----- Informations Section ----- */
.product__info {
  padding: 0.8em 0;
}

.title h1 {
  margin-bottom: 0.1em;
  color: #4c4c4c;
  font-size: 1.5em;
  font-weight: 900;
}
.title span {
  font-size: 0.7em;
  color: #a6a6a6;
}

.price {
  margin: 1.5em 0;
  color: #ff3f40;
  font-size: 1.2em;
}
.price span {
  padding-left: 0.15em;
  font-size: 2.9em;
}

/* .variant {
  overflow: auto;
}
.variant h3 {
  margin-bottom: 1.1em;
}
.variant li {
  float: left;
  width: 35px;
  height: 35px;
  padding: 3px;
  border: 1px solid transparent;
  border-radius: 3px;
  cursor: pointer;
}
.variant li:first-child, .variant li:hover {
  border: 1px solid #a6a6a6;
}
.variant li:not(:first-child) {
  margin-left: 0.1em;
} */

.description {
  clear: left;
  margin: 2em 0;
}
.description h3 {
  margin-bottom: 1em;
}
.description ul {
  font-size: 0.8em;
  list-style: disc;
  margin-left: 1em;
}
.description li {
  text-indent: -0.6em;
  margin-bottom: 0.5em;
}

.buy--btn {
  padding: 1.5em 3.1em;
  border: none;
  border-radius: 7px;
  font-size: 0.8em;
  font-weight: 700;
  letter-spacing: 1.3px;
  color: #fff;
  background-color: #ff3f40;
  box-shadow: 2px 2px 25px -7px #4c4c4c;
  cursor: pointer;
}
.buy--btn:active {
  transform: scale(0.97);
}

/* ----- Footer Section ----- */
footer {
  padding: 1em;
  text-align: center;
  color: #fff;
}
footer a {
  color: #4c4c4c;
}
footer a:hover {
  color: #ff3f40;
}
</style>
<body>
    <section class="product">
        <div class="product__photo">   
              <img style="margin-left: 30px;" class="img-thumbnail" src="<?php echo $product['image'] ?>" width="200px" alt="green apple slice">
          </div>
        </div>
        <div class="product__info">
          <div class="title">
         
            <h1><?php echo $product['name'] ?></h1>
            <span>COD: 45999</span>
          </div>
          <div class="price">
             <span><?php echo $product['price'] ?></span>
          </div>
          
          <button class="buy--btn">ADD TO CART</button>
        </div>
      </section>
      
</body>
</html>