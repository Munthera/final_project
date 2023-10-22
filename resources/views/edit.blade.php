
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=
    =" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

#photo{

    font-size: small;
    background-color: black;
    color: white;
    border-radius: 10px;
    border: solid gold;
}
.form-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center;
}

.form-input {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
   
}
.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
}

.filling-bar {
    height: 10px;
    background-color: #007bff;
    width: 0; /* Initial width */
    transition: width 0.3s ease-in-out;
}

.form-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}
.edit-photo-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    margin-bottom: 5%;
    
   
}

    </style>
  </head>
<body>
<br><br><br><br><br>

<div>

@foreach ($user as $user)

<div class="form-container">
    <h2>Edit Profile</h2>

    <img src="/myimg/{{$user->photo}}" alt="User" class="profile-image">

       <form action="/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" class="form-input" value="{{$user->Fname}}" required>
        <div class="filling-bar"></div>
        <input type="text" name="lname" class="form-input" value="{{$user->Lname}}" required>
        <div class="filling-bar"></div>
        <input type="email" name="email" class="form-input" value="{{$user->email}}" required>
        <div class="filling-bar"></div>
        <input type="tel" name="phone" class="form-input" value="{{$user->phone}}" required>
        <div class="filling-bar"></div>
        <input type="file" id="photo" name="photo"> 
        <div class="filling-bar"></div>
        <button type="submit" class="form-button">Save Changes</button>
    </form>
    
</div>

@endforeach
    

</div>

</body>