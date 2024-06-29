<?php

Route::post('/paymentIPN', [\azima\Laravel_paytabs\Controllers\PaytabsLaravelListenerApi::class, 'paymentIPN'])->name('payment_ipn');
