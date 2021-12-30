
@extends('layout')
@section('title', 'Perfil | Fascket')

@section('content')

<style type="text/css">
  body {
    background-color: #eee
}

.card {
    background-color: #fff;
    width: 545px;
    border-radius: 26px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    padding: 2rem !important;
    margin: 39px auto;
}

.top-container {
    display: flex;
    align-items: center
}

.profile-image {
    border-radius: 10px;
    border: 2px solid #a923ca
}

.name {
    font-size: 15px;
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
    border: 1px solid #a923ca
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
    border-bottom: 1px solid #dee2e6 !important
}

.recent-orders {
    font-size: 16px;
    font-weight: 700;
    color: #a923ca;
    margin-left: 2px
}

.wishlist {
    font-size: 16px;
    font-weight: 700;
    color: #272727
}

.wishlist-border:hover {
    border-bottom: 1px solid #dee2e6 !important
}

.fashion-studio {
    font-size: 16px;
    font-weight: 700;
    color: #272727
}

.fashion-studio-border:hover {
    border-bottom: 1px solid #dee2e6 !important
}

</style>
<body class="white">

   
    <div class="container d-flex justify-content-center mt-5">
        <div class="card">
            <div class="top-container"> <img src="https://i.imgur.com/G1pXs7D.jpg" class="img-fluid profile-image" width="70">
                <div class="ml-3">
                    <h5 class="name">Paul Costa</h5>
                    <p class="mail">pcostapol@gmail.com</p>
                </div>
            </div>
            <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
                <div class="dollar-div px-3">
                    <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
                </div>
                <div class="d-flex flex-column text-right mr-2"> <span class="current-balance">Monto Actual</span> <span class="amount"><span class="dollar-sign">$</span>1500</span> </div>
            </div>
            <div class="recent-border mt-4"> <span class="recent-orders">E Tickets</span> </div>
            <div class="wishlist-border pt-2"> <span class="wishlist">Favoritos</span> </div>
            <a href="{{ route('inicio') }}" class="fashion-studio-border pt-2" id="button" onclick="localStorage.clear()"> <span class="fashion-studio"><i class="fas fa-sign-in-alt"></i>Log out</span></a>
        </div>
    </div>

</body>

@endsection
