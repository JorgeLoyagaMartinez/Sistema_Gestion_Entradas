
@extends('layout')
@section('title', 'Admin | Fascket')

@section('content')

<style type="text/css">

* {
    box-sizing: border-box;
}

  body {
    background-color: #eee
}

.card {
    background-color: #fff;
    width: 545px;
    border-radius: 26px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 2rem !important;
    margin: 20px 0 50px;
}

.top-container {
    display: flex;
    align-items: center
}

.profile-image {
    border-radius: 10px;
    border: 2px solid #a923ca;
}

.name {
    font-size: 20px;
    font-weight: bold;
    color: #272727;
    position: relative;
    top: 8px
}

.mail {
    font-size: 14px;
    color: grey;
    position: relative;
    top: 2px
}

.middle-container {
    background-color: #eee;
    border-radius: 12px
}

.middle-container:hover {
    outline: 1px solid #a923ca;
    cursor: pointer;
}

.dollar-div {
    background-color: #a923ca;
    padding: 12px;
    border-radius: 10px
}

.round-div {
    border-radius: 50%;
    width: 35px;
    height: 35px;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center
}

.dollar {
    font-size: 16px !important;
    color: #a923ca !important;
    font-weight: bold !important
}

.current-balance {
    font-size: 15px;
    color: #272727;
    font-weight: bold
}

.amount {
    color: #a923ca;
    font-size: 16px;
    font-weight: bold
}

.dollar-sign {
    font-size: 16px;
    color: #272727;
    font-weight: bold
}

.recent-border {
    border-left: 2px solid #a923ca;
    display: flex;
    align-items: center
}

.recent-border:hover {
    border-bottom: 1px solid #a923ca !important
}

.recent-orders {
    font-size: 16px;
    font-weight: 700;
    color: #a923ca;
    margin-left: 2px;
    text-align: center
}

.wishlist {
    font-size: 16px;
    font-weight: 700;
    color: #272727
}

.wishlist-border:hover {
    border-bottom: 1px solid #a923ca !important
}

.fashion-studio {
    font-size: 16px;
    font-weight: 700;
    color: #272727
}

.fashion-studio-border:hover {
    border-bottom: 1px solid #a923ca !important
}

#button {
    margin: 10px 0;
    border: none;
    outline: none;
    padding: 3px;
}

</style>
<body class="white">


    <div class="container d-flex justify-content-center mt-5">
        <div class="card">
            <div class="top-container" style="padding:10px; border-bottom: 1px solid #a923ca"> <img src="https://i.imgur.com/G1pXs7D.jpg" class="img-fluid profile-image" width="70">
                <div class="ml-3">
                    <h5 class="name">Administrador</h5>
                </div>
            </div>
            <a href="{{ route('crear-evento') }}" class="fashion-studio-border pt-2" id="button"> <span class="fashion-studio">Crear evento</span> </a>
            <a href="#" class="fashion-studio-border pt-2" id="button"> <span class="fashion-studio">Log out</span> </a>
        </div>
    </div>

</body>

@endsection
