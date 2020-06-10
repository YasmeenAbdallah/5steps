<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5steps

    </title>
    
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/css/uikit.min.css" />
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--the main css stylesheet-->
    <link rel="stylesheet" href="style.css">
    
</head>



<!-- START section__type-nav -->
<nav class="uk-navbar-container" uk-navbar>


<!-- START .uk-navbar-left -->

<div class="uk-navbar-left">

<ul class="uk-navbar-nav">
    <li><img src="img/fivesteps.png" alt="" ></li>
  
    <li><a href="#">Item</a></li>
</ul>

</div>
<!-- END .uk-navbar-left -->
<!-- START .uk-navbar-right -->


<div class="uk-navbar-right">

<ul class="uk-navbar-nav">
    <li class="uk-active"><a href="#">Active</a></li>
    <li>
        <a href="#">Parent</a>
        <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
            </ul>
        </div>
    </li>
    <li><a href="#">Item</a></li>
</ul>

</div>
<!-- END .uk-navbar-right -->


</nav>
<!-- END .section__type-nav -->
