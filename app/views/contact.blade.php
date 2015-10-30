@extends('layouts.master')
@section('title')
<title>Contact Us</title>
@stop
@section('content')
    <div class="jumbotron">
        <h1 class="canevalee centeredText">Contact Us</h1>
        <p class="centeredText">
            Please feel free to contact us for more information on our dogges, you can call us at <a href="tel:+12105443004">210-544-3004</a>.
        </p>
    </div>
    <hr>
    <h1 class="canevalee centeredText">Make Deposits. Pay Online,</h1>
    <h1 class="canevalee centeredText"> It’s Easy and Secure With PayPal</h1>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="3543446">
                <input type="image" src="/img/paypal.jpg" class="col-md-12 col-xs-10 center" name="submit" alt="PayPal - The safer, easier way to pay online!">
            </form>
        </div>
    </div>
    <hr>
    <div class="jumbotron">
    <div class="row">
        <img src="/img/mailDog.gif" class="col-md-2" alt="">
        <a href="mail:bullnanzabulldogges@gmail.com"><h2 class="col-md-8 col-md-offset-1 visible-lg visible-xlg visible-md">bullnanzabulldogges@gmail.com</h2></a>
        <a href="mail:bullnanzabulldogges@gmail.com"><h3 class="visible-xs visible-sm col-xs-10 col-xs-offset-1">bullnanzabulldogges@gmail.com</h3></a>
    </div>
    <div class="row">
        <h2 class="centeredText"><u>Mailing Address</u></h2>
        <img class="thumbnail col-md-4 col-sm-12 col-xs-12" src="/img/contactPage/0.jpg" alt="">
        <h4 class="centeredText col-md-4 col-sm-12 col-xs-12">
            Bullnanza Bulldogges<br>
            Bulverde, Tx 78163
        </h4>
        <img class="thumbnail col-md-3 col-md-offset-1 col-sm-12 col-xs-12" src="/img/contactPage/bath.png" alt="">
    </div>
    </div>
    <hr>
    <h1 class="canevalee centeredText">
        Our Bulldogges Are Kid Tested and Mother Approved!
    </h1>
    <div class="row">
        <img class="thumbnail col-md-4 col-sm-12 col-xs-12" src="/img/contactPage/1.jpg" alt="">
        <h4 class="centeredText col-md-4 col-sm-12 col-xs-12">
            Thanks for visiting our site!
        </h4>
        <img class="thumbnail col-md-4 col-sm-12 col-xs-12" src="/img/contactPage/2.jpg" alt="">
    </div>
    <div class="row">
        <br>
        <img class="thumbnail col-md-4 col-sm-12 col-xs-12" src="/img/contactPage/3.jpg" alt="">
        <img class="thumbnail col-md-4 col-sm-12 col-xs-12" src="/img/contactPage/4.jpg" alt="">
        <img class="thumbnail col-md-4 col-sm-12 col-xs-12" src="/img/contactPage/5.jpg" alt="">
    </div>

    <hr>
    <h2 class="centeredText">
        <a href="tel:+12105443004">210-544-3004</a>
    </h2>
    <h4 class="centeredText">
        If our bullies are what you’re looking for or if you would like more information, please contact us with any questions at
    </h4>
    <h2 class="centeredText">
        <a href="tel:+12105443004">210-544-3004</a>
    </h2>
@stop