<?php

Route::set('cars', function() {
    Car::createView('Car');
});

Route::set('cars/create', function() {
    Car::getCars();
});

Route::set('booking', function() {
  echo "Test test";
});

?>