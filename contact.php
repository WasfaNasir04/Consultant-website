 <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container{
    min-height: 100vh;
    background: #08071d;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('contact.jpg') no-repeat center center/cover;
}

.container form{
    width: 670px;
    height: 600px;
    display: flex;
    justify-content: center;
    box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    flex-wrap: wrap;
}

.container form h1{
    color: #fff;
    font-weight: 500;
    margin-top: 20px;
    width: 500px;
    text-align: center;
    margin-bottom: 30px;
}

.container form input{
    width: 290px;
    height: 40px;
    padding-left: 10px;
    outline: none;
    border: none;
    font-size: 15px;
    margin-bottom: 10px;
    background: none;
    border-bottom: 2px solid #fff;
}

.container form input::placeholder{
    color: #ddd;
}

.container form #category,
.container form #city{
    margin-left: 20px;
}


.container form h4{
    color: #fff;
    font-weight: 300;
    width: 600px;
    margin-top: 20px;
}

.container form textarea{
    background: none;
    border: none;
    border-bottom: 2px solid #fff;
    color: #fff;
    font-weight: 200;
    font-size: 15px;
    padding: 10px;
    outline: none;
    min-width: 600px;
    max-width: 600px;
    min-height: 80px;
    max-height: 80px;
}

textarea::-webkit-scrollbar{
    width: 1em;
}

textarea::-webkit-scrollbar-thumb{
    background-color: rgba(194,194,194,0.713);
}

.container form #button{
    border: box;
    background: orange;
    border-radius: 5px;
    margin-top: 20px;
    font-weight: 600;
    font-size: 20px;
    color: #333;
    width: 200px;
    padding: 0;
    margin-right: -10px;
    margin-bottom: 30px;
    transition: 0.3s;
}

.container form #button:hover{
    opacity: 0.7;
}

.button{
    color:orange;
}
 </style>


 <body>
    <div class="container">
        <form action="userData.php" method="POST">
            <h1>CONTACT US</h1>
            
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="category" placeholder="Category" required>
            <input type="number" name="phone" placeholder="Phone" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="email" name="email" placeholder="Email" required>
            <h4>Type Your Message Here...</h4>
            <textarea name="comment" required></textarea>
            <input type="submit" value="Contact Us" id="button">
        </form>
    </div>
</body>