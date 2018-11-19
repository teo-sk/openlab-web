<?php

use Openlab\Contact\Models\Contact;

Route::post('api/contact', function () {
    $email = \Input::get('email');

    $contact = new Contact();
    $contact->email = $email;
    $contact->save();

    return \Redirect::to('/');

});
