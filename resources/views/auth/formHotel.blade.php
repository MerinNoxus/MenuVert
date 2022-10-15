@extends('layouts.app')

@section('contenido')
<div class="form-container">
    <form action="" class="form"></form>
    <div class="form-more">
        <h2 class="form-more__h2">MAKE YOUR RESERVATION</h2>
        <p class="form-more__p">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facilis voluptatum quis hic rerum numquam dolore fugiat asperiores ab quisquam modi impedit iusto distinctio tenetur, consectetur veritatis non cumque vel.
            Voluptas earum, ad veritatis quas unde aperiam id cum eligendi doloribus nemo! Culpa beatae, dolorem delectus veniam, molestiae eaque a odio ratione, recusandae eligendi laborum! Iste eum corrupti iure assumenda.
        </p>
        <button class="form-more__button">Read More</button>
    </div>
    <div class="form-register">
        <h3 class="form-register__h3">Hotel booking form</h3>
        <label for="firstname" class="form-register__label-firstname"> Firstname</label>
        <input type="text" id="firstname" name="firstname" class="form-register__input form-register__input-firstname">
        <label for="lastname" class="form-register__label-lastname">Lastname</label>
        <input type="text" class="form-register__input form-register__input-lastname" id="lastname" name="lastname">
        <label for="email" class="form-register__label-email">Email</label>
        <input type="email" name="email" id="email" class="form-register__input">
        <label class="form-register__label-room" for="room">Room Type</label>
        <select class="form-register__select" name="room" id="room">
            <option class="form-register__option" value="1">1 Bed</option>
            <option class="form-register__option" value="2">2 Bed</option>
            <option class="form-register__option" value="3">3 Bed</option>
            <option class="form-register__option" value="4">4 Bed</option>
        </select>
        <label for="datecheckin" class="form-register__label-checkin">Checkin</label>
        <input type="date" name="datecheckout" id="datecheckin" class="form-register__date">
        <label class="form-register__label-checkout" for="datecheckin">Checkout</label>
        <input type="date" name="datecheckout" id="datecheckout" class="form-register__date">
        <label for="nguest" class="form-register__label-nguest">Number of guests</label>
        <input type="number" name="nguest" id="nguest" class="form-register__input">
        <button class="form-register__button">Book Now</button>
    </div>
</div>
@endsection